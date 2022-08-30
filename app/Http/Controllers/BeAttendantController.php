<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BeAttendantController extends Controller
{
    public function index(){
        $user = Auth::user();
        $user->role = "attendant";
        $user->save();
        session()->flash('status','アテンダントになりました！');
        return view('dashboard');
    }
    
}
