<?php

namespace Modules\Event\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Modules\Event\Entities\Event;
use Modules\Event\Http\Requests\StoreRequest;
use Modules\Event\Http\Requests\UpdateRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        abort_if(Gate::denies('show_events'), 403);
        $events = Event::latest()->get();

        return view('event::event.index',compact("events"));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        abort_if(Gate::denies('create_events'), 403);
        return view('event::event.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreRequest $request)
    {
        if($request->status){
            $status = $request->status;
        }
        else{
            $status = 'off';
        }
        Event::create([
            'title' => $request['title'],
            'date' => $request['date'],
            'status' => $status
        ]);
        
        return redirect()->route('events.index')->with('success', 'Added Successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('event::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        abort_if(Gate::denies('edit_events'), 403);
        $event = Event::findorfail($id);

        return view('event::event.edit',compact("event"));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateRequest $request, $id)
    {
        $event = Event::findorfail($id);
        if($request->status){
            $status = $request->status;
        }
        else{
            $status = 'off';
        }
        $event->update([
            'title' => $request['title'],
            'date' => $request['date'],
            'status' => $status
        ]);
        
        return redirect()->route('events.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('delete_events'), 403);
        $event = Event::findOrfail($id);
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Deleted Successfully');
    }
    public function status($id)
    {
        abort_if(Gate::denies('access_events'), 403);
        $event = Event::findOrfail($id);
        if($event->status == 'on')
        {
            $status = 'off';
        }else{
            $status = 'on';
        }
        $event->update([
           'status' => $status 
        ]);
        return redirect()->route('events.index')->with('success', 'Status Updated Successfully');
    } 
}
