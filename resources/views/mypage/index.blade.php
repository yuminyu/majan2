<x-app-layout>
<a href="events/past">予約イベント一覧</a>
<div class="py-2">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<section class="text-gray-600 body-font">
  <div class="container px-5 py-6 mx-auto">
    <div class="lg: w-full mx-auto overflow-auto">
        これからの予約
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">アテンダント名</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">雀荘</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">定員</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">集合時間</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">解散時間</th>
          </tr>
        </thead>
        <tbody>
        @foreach($fromTodayEvents as $event)
          <tr>
            <td class="text-blue-500 px-4 py-3">{{$event['name']}}</td>
            <td class="px-4 py-3">{{$event['jansoName']}}</td>
            <td class="px-4 py-3">{{$event['number_of_people']}}</td>
            <td class="px-4 py-3">{{$event['startDate']}}</td>
            <td class="px-4 py-3">{{$event['endDate']}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="container px-5 py-6 mx-auto">
    <div class="lg: w-full mx-auto overflow-auto">
        過去の予約
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">アテンダント名</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">雀荘</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">定員</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">集合時間</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">解散時間</th>
          </tr>
        </thead>
        <tbody>
        @foreach($pastEvents as $event)
          <tr>
            <td class="text-blue-500 px-4 py-3">{{$event['name']}}</td>
            <td class="px-4 py-3">{{$event['jansoName']}}</td>
            <td class="px-4 py-3">{{$event['number_of_people']}}</td>
            <td class="px-4 py-3">{{$event['startDate']}}</td>
            <td class="px-4 py-3">{{$event['endDate']}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>

</div>
</div>
</div>
</section>
</x-app-layout>