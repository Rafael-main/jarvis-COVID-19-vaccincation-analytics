<?php

namespace App\Http\Controllers;

use App\Http\Resources\VisitedAtResource;
use App\Http\Resources\VisitorResource;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VisitorResource::collection(Visitor::all());
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
        $create_visitor = Visitor::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'suffix_name' => $request->suffix_name,
            'gender' => $request->gender,
            'birth_month' => $request->birth_month,
            'birth_day' => $request->birth_day,
            'birth_year' => $request->birth_year,
            'primary_phone_number' => $request->primary_phone_number,
            'secondary_phone_number' => $request->secondary_phone_number,
            'is_transient' => $request->is_transient,
            'user_id' => $request->user_id,
            'address_id' => $request->address_id
        ]);

        $resource = new VisitorResource($create_visitor);

        return response()->json([
            'message' => 'record created',
            'data' => $resource
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor, $id)
    {
        $show_visitor = $visitor->where('id', $id);
        $show_visitor->get();

        return new VisitorResource($show_visitor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor, $id)
    {
        $update_visitor = $visitor->findOrFail($id);
        $update_visitor->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'suffix_name' => $request->suffix_name,
            'gender' => $request->gender,
            'birth_month' => $request->birth_month,
            'birth_day' => $request->birth_day,
            'birth_year' => $request->birth_year,
            'primary_phone_number' => $request->primary_phone_number,
            'secondary_phone_number' => $request->secondary_phone_number,
            'is_transient' => $request->is_transient,
            'user_id' => $request->user_id,
            'address_id' => $request->address_id
        ])
            ->save();

        return response()->json([
            'message' => 'record updated'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor, $id)
    {
        $visitor->destroy($id);
        return response()->json([
            'message' => 'record deleted'
        ], 204);
    }
}
