<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Event;
use App\Interest;

class InterestController extends Controller
{
    public static function delete(Event $event) {

        $user_id = Auth::id();
        $event_id = $event->id;


        Interest::where('user_id', $user_id)->where('event_id', $event_id)->delete();
    }
}
