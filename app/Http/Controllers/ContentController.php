<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contents;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
      return view('contents.index',['contents' => Contents::first()]);
    }

    public function update(Request $request,Contents $contents) {

      $request->validate([
          'headline' => 'required',
          'sub_headline' => 'required',
          'description_list' => 'required',
          'contact_us' => 'required',
          'about_us' => 'required',
          'email_us' => 'required',
          'address' => 'required',
      ]);

      $content = $contents->find($request->id);
      $content->headline = $request->headline;
      $content->sub_headline = $request->sub_headline;
      $content->description_list = $request->description_list;
      $content->contact_us = $request->contact_us;
      $content->about_us = $request->about_us;
      $content->email_us = $request->email_us;
      $content->address = $request->address;
      $content->save();
      return redirect('/contents');
      //return $request;
    }
}
