<?php

namespace App\Http\Controllers;

use App\Models\ListProjectStatus;
use App\Http\Requests\StoreListProjectStatusRequest;
use App\Http\Requests\UpdateListProjectStatusRequest;

class ListProjectStatusController extends Controller
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
     * @param  \App\Http\Requests\StoreListProjectStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListProjectStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListProjectStatus  $listProjectStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ListProjectStatus $listProjectStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListProjectStatus  $listProjectStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(ListProjectStatus $listProjectStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListProjectStatusRequest  $request
     * @param  \App\Models\ListProjectStatus  $listProjectStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListProjectStatusRequest $request, ListProjectStatus $listProjectStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListProjectStatus  $listProjectStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListProjectStatus $listProjectStatus)
    {
        //
    }
}
