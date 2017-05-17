<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthenticateController;


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
        // Authenticate the user
        $auth = AuthenticateController::authenticate();

        // return response if authentication fails;
        if ($auth['result'] == false) {
            return $auth['response'];
        }

        // Check the role of the user
        if ($auth['role'] !== 'ROLE_ADMIN') {
            return Response::json([
                'error' => [
                    'message' => 'Admin rights required']]);
        }

        // Check to see if the properties has been posted
        // Datetime format for testing - 2017-01-19 03:14:07
        if((!$request->name) || (!$request->description) || (!$request->start_date) || (!$request->end_date) || (!$request->img_path))
            // Create a response using the response class
        {
            $response = Response::json([
                'error' => [
                    'message' => 'Please enter all the required fields']], 422);
            return $response;
        }


        $event = new Event;

        $event->name = $request->name;  
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->img_path = $request->img_path;
        
        $event->save();

        $response = Response::json([
            'message' => 'The event '.$event->name.' has been created'
            ], 200);
        return $response;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find event id
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
        // Authenticate the user
        $auth = AuthenticateController::authenticate();
        
        // return response if authentication fails;
        if ($auth['result'] == false) {
            return $auth['response'];
        }

        // Check the role of the store
        if ($auth['role'] !== 'ROLE_ADMIN') {
            return Response::json([
                'error' => [
                    'message' => 'Admin rights required']]);
        }
        
        // Find the event on ID
        $event = Event::find($id);

        if (!$event) {
            $response = Response::json([
                'error' => [
                    'message' => 'The event could not be found']], 422);
            return $response;
        }

        $event->name = $request->name;  
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->img_path = $request->img_path;

        $event->save();

         $response = Response::json([
            'message' => 'The event '.$event->name.' has been updated'
            ], 200);
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Authenticate the user
        $auth = AuthenticateController::authenticate();
        
        // return response if authentication fails;
        if ($auth['result'] == false) {
            return $auth['response'];
        }

        // Check the role of the store
        if ($auth['role'] !== 'ROLE_ADMIN') {
            return Response::json([
                'error' => [
                    'message' => 'Admin rights required']]);
        }
        $event = Event::find($id);

        if (!$event) {
            $response = Response::json([
                'error' => [
                    'message' => 'The event could not be found']], 422);
            return $response;
        }

        Event::destroy($id);
        $response = Response::json([
            'message' => 'The event '.$event->name.' has been deleted'], 200);
        return $response;
    }
}
