<?php

namespace App\Http\Controllers;

use App\Models\Worktime;

use illuminate\Support\Facades\Auth;


class WorktimeController extends Controller
{
    public function index($id)
    {
        //ログイン中従業員の勤怠を取得
        $worktimes = Auth::user()->worktimes;

        //idで勤怠を取得
        $worktime = Worktime::findOrFail($id);

        //employee_idを代入
        $owner = $worktime->employee_id;

        //ログイン中従業員をidで取得
        $user = Auth::user()->id;

        //ログイン中従業員以外はトップページに遷移させる
        if ($owner != $user) {
            return redirect('/');
        }

        //勤務時間一覧ページの表示
        return view('dashboard',[
            'worktimes' => $worktimes,
            'worktime' => $worktime,
        ]);
    }
}
