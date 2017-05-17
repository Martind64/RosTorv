<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;

// Models
use App\Store;
use App\Http\Controllers\LoginController;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = Store::all();

        $login = new LoginController();

        $response = Response::json($store, 200);

        return $response;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if((!$request->name) || (!$request->password)) {
            
            // Create a response using the response class
            $response = Response::json([
                'error' => [
                    'message' => 'Please enter all required fields']], 422);
            return $response;
        }

        $store = new Store([
            'name' => $request->name,
            'password' => $request->password,
            'role' => 'Role_user']);

        $store->save();

        $response = Response::json([
            'message' => 'The store '.$store->name.' has been created'], 200);
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
        // Find a store on ID
        $store = Store::find($id);

        // If the store doesn't exist return an error response
        if (!$store) {
            $response = Response::json([
                'error' => [
                    'message' => 'The store could not be found']], 422);
            return $response;
        }

        // Save the store and return a success
        $response = Response::json($store, 200);

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
        // Find the store on ID
        $store = Store::find($id);

        // If the store doesn't exist throw an error response
        if (!$store) {
            $response = Response::json([
                'error' => [
                    'message' => 'The store could not be found']], 422);
            return $response;
        }

        
        
        $store->name = $request->name;
        $store->password = $request->password;


        $store->save();

        $response = Response::json([
            'message' => 'The store '.$store->name.' has been updated'
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
        $store = Store::find($id);  

        if (!$store) {
            $response = Response::json([
                'error' => [
                    'message' => 'The store could not be found']], 422);
            return $response;
        }

        Store::destroy($id);
        $response = Response::json([
            'message' => 'The store '.$store->name.' has been deleted'], 200);
        return $response;

    }


}
