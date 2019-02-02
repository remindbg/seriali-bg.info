<?php

namespace App\Http\Controllers\admin;

use App\Scategory;
use App\Scountry;
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
        $cats = Scategory::all();
        $countries = Scountry::all();
        return view('admin.series.create',compact('tvs','cats','countries'));
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
        $series->year = $request['year'];
        // start some  stuff for  the relations

        $series->stelevision_id = $request->input('tv');
        $series->scountry_id =  $request->input('country');
        $series->scategory_id =  $request->input('cat');
            $makedir = Storage::disk('uploads')->makeDirectory('/seriali/'.$slug .'-'.$uniqueid);
            if($makedir) {
                $extension = $request->file('image')->extension();
                $path = $request->file('image')->storeAs(
                    'seriali/'. $slug . '-' . $uniqueid, $slug . '.'. $extension
                );
            }
        $series->image = $path;
        $series->save();


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
        $countries = Scountry::all();
            $tvs = Stelevision::all();
                $cats = Scategory::all();

        return view('admin.series.edit',compact('serial','countries','tvs','cats'));

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
        $serial->name = $request['name'];
        $serial->description = $request['description'];
        $serial->slug = $request['slug'];
        $serial->year = $request['year'];

        /*
         * relations
         */
        $serial->stelevision_id = $request->input('tv');
        $serial->scountry_id =  $request->input('country');
        $serial->scategory_id =  $request->input('cat');
        $serial->save();
        return redirect()->route('series.index')->with('message','Успешна Редакция');

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

  /*
   * bad but i`ll deal with that later
   * todo: proper edit image / maybe ajax
   */

  public function deleteimage($id) {
      $serial = Series::find($id);
      $image_path = $serial->image;

      Storage::delete($image_path);
      $serial->image = null;

      $serial->save();
      return redirect()->back()->with('message','снимката е изтрита');
  }

}
