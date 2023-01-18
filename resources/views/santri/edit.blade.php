<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Santri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('santri.update', $santri->id) }}">
                    <!-- blade directives -->
                    @csrf
                    @method('PUT')
                    <!-- Name -->
                    <div>
                        <x-input-label for="nisn" :value="__('NISN')" />
                        <x-text-input id="nisn" class="block mt-1 w-full" type="text" name="nisn" value="{{ $santri->nisn }}" required autofocus />
                        <x-input-error :messages="$errors->get('nisn')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="nik" :value="__('NIK')" />
                        <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" value="{{ $santri->nik }}" required />
                        <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="ttl" :value="__('TTL')" />
                        <x-text-input id="ttl" class="block mt-1 w-full" type="text" name="ttl" value="{{ $santri->ttl }}" required />
                        <x-input-error :messages="$errors->get('ttl')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="alamat" :value="__('Alamat')" />
                        <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" value="{{ $santri->alamat }}" required />
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Ubah Data') }}
                        </x-primary-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>