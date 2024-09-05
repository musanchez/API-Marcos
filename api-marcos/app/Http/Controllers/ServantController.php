<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servant;

class ServantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servants = Servant::orderBy('name')->get();
        return response()->json(['status' => 'success', 'data' => $servants]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $servant = Servant::create($request->all());
            return response()->json(['status' => 'success', 'data' => $servant]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $servant = Servant::findOrFail($id);
            return response()->json(['status' => 'success', 'data' => $servant]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
