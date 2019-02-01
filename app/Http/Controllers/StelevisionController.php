<?php

namespace App\Http\Controllers;

use App\Stelevision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Series;
class StelevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stelevision = Stelevision::with('series')->get();

        return view('admin.series.stelevision.index',compact('stelevision'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.series.stelevision.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stelevision = new Stelevision();
        $stelevision->name = $request['name'];
        $stelevision->slug = str_slug($request['name']);
        $stelevision->description = $request['description'];
        $stelevision->save();
        return redirect()->route('stelevision.index')->with('message','Успешно Създаден ТВ Канал');
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
        $tv = Stelevision::find($id);
        return view('admin.series.stelevision.edit',compact('tv'));
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
        $stelevision = Stelevision::find($id);
        $stelevision->name = $request['name'];
        $stelevision->slug = $request['slug'];
        $stelevision->description = $request['description'];
        $stelevision->save();
        return redirect()->route('stelevision.index')->with('message','Успешно Редактиран ТВ Канал');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tv = Stelevision::destroy($id);
        return redirect()->route('stelevision.index')->with('message','Успешно Изтрит ТВ Канал');

    }
}
