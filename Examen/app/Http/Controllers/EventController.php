<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('show',compact('events'));
    }
    public function create()
    {
        return view('welcome');
    }
    
    public function store(Request $request){
        $create = $request->all();
        $data = $request->validate([
            'title'=>['required','max:50'],
            'description'=>['required','max:50'],
            'date'=>['required','max:50'],
            'location'=>['required','max:50'],
        ]);
       Event::create($create);

        return redirect()->back();
    }

    public function edit($id)
    {
        
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
      $request->validate([
        'title'=>['required','max:50'],
        'description'=>['required','max:50'],
        'date'=>['required','max:50'],
        'location'=>['required','max:50'],
      ]);
      $event = Event::find($id);
      $event->update($request->all());
      return redirect()->route('events.index')
        ->with('success', 'Post updated successfully.');
    }

    public function destroy($id) {
        Event::where('id', $id)->delete();
        return redirect()->route('events.index')->with('success', 'Post deleted successfully');
 
    }

}
