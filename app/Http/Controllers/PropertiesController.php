<?php

namespace App\Http\Controllers;

use App\Properties;
use App\Lists;
use App\Contents;
use Illuminate\Http\Request;
use File;

class PropertiesController extends Controller
{
    public function index()
    {
      $properties = new Properties();
      $navs = [
        'home' => '#home-section',
        'properties' => '#properties-section',
        'about' => '#about-section',
        'contacts' => '#contact-section'
      ];
      return view('index',[
        'properties' => $properties->all(),
        'navs' => $navs,
        'content' => Contents::first()
      ]);
    }

    public function showProperties() {
      $properties = new Properties();
      return view('properties',['properties' => $properties->all()]);
    }

    public function create(Request $request)
    {
      $properties = new Properties();
      return view('new',['properties' => $properties->all()]);
    }

    public function store(Request $request)
    {
        $property = new Properties();
        $property->name = $request->name;
        $property->location = $request->location;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->img = $request->image;
        $property->save();
        return redirect('/properties');
    }

    public function show(Properties $properties,$id)
    {
          $navs = [
            'home' => '/',
            'properties' => '/',
            'about' => '/',
            'contacts' => '/'
          ];

          return view('show',
          [
            'property' => $properties->findOrFail($id),
            'lists' => Lists::where('property_id',$id)->get(),
            'navs' => $navs
          ]);
    }

    public function edit(Properties $properties,$id)
    {
      return view('edit',['property' => $properties->find($id) ]);
    }

    public function update(Request $request,$id)
    {
      $property = Properties::find($id);
      $property->name = $request->name;
      $property->location = $request->location;
      $property->price = $request->price;
      $property->description = $request->description;
      $property->img = $request->image ?? 'none';
      $property->save();
      return redirect('/properties');
    }

    public function destroy(Properties $properties,$id)
    {
      $prop = $properties->find($id);
      $prop->delete();
      return redirect('/properties');
    }
}
