<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizers;

class OrganizerController extends Controller
{
    public function add_Organizer(Request $request){    
        $organizer = new Organizers;
        $organizer->name = $request->name;
        $organizer->description = $request->description;
        $organizer->facebook_link = $request->facebook_link;
        $organizer->x_link = $request->x_link;
        $organizer->website_link = $request->website_link;
        $organizer->save();
    
        return redirect('/organizers');
    }

    public function List_Organizer()
    {
        $organizers = Organizers::all();

        return view('Master_Data.Organizer.List_Organizer',compact('organizers'));
    }

    public function detailOrganizer($id)
    {
        $organizer = Organizers::findOrFail($id);
        return view('Master_Data.Organizer.Detail_Organizer', compact('organizer'));
    }

    public function edit($id)
    {
        $organizer = Organizers::findOrFail($id);
        return view('Master_Data.Organizer.edit', compact('organizer'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'facebook_link' => 'nullable|string|url',
            'x_link' => 'nullable|string|url',
            'website_link' => 'nullable|string|url',
            'description' => 'nullable|string',
        ]);

        $organizer = Organizers::findOrFail($id);
        $organizer->name = $validatedData['name'];
        $organizer->facebook_link = $validatedData['facebook_link'];
        $organizer->x_link = $validatedData['x_link'];
        $organizer->website_link = $validatedData['website_link'];
        $organizer->description = $validatedData['description'];
        $organizer->save();

        return redirect('/organizers')->with('success', 'Organizer updated successfully!');
    }

    public function delete($id)
    {
        $organizer = Organizers::findOrFail($id);
        $organizer->delete();

        return redirect('/organizers')->with('success', 'Organizer deleted successfully!');
    }


    

}
