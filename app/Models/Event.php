<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendantId',
        'attendantName',
        'jansoId',
        'jansoName',
        'maxPeople',
        'startDate',
        'endDate',
        'is_visible'
    ];

    public function users(){
        return $this->belongsToMany(User::class,'reservations')
        ->withPivot('id','number_of_people','canceled_date');
    }
}
