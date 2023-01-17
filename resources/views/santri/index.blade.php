<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Santri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($santris as $santri)
                    <p>NISN : {{ $santri->nisn }}</p><br>
                    <p>NIK : {{ $santri->nik }}</p><br>
                    <p>TTL : {{ $santri->ttl }}</p><br>
                    <p>Alamat : {{ $santri->alamat }}</p><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>