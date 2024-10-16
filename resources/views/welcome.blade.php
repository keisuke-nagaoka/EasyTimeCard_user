<x-guest-layout>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg mx-auto max-w-md">
        <div class="p-6">
            <div class="information text-center">
                <p>こちらはEasyTimeCardのユーザーページです。
                    <br><br>
                    管理者が設定したログイン情報で
                    <br>ログインしてください。
                </p>
                <button type="button" class="btn btn-neutral mt-3" onclick="window.location='{{ route('login') }}'">ログイン　</button>
            </div>
        </div>
    </div>
</x-guest-layout>
