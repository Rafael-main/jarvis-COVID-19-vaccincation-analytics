<?php

namespace App\Http\Controllers;

use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AddressResource::collection(Address::all());
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
        $create_user = Address::create([
            'country' => $request->country,
            'province' => $request->province,
            'city_or_municipality' => $request->city_or_municipality,
            'barangay' => $request->barangay,
            'zipcode' => $request->zipcode,
            'complete_address' => $request->complete_address,
            'complete_provincial_address' => $request->complete_provincial_address,
            'longitude' => $request->longitude,
            'lattitude' => $request->lattitude,
        ]);

        return response()->json([
            'message' => 'record created'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address, $id)
    {
        $show_address = $address->where('id', $id)->get();

        return new AddressResource($show_address);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address, $id)
    {
        $update_address = $address->findOrFail($id)
            ->update([
                'country' => $request->country,
                'province' => $request->province,
                'city_or_municipality' => $request->city_or_municipality,
                'barangay' => $request->barangay,
                'zipcode' => $request->zipcode,
                'complete_address' => $request->complete_address,
                'complete_provincial_address' => $request->complete_provincial_address,
                'longitude' => $request->longitude,
                'lattitude' => $request->lattitude,
            ])
            ->save();


        $resource = new AddressResource($update_address);
        return response()->json([
            'message' => 'record updated',
            'data' => $resource
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address, $id)
    {
        $address->destroy($id);
        return response()->json([
            'message' => 'record deleted'
        ], 204);
    }
}
