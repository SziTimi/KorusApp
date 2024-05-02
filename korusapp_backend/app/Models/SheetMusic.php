<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheetMusic extends Model
{
    use HasFactory;


    protected $table = 'sheet_music';
    protected $fillable = ['composer', 'song_title', 'sheet_music_pdf'];
}
