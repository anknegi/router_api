<?php

namespace App\Http\Controllers\Api;

use App\Route;
use Illuminate\Http\Request;
use App\Http\Resources\RouteResource;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:api')->except(['index', 'show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RouteResource::collection(Route::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $route = Route::create([
        'user_id' => $request->user()->id,       
        'hostname' => $request->hostname,
        'loopback' => $request->loopback,
        'mac_address' => $request->mac_address,
        ]);

        return new RouteResource($route);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        return new RouteResource($route);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        $route->update($request->only(['hostname', 'loopback','mac_address','user_id']));

        return new RouteResource($route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        $route->delete();

        return response()->json(['Soft Deleted Successfully'], 204);
    }

}