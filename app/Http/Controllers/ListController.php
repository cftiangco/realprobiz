<?php

namespace App\Http\Controllers;

use App\Lists;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $lists = Lists::where('property_id',$id)->orderBy('order')->get();
        return view('lists.index',['lists' => $lists,'id' => $id ]);
    }

    public function create($id)
    {
        return view('lists.create',compact('id'));
    }

    public function store(Request $request,$id)
    {
        $list = new Lists();
        $list->img = $request->image;
        $list->order = $request->order;
        $list->property_id = $id;
        $list->save();
        return redirect("properties/lists/$id");
    }

    public function show(Lists $lists)
    {
        //
    }

    public function edit(Lists $lists,$pid,$lid)
    {
        $list = $lists->find($lid);
        return view('lists.edit',['list' => $list,'pid' => $pid]);
    }

    public function update(Request $request, Lists $lists,$pid,$lid)
    {
        $list = $lists->find($lid);
        $list->img = $request->image;
        $list->order = $request->order;
        $list->update();
        return redirect("/properties/lists/$pid");
    }

    public function destroy(Lists $lists,$pid,$lid)
    {
        $list = Lists::find($lid);
        $list->delete();
        return redirect("/properties/lists/$pid");
    }
}
