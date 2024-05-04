<?php

namespace App\Http\Controllers;

use App\Models\SheetMusic;
use Illuminate\Http\Request;

class SheetMusicController extends Controller
{
    public function index()
    {
        $sheetMusic= SheetMusic::all(['composer', 'song_title', 'sheet_music_pdf' ]);
        return response()->json($sheetMusic);


    }

}
