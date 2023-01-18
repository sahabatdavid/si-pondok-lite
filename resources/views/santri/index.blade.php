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
                
            <div class="p-6 text-gray-900">
                @foreach ( $santris as $santri )
                    <div class="flex justify-between">
                        <div class="flex justify-start">
                            <a href="{{ route('santri.show', $santri->id) }}">
                                <p>NISN : <?= $santri->nisn ?></p>
                                <p>NIK : <?= $santri->nik ?></p>
                                <p>TTL : <?= $santri->ttl ?></p>
                                <p>Alamat : <?= $santri->alamat ?></p>
                            </a>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <form action="{{ route('santri.edit', $santri->id) }}" method="GET">
                                <x-primary-button class="ml-4 mb-4 bg-blue-600">
                                    {{ __('Ubah Data') }}
                                </x-primary-button>
                            </form>
                            <form action="{{ route('santri.destroy', $santri->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-primary-button class="ml-4 mb-4 bg-red-800 hover:bg-red-600">
                                    {{ __('Hapus Data') }}
                                </x-primary-button>
                            </form>
                        </div>
                    </div>
                  @endforeach  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>