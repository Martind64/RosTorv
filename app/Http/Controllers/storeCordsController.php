<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthenticateController;

//Models
use App\StoreCords;

class storeCordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storeCords = StoreCords::all();

        $response = Response::json($storeCords, 200);

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

        // Check the role of the store
        if ($auth['role'] !== 'ROLE_ADMIN') {
            return Response::json([
                'error' => [
                    'message' => 'Admin rights required']]);
        }

        if((!$request->latitude) || (!$request->longitude)){

            //Create a response using the response class
            $response = Response::json([
                'error' => [
                    'message' => 'Please enter all required fields']], 422);
            return $response;
        }

        $storeCords = new StoreCords([
            'store_id' => $request->store_id,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude]);

        $storeCords->save();

        $response = Response::json([
            'message' => 'The store coordinates lat:'.$storeCords->latitude.' & lng:'.$storeCords->longitude.' has been set.'], 200);
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
        //Find storeCords on ID
        $storeCords = StoreCords::find($id);

        // If the storeCords doesn't exist return an error response
        if (!$storeCords) {
            $response = Response::json([
                'error' => [
                    'message' => 'The store coordinates could not be found']], 422);
            return $response;
        }
        // Save the store and return a success
        $response = Response::json($storeCords, 200);

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
        // Find the storeCords on ID
        $storeCords = StoreCords::find($id);

        // If the store doesn't exist throw an error response
        if (!$storeCords) {
            $response = Response::json([
                'error' => [
                    'message' => 'The store coordinates could not be found']], 422);
            return $response;
        }

        
        $storeCords->store_id = $request->store_id;
        $storeCords->latitude = $request->latitude;
        $storeCords->longitude = $request->longitude;

        $storeCords->save();

        $response = Response::json([
            'message' => 'The store coordinates lat:'.$storeCords->latitude.' & lng:'.$storeCords->longitude.' has been updated.'], 200);
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

        $storeCords = StoreCords::find($id);

        if (!$storeCords) {
            $response = Response::json([
                'error' => [
                    'message' => 'The store coordinates could not be found']], 422);
            return $response;
        }

        StoreCords::destroy($id);
        $response = Response::json([
            'message' => 'The store coordinates with id:'.$storeCords->id.' has been deleted.'], 200);
        return $response;
    }
}
