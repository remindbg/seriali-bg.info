<?php

namespace App\Http\Controllers\Admin;

use App\Scountry;
use App\Scategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Scategory::all();
        return view('admin.series.scategory.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.series.scategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Scategory();
        $cat->name = $request['name'];
        $cat->slug = str_slug($request['name'],'-');
        $cat->description = $request['description'];
        $cat->save();

        return redirect()->route('scategory.index')->with('message','Успешно добавена Категория');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\scountry  $scountry
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\scountry  $scountry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Scategory::find($id);
        return view('admin.series.scategory.edit',compact('cat'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\scountry  $scountry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $cat = Scategory::find($id);
        $cat->name = $request['name'];
        $cat->slug = $request['slug'];
        $cat->description = $request['description'];
        $cat->save();
        return redirect()->route('scategory.index')->with('message','Успешна Редакция на Категория');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\scountry  $scountry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Scategory::destroy($id);
        return redirect()->route('scategroy.index')->with('message','Успешно Изтрита Категория');

    }
}
