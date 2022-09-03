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


@if(!$users->isEmpty())
<h1>
予約状況
</h1>
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