<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            イベントカレンダー
        </h2>
    </x-slot>

<div class="py-4 flex justify-center">
    <div class="event-calendar max-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rouded-lg">

                @livewire('calendar')

        </div>
    </div>
</div>
</x-app-layout>
