<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $inventories = Inventory::all();
        return Inertia::render('Inventory/InventoryOver', [
            'inventories' => $inventories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
        // Create new inventory item
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventory = Inventory::create($request->post());
        return response()->json($inventory, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        // Show a specific inventory item
        return response()->json($inventory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Inventory $inventory)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory)
    {
        $inventory->fill($request->post())->save();
        return response()->json($inventory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return response()->json(null, 204);
    }
}
