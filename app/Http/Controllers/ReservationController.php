<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function detail($id){
        
        $event = Event::findOrfail($id);

        return view('event-detail',compact('event'));
    }

    public function reserve(Request $request){
        $event = Event::findOrFail($request->id);
        $reservedPeople = DB::table('reservations')
        ->select('event_id',DB::raw('sum(number_of_people) as number_of_people'))
        ->whereNull('canceled_date')
        ->groupBy('event_id')
        ->having('event_id',$request->id)
        ->first();

        if(is_null($reservedPeople) || $event->max_people >= $reservedPeople->number_of_people + $request->reserved_people){
            Reservation::create([
                'user_id' => Auth::id(),
                'event_id' => $request->id,
                'number_of_people' => 1,
            ]);
            session()->flash('status','登録OK');
            return to_route('dashboard');
        }else{
            session()->flash('status','登録できませんでした');
            return view('dashboard');
        }
    }
}
