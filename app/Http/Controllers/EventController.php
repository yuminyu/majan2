<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Models\Janso;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EventController extends Controller
{

    public function index()
    {

        // $reservedPeople = DB::table('reservations')
        // ->select('event_id',DB::raw('sum(number_of_people) as number_of_people'))
        // ->groupBy('event_id');

        //dd($reservedPeople);

        $today = Carbon::today();

        $events = DB::table('events')
                    ->whereDate('startDate','>=',$today)
                    ->orderBy('startDate','asc')
                    ->paginate(10);

        return view('events.index',compact('events'));
    }


    public function create()
    {
        $user = Auth::user();
        $jansos = DB::table('jansos')->get();
        //dd($jansos);
        return view('events.create',compact('user','jansos'));
    }


    public function store(StoreEventRequest $request)
    {
        $user = Auth::user();
        $attendJansoID = $request->attendJanso;
        $attendJansoName = DB::table('jansos')->where('id', $attendJansoID)->value('name');
        $eventDate = $request->eventDate;
        $startTime = $request->startTime;
        $endTime = $request->endTime;

        $start = $eventDate." ".$startTime;
        $startDate = Carbon::createFromFormat('Y-m-d H:i',$start);
        
        $end = $eventDate." ".$endTime;
        $endDate = Carbon::createFromFormat('Y-m-d H:i',$end);
        
        Event::create([
            'attendantId' => $user->id,
            'attendantName' => $user->name,
            'jansoId' => $attendJansoID,
            'jansoName' => $attendJansoName,
            'maxPeople' => 1,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'is_visible' => 1,
        ]);

        return view('dashboard');
    }


    public function show(Event $event)
    {

        $event = Event::findOrFail($event->id);

        $users = $event->users;
        
        $reservations = [];
        foreach($users as $user){
            $reservedInfo = [
                'name' => $user->name,
                'number_of_people' => $user->pivot->number_of_people,
                'canceled_date' => $user->pivot->canceled_date
            ];

            array_push($reservations,$reservedInfo);
        }
        //dd($reservations);
        return view('events.show',compact('users','event','reservations'));
    }

    public function past(){
        $today = Carbon::today();
        $events = DB::table('events')
        ->whereDate('startDate','<',$today)
        ->orderBy('startDate','desc')
        ->paginate(10);

        return view('events.past',compact('events'));
    }

    public function edit(Event $event)
    {
        //
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    public function destroy(Event $event)
    {
        //
    }
}
