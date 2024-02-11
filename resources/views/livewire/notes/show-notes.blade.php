<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'notes' => Auth::user()->notes()->orderBy('created_at', 'desc')->get(),
        ];
    }
}; ?>

<div>
    @foreach ($notes as $note)
        <x-card wire:key='{{ $note->id }}'>
            <div class="flex justify-between">
                <a href="#" class="text-xl font-bold hover:text-sky-500 hover:underline">
                    {{ $note->title }}
            </div>
        </x-card>
    @endforeach
</div>
