<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Santri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <form action="{{ route('santri.create') }}" method="get">
                    <x-primary-button class="ml-4">
                        {{ __('Tambah Data') }}
                    </x-primary-button>
                </form>
                <!-- <a href="{{ route('santri.create') }}">Tambah Data</a> -->
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
            <div class="flex justify-between">
                <div class="flex justify-start">
                    <div class="p-6 text-gray-900">
                        <div class="border border-gray-500 py-2 px-3 m-4">
                            <p>NISN : {{ $santri->nisn }}</p><br>
                            <p>NIK : {{ $santri->nik }}</p><br>
                            <p>TTL : {{ $santri->ttl }}</p><br>
                            <p>Alamat : {{ $santri->alamat }}</p><br>
                        </div>
                        <br>
                    </div>
                </div>
                <!-- <div class="flex justify-end mb-4">
                    <form action="">
                        <x-primary-button class="ml-4">
                            {{ __('Ubah Data') }}
                        </x-primary-button>
                    </form>
                    <form action="">
                        <x-primary-button class="ml-4">
                            {{ __('Hapus Data') }}
                        </x-primary-button>
                    </form>
                </div> -->
            </div>
            </div>
        </div>
    </div>
</x-app-layout>