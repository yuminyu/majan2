<x-app-layout>
<form method="post" action="{{ route('events.reserve',['id'=>$event->id]) }}">
    @csrf

    <div class="mt-4">
    <p>アテンダント名</p>
    <p>{{$event->attendantName}}</p>
    </div>
    <div class="mt-4">
    <p>アテンド雀荘</p>
    <p>{{$event->jansoName}}</p>
    </div>
    <div class="mt-4">
    <p>集合時間</p>
    <p>{{$event->startDate}}</p>
    </div>
    <div class="mt-4">
    <p>解散時間</p>
    <p>{{$event->endDate}}</p>
    </div>

    <input type="hidden" name="id" value="{{$event->id}}">
    <div class="flex items-center justify-start mt-4">
        <x-jet-button class="ml-4">
            予約する
        </x-jet-button>
    </div>
</form>
</x-app-layout>