<x-app-layout>
<form method="POST" action="{{ route('events.store') }}">
    @csrf

    <div>
        <x-jet-label for="attendJanso" value="雀荘" />
        <select id="attendJanso" class="block mt-1 w-1/3" name="attendJanso">
            <option value="" selected hidden>アテンド雀荘はオススメから選んでね</option>
            @foreach($jansos as $janso)
            <option value="{{$janso->id}}">
                {{$janso->name}}
            </option>
            @endforeach
        </select>
    </div>

    <div class="mt-4">
        <x-jet-label for="eventDate" value="アテンド日" />
        <x-jet-input id="eventDate" class="block mt-1 w-1/4" type="text" name="eventDate" required autofocus />
    </div>
    <div class="mt-4">
        <x-jet-label for="startTime" value="集合時間" />
        <x-jet-input id="startTime" class="block mt-1 w-1/4" type="text" name="startTime" required autofocus />
    </div>
    <div class="mt-4">
        <x-jet-label for="endTime" value="解散時間" />
        <x-jet-input id="endTime" class="block mt-1 w-1/4" type="text" name="endTime" required autofocus />
    </div>



    <div class="flex items-center justify-start mt-4">
        <x-jet-button class="ml-4">
            イベント登録！
        </x-jet-button>
    </div>
</form>
</x-app-layout>