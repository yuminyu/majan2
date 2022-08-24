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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = DB::table('events')
                    ->orderBy('startDate','asc')
                    ->paginate(10);

        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $jansos = DB::table('jansos')->get();
        //dd($jansos);
        return view('events.create',compact('user','jansos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
