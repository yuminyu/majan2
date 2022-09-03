<x-app-layout>
<form method="post" action="{{ route('events.reserve',['id'=>$event->id]) }}">
    @csrf

    <div class="mt-4">
        {{$event->attendantName}}
    </div>
    <div class="mt-4">
        {{$event->jansoName}}
    </div>
    <div class="mt-4">
        {{$event->startDate}}
    </div>
    <div class="mt-4">
        {{$event->endDate}}
    </div>

    <input type="hidden" name="id" value="{{$event->id}}">
    <div class="flex items-center justify-start mt-4">
        <x-jet-button class="ml-4">
            予約する
        </x-jet-button>
    </div>
</form>
</x-app-layout>