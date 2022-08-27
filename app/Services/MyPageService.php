<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MyPageService{

    public static function reservedEvent($events,$string){

        $reservedEvents = [];
        if($string === 'fromToday'){
            foreach($events->sortBy('startDate') as $event){
                if(is_null($event->pivot->canceled_date)&&$event->startDate >= Carbon::now()->format('Y-m-d 00:00:00'))
                {
                    $eventInfo = [
                        'id' => $event->id,
                        'name'=>$event->attendantName,
                        'jansoName'=>$event->jansoName,
                        'startDate'=>$event->startDate,
                        'endDate'=>$event->endDate,
                        'number_of_people' => $event->pivot->number_of_people,
                    ];
                    array_push($reservedEvents,$eventInfo);
                }
            }
        }

        if($string === 'past'){
            foreach($events->sortByDesc('startDate') as $event){
                if(is_null($event->pivot->canceled_date)&& $event->startDate < Carbon::now()->format('Y-m-d 00:00:00')){
                    $eventInfo = [
                        'id' => $event->id,
                        'name'=>$event->attendantName,
                        'jansoName'=>$event->jansoName,
                        'startDate'=>$event->startDate,
                        'endDate'=>$event->endDate,
                        'number_of_people' => $event->pivot->number_of_people,
                    ];
                    array_push($reservedEvents,$eventInfo);
                }
            }
        }

        return $reservedEvents ;
    }

}