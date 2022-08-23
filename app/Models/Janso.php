<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Janso extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tokutyo',
        'seiketsusa',
        'huniki',
        'yasusa',
        'mataikitai',
        'location',
        'jansougazou',
    ];
}
