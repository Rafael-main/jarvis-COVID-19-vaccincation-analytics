<?php

namespace App\Http\Controllers;

use App\Http\Resources\EstablishmentResource;
use App\Models\Establishment;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EstablishmentResource::collection(Establishment::all());
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
        $create_establishment = Establishment::create([
            'establishment_name' => $request->establishment_name,
            'business_permit_number' => $request->business_permit_number,
            'establishment_type' => $request->establishment_type,
            'address_id' => $request->address_id
        ]);

        $resource = new EstablishmentResource($create_establishment);

        return response()->json([
            'message' => 'record created',
            'data' => $resource
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function show(Establishment $establishment, $id)
    {
        $show_establishment = $establishment->where('id', $id)->get();

        return new EstablishmentResource($show_establishment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function edit(Establishment $establishment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Establishment $establishment, $id)
    {
        $update_establishment = $establishment->where('id', $id)
            ->update([
                'establishment_name' => $request->establishment_name,
                'business_permit_number' => $request->business_permit_number,
                'establishment_type' => $request->establishment_type,
                'address_id' => $request->address_id
            ])
            ->save();

        $resource = new EstablishmentResource($update_establishment);

        return response()->json([
            'message' => 'record updated',
            'data' => $resource
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establishment $establishment, $id)
    {
        $establishment->destroy($id);
        return response()->json([
            'message' => 'record deleted'
        ], 204);
    }
}
