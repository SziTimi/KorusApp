<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    public $timestamps = true;

    protected $fillable = [
        'event_time',
        'event_venue',
        'event_address',
        'sheet_music_id',
        'additional_info',
    ];
}
