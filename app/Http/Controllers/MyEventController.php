<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use App\Services\MyPageService;

class MyEventController extends Controller
{
    public function index(){

        $user = User::findOrFail(Auth::id());
        // dd($user);
        $user_id = $user->id;
        //dd($user_id);

        $myevents = DB::table('events')
        ->where('attendantId','=',$user_id)
        ->orderBy('startDate','asc')
        ->paginate(10);

        //dd($myevents);
        //dd(count($myevents));

        return view('myevent/index',compact('myevents'));
    }
}
