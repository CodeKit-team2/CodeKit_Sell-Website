@php
    $plural_items = "Categories";
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-gray-100 p-10">
                {{-- <x-admin.manager.manager-content>
                    <x-slot name="items">
                        {{ $plural_items }}
                    </x-slot>
                </x-admin.manager.manager-content> --}}
                @livewire('admin.category-data')

            </div>
        </div>
    </div>
</x-app-layout>
