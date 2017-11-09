<?php

namespace App\Http\Controllers;

use App\Museum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; //NAMESPACE para las validaciones.

class MuseumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $museums= Museum::all();
        return view("museums.index")->with('museums',$museums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("museums.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*validación*/
        $rules = [
            'name' =>'required',
            'description' =>'required',
            'image' =>'required',
            'thumbnail' =>'required',
            'address' =>'required',
            'phone' =>'required',
            'hours' =>'required',
            'rating' =>'required',

        ];
        $messages = [
            'name.required'         => 'el Nombre es requerido.',
            'description.required'  =>'La Descripción es requerida.',
            'image.required'        =>'La Imagen es requerida',

        ];
        //validación de los errores.
        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()){
            flash("No se pudo guardar el museums!")->error();
            return redirect()->action('MuseumsController@create')
                ->withErrors($validator)
                ->withInput();
        }
        $museum = new Museum();
        $museum -> name         = $request->input('name');
        $museum -> description  = $request->input('description');
        $museum -> image        = $request->input('image');
        $museum -> thumbnail    = $request->input('thumbnail');
        $museum -> address      = $request->input('address');
        $museum ->  phone       = $request->input('phone');
        $museum ->  hours       = $request->input('hours');
        $museum ->  rating      = $request->input('rating');

        $museum->save();
        flash('El museo ha sido guardado')->success();
        return redirect()->action('MuseumsController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
