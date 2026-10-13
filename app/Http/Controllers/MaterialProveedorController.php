<?php

namespace App\Http\Controllers;

use App\Models\Material_Proveedor;
use Illuminate\Http\Request;

class MaterialProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materiales_proveedores = Material_Proveedor::all();
        dd($materiales_proveedores);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Material_Proveedor $material_Proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material_Proveedor $material_Proveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material_Proveedor $material_Proveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material_Proveedor $material_Proveedor)
    {
        //
    }
}
