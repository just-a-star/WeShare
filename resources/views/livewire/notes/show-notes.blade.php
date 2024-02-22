<?php

use Livewire\Volt\Component;
use Carbon\Carbon;
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
    <x-card wire:key="{{ $note->id }}" title="Title: {{ $note->title }}" class="" rounded="3xl">

        <div class="p-2">
            <p class="pb-2">@if ($note->is_public) < outline positive label="Public" class="p-4 ">
                    />
                    @else
                    <x-badge outline label="Private" negative class="p-4 rounded-full" />
                    @endif
            </p>
            <p>{{ $note->content }}</p>
        </div>
        <div class="flex justify-end">
            <x-badge secondary rounded="3xl" size="md" class="p-4 text-white"> {{
                Carbon::parse($note->send_date)->diffForHumans() }}
            </x-badge>
        </div>
        <x-slot name="footer">
            <div class="flex items-center justify-end space-x-1 ">
                <div class="flex-grow">
                    <p>Recipient: </p>
                </div>
                <x-button.circle icon="eye" label="Take a look" primary />
                <x-button.circle icon="trash" label="Delete" secondary />

            </div>

        </x-slot>
    </x-card>
    @endforeach
</div>