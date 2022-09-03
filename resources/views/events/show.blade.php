<x-app-layout>
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

    <!-- 今日より前の集合時間の場合は編集できないようにする-->
    <!--@if(strtotime($event->startDate) >= strtotime(\Carbon\Carbon::today()->format('Y-m-d H:i:s')))-->
    <div class="flex items-center justify-start mt-4">
        <x-jet-button class="ml-4">
        <a href="/">戻る</a>
        </x-jet-button>
    </div>
    <!--@endif-->

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
          </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
        @if(is_null($reservation['canceled_date']))
          <tr>
            <td class="px-4 py-3">{{$reservation['name']}}</td>
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