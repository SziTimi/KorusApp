<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class UserEventController extends Controller
{
    public function index()
    {
        $userEvents = Event::with('sheetMusic')->get();

        // Transform the collection to exclude certain fields
        $filteredEvents = $userEvents->map(function ($event) {
            return [
                'id' => $event->id,
                'event_time' => $event->event_time,
                'event_venue' => $event->event_venue,
                'event_address' => $event->event_address,
                'additional_info' => $event->additional_info,
                'sheetMusic' => [
                    'id' => $event->sheetMusic->id ?? null,
                    'composer' => $event->sheetMusic->composer ?? null,
                    'song_title' => $event->sheetMusic->song_title ?? null,
                    'sheet_music_pdf' => $event->sheetMusic->sheet_music_pdf ?? null
                ]
            ];
        });

        return response()->json($filteredEvents);
       /* $userEvent = Event::query()
            ->select('id', 'event_time', 'event_venue', 'event_address', 'additional_info') // select only specific fields from events
            ->with(['sheetMusic:id, song_title,sheet_music_pdf']) // select specific fields from related sheetMusic
            ->get();
       */

      /* $userEvent = Event::query()
            ->select('id', 'event_time', 'event_venue', 'event_address', 'additional_info') // select only specific fields from events
            ->with('sheetMusic')
            ->get();
        return response()->json($userEvent);
      */


     // $userEvent = Event::with('sheetMusic')->get();
     //$userEvent= Event::all(['event_time', 'event_venue', 'event_address', 'sheet_music_pdf', 'additional_info' ]);
       // return response()->json($userEvent);



    }
}
