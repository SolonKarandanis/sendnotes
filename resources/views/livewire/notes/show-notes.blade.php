<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'notes' => Auth::user()->notes()->orderBy('send_date','asc')->get(),
        ];
    }
}; ?>

<div>
    <div class="space-y-2">
        @foreach ($notes as $note)
            <x-card wire:key='{{$note->id}}'>
                <div class="flex justify-between">
                    <a href="#" class="text-xl font-bold hover:underline hover:text-blue-500">
                        {{$note->title }}
                    </a>
                    <div class="text-xs text-gray-500">
                        {{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y') }}
                    </div>
                </div>
            </x-card>
        @endforeach
    </div>
</div>
