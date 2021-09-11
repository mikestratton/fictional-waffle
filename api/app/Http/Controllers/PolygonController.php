<?php

namespace App\Http\Controllers;

use App\Models\Polygon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PolygonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Polygon  $polygon
     * @return \Illuminate\Http\Response
     */
    public function show(Polygon $polygon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polygon  $polygon
     * @return \Illuminate\Http\Response
     */
    public function edit(Polygon $polygon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Polygon  $polygon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Polygon $polygon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polygon  $polygon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polygon $polygon)
    {
        //
    }

    public function cryptos(){
        $key = env('POLYGON_KEY');
        $url = "https://api.polygon.io";

        $params = "/v1/open-close/crypto/BTC/USD/2020-10-14?adjusted=true&apiKey=";
        return Http::get($url . $params . $key);
    }
}
