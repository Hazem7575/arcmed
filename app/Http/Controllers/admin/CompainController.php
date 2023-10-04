<?php

namespace App\Http\Controllers\admin;

use App\DataTables\CompainDataTable;
use App\Http\Controllers\Controller;
use App\Models\Compain;
use Illuminate\Http\Request;

class CompainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CompainDataTable $dataTable)
    {
        return $dataTable->render('admin.compain.index');
    }

    public function show(Compain $compain)
    {
        return view('admin.compain.show' , compact('compain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compain  $compain
     * @return \Illuminate\Http\Response
     */
    public function edit(Compain $compain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compain  $compain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compain $compain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compain  $compain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compain $compain)
    {
        //
    }
}
