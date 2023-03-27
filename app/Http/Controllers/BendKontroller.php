<?php

namespace App\Http\Controllers;

use App\Http\Resources\BendResource;
use App\Models\Bend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BendKontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bendovi = DB::table('bends')->get();


        return BendResource::collection($bendovi);
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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'brojClanova' => 'required',
            'youtube' => 'required',
            'instagram' => 'required'
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $bend_id = DB::table('bends')->insertGetId([
            'naziv' => $request->naziv,
            'brojClanova' => $request->brojClanova,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram
        ]);

        $bend = DB::table('bends')->where('id', $bend_id)->first();
        return response()->json(new BendResource($bend));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bend  $bend
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bend = DB::table('bends')->where('id', $id)->first();


        return new BendResource($bend);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bend  $bend
     * @return \Illuminate\Http\Response
     */
    public function edit(Bend $bend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bend  $bend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bend $bend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bend  $bend
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('bends')->where('id', $id)->delete();

        
        return response()->json('Bend je obrisan!');
    }
}
