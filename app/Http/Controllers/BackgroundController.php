<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;

class BackgroundController extends Controller
{
  public function index() {
    $images = Images::all();
    return view('background.index',compact('images'));
  }

  public function update(Request $request,Images $img) {

    $request->validate([
        'img1' => 'required',
        'img2' => 'required',
        'img3' => 'required',
        'img4' => 'required',
        'img5' => 'required',
    ]);

    $img1 = $img->find($request->img_id_1);
    $img1->img = $request->img1;
    $img1->save();

    $img2 = $img->find($request->img_id_2);
    $img2->img = $request->img2;
    $img2->save();

    $img3 = $img->find($request->img_id_3);
    $img3->img = $request->img3;
    $img3->save();

    $img4 = $img->find($request->img_id_4);
    $img4->img = $request->img4;
    $img4->save();

    $img5 = $img->find($request->img_id_5);
    $img5->img = $request->img5;
    $img5->save();

    return redirect('/background');
  }
}
