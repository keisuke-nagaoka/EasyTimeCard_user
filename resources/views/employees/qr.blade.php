<x-app-layout>
    <x-slot name="header">
        <h2 class="slot font-semibold text-xl text-gray-800 leading-tight">
            {{ $employee->name }}の{{ __('QR') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <button type="button" class="btn btn-neutral mt-3" onclick="window.location='{{ route('dashboard') }}'">戻る　</button>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="qr p-6 text-gray-900">
                    <div>{!! $qrCode !!}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
