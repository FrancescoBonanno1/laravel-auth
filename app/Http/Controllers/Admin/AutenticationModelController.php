<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use App\Models\AutenticationModel;
use App\Http\Requests\StoreAutenticationModelRequest;
use App\Http\Requests\UpdateAutenticationModelRequest;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class AutenticationModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AutenticationModel::all();
        return view('admin.dashboard', compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAutenticationModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AutenticationModel $autenticationModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AutenticationModel $autenticationModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutenticationModelRequest $request, AutenticationModel $autenticationModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AutenticationModel $autenticationModel)
    {
        //
    }
}
