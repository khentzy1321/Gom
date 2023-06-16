<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\ChurchInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Scalar\MagicConst\File;

class EventsController extends Controller
{
    public function index()
    {
        $events = Events::with('events')->paginate(7);


        return view('events.index', compact('events'));
    }

    public function create()
    {
        $churchinfos = ChurchInfo::get();
        return view('events.create', compact('churchinfos'));
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'events_name' => 'required|string|max:255',
            'events_desc' => 'required|string|max:5000',
            'events_img' => 'required',
            'events_date' => 'required|date',
            'events_id' => 'required',
        ]);

        if($request->hasfile('events_img'))
        {

           foreach($request->file('events_img') as $image)
           {
               $nameImage =$image->getClientOriginalName();
               $image->move(public_path().'/images/events', $nameImage);
               $data[] = $nameImage;
           }

        $events = new Events;
        $events->events_name = $validatedData['events_name'];
        $events->events_desc = $validatedData['events_desc'];
        $events->events_img=json_encode($data);
        $events->events_date = $validatedData['events_date'];
        $events->events_id = $validatedData['events_id'];

        $events->save();
        }

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function edit($id)
    {
        $event = Events::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Events::findOrFail($id);

        $request->validate([
            'events_name' => 'required|string|max:255',
            'events_desc' => 'required|string|max:5000',
            'events_img' => 'nullable|image|max:5000',
            'events_date' => 'required|date',
        ]);

        if ($request->events_img == null) {
            $event->update([
                'events_name' => $request->events_name,
                'events_desc' => $request->events_desc,
                'events_date' => $request->events_date,
            ]);
        }
        // Otherwise, upload the new image file and update the post with the new image file
        else {
            if($request->hasfile('events_img'))
        {
            $image = [];

           foreach($request->file('events_img') as $image)
           {
               $nameImage = $image->getClientOriginalName();
               $image->move(public_path().'/images/Events', $nameImage);
               $data[] = $nameImage;

               $event = Events::find($id);
               $event->events_name = $request->events_name;
               $event->events_desc= $request->events_desc;
               $event->events_date = $request->events_date;
               $event->events_img=json_encode($data);
               $event->events_id = $request->events_id;
           }
           $event->save();
        }
    }
        // Alert::toast('Updated Successfully', 'success')->autoClose(3000)->timerProgressBar()->width('20rem')->padding('1.5rem');
        return redirect()->route('events.index');
    }
    public function destroy($id)
    {
        $event = Events::find($id);

        if (!empty($event->events_img) && file_exists(public_path('/images/events/' . $event->events_img))) {
            Storage::delete(public_path('images/events/' .$event->events_img));
        }

        if (!empty($event->events_img)) {
            $imageArray = json_decode($event->events_img, true);
            foreach ($imageArray as $imageName) {
                if (file_exists(public_path('images/events/' . $imageName))) {
                    Storage::delete(public_path('images/events/' . $imageName));
                }
            }
        }
        $event->delete();

        // Alert::toast('Deleted Successfully', 'success')->autoClose(3000)->timerProgressBar()->width('20rem')->padding('1.5rem');
        return redirect()->back();
    }

    public function allevents()
    {
        $events = Events::get();
        return view('events.allevents.index', compact('events'));
    }

}
