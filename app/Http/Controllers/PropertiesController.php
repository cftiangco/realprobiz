<?php

namespace App\Http\Controllers;

use App\Properties;
use Illuminate\Http\Request;
use File;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $properties = new Properties();
      return view('index',['properties' => $properties->all()]);
    }

    public function showProperties() {
      $properties = new Properties();
      return view('properties',['properties' => $properties->all()]);
    }

    /**home/dashboard
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $properties = new Properties();
      return view('admin',['properties' => $properties->all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $property = new Properties();

      $request->validate([
        'fileupload' => 'required',
        'fileupload.*' => 'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg'
       ]);

       if($files = $request->file('fileupload')) {
           $destinationPath = 'uploads/'; // uplo['properties' => $properties->all()]ad path
           $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $fileName);

           $property->name = $request->name;
           $property->location = $request->location;
           $property->price = $request->price;
           $property->description = $request->description;
           $property->img = $fileName;
           $property->save();

           return $request;
        }
    }

    /**use Illuminate\Http\Request;
     * Display the specified resource.
     *
     * @param  \App\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function show(Properties $properties,$id)
    {
        return view('show',['properties' => $properties->findOrFail($id) ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function edit(Properties $properties,$id)
    {
      return view('edit',['property' => $properties->find($id) ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $request->validate([
        'fileupload.*' => 'mimes:doc,docx,pdf,txt,jpeg,png,jpg,gif,svg'
       ]);

       $property = Properties::find($id);

       if($files = $request->file('fileupload')) {
           $destinationPath = 'uploads/';
           $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $fileName);

           File::delete(public_path("uploads/$property->img"));

           $property->img = $fileName;
      } else {
           $property->img = $property->img;
      }
      $property->name = $request->name;
      $property->location = $request->location;
      $property->price = $request->price;
      $property->description = $request->description;
      $property->save();
      return redirect('/properties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Properties $properties,$id)
    {
      $prop = $properties->find($id);
      File::delete(public_path("uploads/$prop->img"));
      $prop->delete();

      return redirect('/properties');
    }
}
