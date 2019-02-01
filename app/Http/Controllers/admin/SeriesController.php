<?php

namespace App\Http\Controllers\admin;

use App\Series;
use App\Stelevision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Series::all();
        return view('admin.series.index',compact('series'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tvs = Stelevision::all();
        return view('admin.series.create',compact('tvs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $series = new Series();
        $series->name = $request['name'];
        $slug = str_slug($request['name'],'-');
        $series->slug = $slug;
        $series->description = $request['description'];
        $uniqueid =  rand(111111,999999);
        $series->uniqueid = $uniqueid;
        // start some migration stuff
        $series->stelevision_id = $request->input('tv');

        $saved = $series->save();
        if($saved) {
            Storage::disk('uploads')->makeDirectory('/seriali/'.$slug .'-'.$uniqueid);
        }
        return redirect()->route('series.index')->with('message','Успешно Добавен Сериал');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serial = Series::find($id);
        return view('admin.series.edit',compact('serial'));

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
        $serial = Series::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Series::find($id);
        $uid = $model->uniqueid;
        $slug = $model->slug;
        $series = Series::destroy($id);
        // if is deleted = delete the whole directory with the uploads
        if($series) {
            Storage::disk('uploads')->deleteDirectory('/seriali/'.$slug .'-'.$uid);

        }
        return redirect()->route('series.index')->with('message','Успешно Изтрит Сериал');


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

}
