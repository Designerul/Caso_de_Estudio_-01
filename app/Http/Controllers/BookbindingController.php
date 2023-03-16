<?php

namespace App\Http\Controllers;

use App\Models\Bookbinding;
use App\Http\Requests\StoreBookbindingRequest;
use App\Http\Requests\UpdateBookbindingRequest;

class BookbindingController extends Controller
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
     * @param  \App\Http\Requests\StoreBookbindingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookbindingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookbinding  $bookbinding
     * @return \Illuminate\Http\Response
     */
    public function show(Bookbinding $bookbinding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookbinding  $bookbinding
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookbinding $bookbinding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookbindingRequest  $request
     * @param  \App\Models\Bookbinding  $bookbinding
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookbindingRequest $request, Bookbinding $bookbinding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookbinding  $bookbinding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookbinding $bookbinding)
    {
        //
    }
}
