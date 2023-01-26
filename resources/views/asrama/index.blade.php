<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Asrama') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <form action="{{ route('asrama.create') }}" method="get">
                    <x-primary-button class="ml-4">
                        {{ __('Tambah Data') }}
                    </x-primary-button>
                </form>
                <!-- <a href="{{ route('santri.create') }}">Tambah Data</a> -->
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
            <div class="p-6 text-gray-900">
                <div class="text-lg mb-4 flex justify-end">Total Santri : {{ $total_santri }}</div>
                @foreach ( $asramas as $asrama )
                    <div class="flex justify-between">
                        <div class="flex justify-start">
                            <a href="{{ route('asrama.show', $asrama->id) }}">
                                <p>Asrama : <?= $asrama->nama ?></p>
                                <p>Jumlah Santri : {{ count($asrama->santris) }}</p>
                            </a>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <form action="{{ route('asrama.edit', $asrama->id) }}" method="GET">
                                <x-primary-button class="ml-4 mb-4 bg-blue-600">
                                    {{ __('Ubah Data') }}
                                </x-primary-button>
                            </form>
                            <form action="{{ route('asrama.destroy', $asrama->id) }}" method="POST">
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