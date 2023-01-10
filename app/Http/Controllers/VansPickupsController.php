<?php

namespace App\Http\Controllers;

use App\Models\VansPickups;
use App\Http\Requests\StoreVansPickupsRequest;
use App\Http\Requests\UpdateVansPickupsRequest;

class VansPickupsController extends Controller
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
     * @param  \App\Http\Requests\StoreVansPickupsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVansPickupsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VansPickups  $vansPickups
     * @return \Illuminate\Http\Response
     */
    public function show(VansPickups $vansPickups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VansPickups  $vansPickups
     * @return \Illuminate\Http\Response
     */
    public function edit(VansPickups $vansPickups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVansPickupsRequest  $request
     * @param  \App\Models\VansPickups  $vansPickups
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVansPickupsRequest $request, VansPickups $vansPickups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VansPickups  $vansPickups
     * @return \Illuminate\Http\Response
     */
    public function destroy(VansPickups $vansPickups)
    {
        //
    }
}
