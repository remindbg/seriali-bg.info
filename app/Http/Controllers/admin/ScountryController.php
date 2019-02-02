<?php

namespace App\Http\Controllers\Admin;

use App\Scategory;
use App\scountry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Scountry::all();
        return view('admin.series.scountry.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.series.scountry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $country = new Scountry();
        $country->name = $request['name'];
        $country->slug = str_slug($request['name'],'-');

        $country->save();

        return redirect()->route('scountry.index')->with('message','Успешно добавена страна');

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
        $country = Scountry::find($id);
        return view('admin.series.scountry.edit',compact('country'));


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
        $country = Scountry::find($id);
        $country->name = $request['name'];
        $country->slug = $request['slug'];
        $country->save();
        return redirect()->route('scountry.index')->with('message','Успешна Редакция на Страна');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\scountry  $scountry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Scountry::destroy($id);

        return redirect()->route('scountry.index')->with('message','Успешно Изтрита Страна');

    }
}
