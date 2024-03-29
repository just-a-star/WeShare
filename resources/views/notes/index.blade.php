<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    @php
    $notes = Auth::user()->notes()->get();

    @endphp
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-10 text-gray-900 dark:text-gray-100">
                    <livewire:notes.show-notes>

                </div>
            </div>
        </div>
</x-app-layout>