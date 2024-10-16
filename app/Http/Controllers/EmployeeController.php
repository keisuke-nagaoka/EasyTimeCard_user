<?php

namespace App\Http\Controllers;

use App\Models\Worktime;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

use Carbon\Carbon;

use SimpleSoftwareIO\QrCode\Facades\QrCode;


class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        //idで従業員を取得
        $employee = Auth::user();

        //ログイン中従業員以外はトップページに遷移させる
        if (Auth::user()) {

            //従業員の勤怠一覧を取得
            $worktime = $employee->worktimes;

            // 年月をリアルタイムで取得
            $year = $request->input('year', Carbon::now()->year);
            $month = $request->input('month', Carbon::now()->month);

            // 月の開始日と終了日を取得
            $startOfMonth = Carbon::create($year, $month, 1);
            $endOfMonth = $startOfMonth->copy()->endOfMonth();

            // カレンダーの日付情報を生成
            $dates = [];
            for ($date = $startOfMonth; $date->lte($endOfMonth); $date->addDay()) {
                $worktime = Worktime::where('employee_id', $employee->id)
                    ->whereDate('date', $date)
                    ->first();

                $dates[] = [
                    'date' => $date->copy(),
                    'worktime' => $worktime,
                ];
            }

            //従業員の勤怠を表示
            return view('dashboard', [
                'employee' => $employee,
                'worktime' => $worktime,
                'dates' => $dates,
                'year' => $year,
                'month' => $month,
            ]);
        }

        return view('/');
    }


    public function showQr()
    {
        $employee = Auth::user();

        if ($employee) {
            //QRコード生成
            $qrCode = QrCode::size(250)->generate(route('employees.qr', ['id' => $employee->id]));

            return view('employees.qr', [
                'employee' => $employee,
                'qrCode' => $qrCode
            ]);
        }

        return redirect('/');
    }
}
