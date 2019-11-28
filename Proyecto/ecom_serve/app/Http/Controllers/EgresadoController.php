<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Egresado;
class EgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $egresados = Egresado::all(); 
        return response()->json($egresados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        Egresado::create($request->all());
        return response()->json(['success' => true]);
    }

    public function show($id)
    {
        $egresado= Egresado::findOrFail($id);
        
        return response()->json($egresado);
    }

    public function update(Request $request, $id)
    {
        Egresado::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Egresado::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
