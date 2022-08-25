<?php

namespace App\Services;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EventService{

    public static function getWeekEvents($startDate,$endDate){

        $reservedPeople = DB::table('reservations')
        ->select('event_id',DB::raw('sum(number_of_people) as number_of_people'))
        ->groupBy('event_id');

        return DB::table('events')
        ->leftJoinSub($reservedPeople,'reservedPeople',function($join){
            $join->on('events.id','=','reservedPeople.event_id');
        })
        ->whereBetween('events.startDate',[$startDate,$endDate])
        ->orderBy('events.startDate','asc')
        ->get();
    }

}