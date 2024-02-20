<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'notes' => Auth::user()->notes()->orderBy('send_date', 'asc')->get(),
        ];
    }
}; ?>

<div>
    @foreach ($notes as $note)
    <x-card wire:key='{{ $note->id }}'>
        <div class="flex justify-between">
            <a href="#">
                <x-card wire:key='notes' title="{{ $note->title }}" rounded="3xl">
            </a>
            {{ $note->content }}

            <x-slot name="footer" class="flex items-center justify-between">
                <x-button label="Take a look" primary />
            </x-slot>

    </x-card>

</div>
</x-card>
@endforeach
</div>