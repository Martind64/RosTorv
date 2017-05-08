<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;


// Models
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list all events

        $event = Event::all();

        $response = Response::json($event, 200);

        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if((!$request->name) || (!$request->description) || (!$request->start_date) || (!$request->end_date) || (!$request->img_path))
            // Create a response using the response class
        {
            $response = Response::json([
                'error' => [
                    'message' => 'Please enter all the required fields']], 422);
            return $response;


        }


        $event = new Event;

        $event->img_path = $request->name;  
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->img_path = $request->img_path;
        
        
        // return $request->description;    
        // return $event;

        $event->create();



        // $response = Response::json([
        //     'message' -> 'the event has been created'], 200);

        // return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find store id

        $event = Event::find($id);

        //if the event doesn't exist return an error response
        if(!$event) {
            $response = Response::json([
                'error' => [
                    'message' => 'The event coould not be found']], 422);
            return $response;
        }

        // Save the event and return a success message
        $response = Response::json($event, 200);

        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
