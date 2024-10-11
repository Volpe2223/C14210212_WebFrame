<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event_Categories;


class EventCategoryController extends Controller
{
    public function add_Event_Category(Request $request){    
        $event_Categories = new Event_Categories;
        $event_Categories->name = $request->name;
        $event_Categories->save();
    
        return redirect('/category_name');
    }

    public function List_Category_Events()
    {
        $category_name = Event_Categories::all();

        return view('Master_Data.Events.Kategori_Events',compact('category_name'));
    }

    public function edit($id)
    {
        $category = Event_Categories::findOrFail($id);
        return view('Master_Data.Events.edit_category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Event_Categories::findOrFail($id);
        $category->name = $validatedData['name'];
        $category->save();

        return redirect('/category_name')->with('success', 'Catogories updated successfully!');
    }

    public function delete($id)
    {
        $category = Event_Categories::findOrFail($id);
        $category->delete();

        return redirect('/category_name')->with('success', 'Category deleted successfully!');
    }
}
