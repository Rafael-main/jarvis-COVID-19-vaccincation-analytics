<?php

namespace App\Http\Controllers;

use App\Models\VisitedAt;
use App\Http\Resources\VisitedAtResource;
use App\Http\Resources\VisitorResource;
use Illuminate\Http\Request;

class VisitedAtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new VisitedAtResource(VisitedAt::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visited_at = VisitedAt::create([
            'user_id' => $request->visitor_id,
            'establishment_id' => $request->establishment_id,
            'entered_at' => now()
        ]);

        $resource = new VisitedAtResource($visited_at);

        return response()->json([
            'message' => 'visited created',
            'data' => $resource
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisitedAt  $visitedAt
     * @return \Illuminate\Http\Response
     */
    public function show(VisitedAt $visitedAt, $id)
    {
        $show_visited_at = $visitedAt->where('user_id', $id);

        $show_visited_at->get();

        return VisitedAtResource::collection($show_visited_at);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisitedAt  $visitedAt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisitedAt $visitedAt, $id)
    {
        $update_visited_at = $visitedAt->findOrFail('user_id', $id)
            ->update([
                'user_id' => $request->user_id,
                'establishment_id' => $request->establishment_id,
                'entered_at' => now(),
            ]);

        $update_visited_at->save();

        return response()->json([
            'message' => 'record updated'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisitedAt  $visitedAt
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisitedAt $visitedAt, $id)
    {
        $visitedAt->destroy($id);

        return response()->json([
            'message' => 'record deleted'
        ], 200);
    }
}
