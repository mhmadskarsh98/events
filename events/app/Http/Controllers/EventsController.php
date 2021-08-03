<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=Event::get();
        return view('admin.events')->with('events',$event);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addEvent');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event=new Event();
        $event->title = $request->title;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->price = $request->price;
        $event->AttendanceNumbers = $request->AttendanceNumbers;
        $event->country = $request->country;
        $event->city = $request->city;
        $event->address = $request->address;
        $event->save();
        return redirect('/admin/event');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event=Event::find($id);
        return view('admin.showEvent')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event=Event::find($id);
        return view('admin.editEvent')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Event $event)
    {
        $event->title = $request->title;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->price = $request->price;
        $event->AttendanceNumbers = $request->AttendanceNumbers;
        $event->country = $request->country;
        $event->city = $request->city;
        $event->address = $request->address;
        $event->save();
        return redirect('/admin/event');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('/admin/event');
    }
}
