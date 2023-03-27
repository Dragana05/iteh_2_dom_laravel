<?php

namespace App\Http\Controllers;

use App\Models\Pevac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PevacKontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pevaci = DB::table('pevacs')->get();

        return response()->json($pevaci);
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
     * @param  \App\Models\Pevac  $pevac
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pevac = DB::table('pevacs')->where('id', $id)->first();

        
        return response()->json($pevac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pevac  $pevac
     * @return \Illuminate\Http\Response
     */
    public function edit(Pevac $pevac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pevac  $pevac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pevac $pevac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pevac  $pevac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pevac $pevac)
    {
        //
    }
}
