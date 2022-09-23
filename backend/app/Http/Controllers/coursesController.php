<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courses;

class coursesController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return courses::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Capturo el payload
        //crear el nuevo courses
        return courses::create(
            $request->all()
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     return courses::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //1. encontrar el courses por id
       $c = courses::find($id);
       //2. actualizarlo
       $c->update($request->all());
       //3. enviar response con el bootcam actuallizado
        return $c;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //1. encontrar el courses por id
        $c = courses::find($id);
        //2. eliminarlo
        $c->delete();
        //3. response con el objeto eliminado
        return $c;
        
    }
}
