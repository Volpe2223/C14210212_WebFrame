<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    public function add_Organizer(Request $request){    
        $organizer = new Organizers;
        $organizer->name = $request->name;
        $organizer->description = $request->description;
        $organizer->facebook_link = $request->facebook_link;
        $organizer->x_link = $request->x_link;
        $organizer->website_link = $request->website_link;
        $organizer->save();
    
        return redirect()->back()->with('success', 'your message,here');
    }
}
