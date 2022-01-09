<?php

namespace App\Http\Controllers;

use App\Models\ListProject;
use App\Http\Requests\StoreListProjectRequest;
use App\Http\Requests\UpdateListProjectRequest;

class ListProjectController extends Controller
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
     * @param  \App\Http\Requests\StoreListProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListProject  $listProject
     * @return \Illuminate\Http\Response
     */
    public function show(ListProject $listProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListProject  $listProject
     * @return \Illuminate\Http\Response
     */
    public function edit(ListProject $listProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListProjectRequest  $request
     * @param  \App\Models\ListProject  $listProject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListProjectRequest $request, ListProject $listProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListProject  $listProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListProject $listProject)
    {
        //
    }
}
