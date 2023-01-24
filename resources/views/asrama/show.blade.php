<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Asrama') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">  
                <div class="flex justify-between">
                    <div class="flex justify-start">
                        <div class="p-6 text-gray-900">
                            <div class="border border-gray-500 py-2 px-3 m-4">
                                <p>Asrama : {{ $asrama->nama }}</p><br>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>