<x-app-layout>
<form method="get" action="{{ route('events.edit',['event'=>$event->id]) }}">


    <div class="mt-4">
        {{$event->attendantName}}
    </div>
    <div class="mt-4">
        {{$event->jansoName}}
    </div>
    <div class="mt-4">
        {{$event->maxPeople}}
    </div>
    <div class="mt-4">
        {{$event->startDate}}
    </div>
    <div class="mt-4">
        {{$event->endDate}}
    </div>

    <!-- 今日より前の集合時間の場合は編集できないようにする-->
    @if(strtotime($event->startDate) >= strtotime(\Carbon\Carbon::today()->format('Y-m-d H:i:s')))
    <div class="flex items-center justify-start mt-4">
        <x-jet-button class="ml-4">
            編集
        </x-jet-button>
    </div>
    @endif
</form>

@if(!$users->isEmpty())
予約状況
<div class="py-2">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<section class="text-gray-600 body-font">
<div class="container px-5 py-6 mx-auto">
    <div class="lg: w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">予約者名前</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">予約数</th>
          </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
        @if(is_null($reservation['canceled_date']))
          <tr>
            <td class="px-4 py-3">{{$reservation['name']}}</td>
            <td class="px-4 py-3">{{$reservation['number_of_people']}}</td>
          </tr>
        @endif
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</section>
@endif
</x-app-layout>