@extends('layouts.adminapp')

@section('content')
    <div class="card mb-20 shadow-sm shadow-hover-lg">
        <div class="card-body">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Нов Сериал</h5>

                <div class="row">
                    <div class="col-sm">

                        <form class="mb-15" action="{{route('series.update',$serial->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">Заглавие / Име на Сериал</label>
                                        <input type="text" value="{{$serial->name}}" name="name" id="name" class="form-control" aria-describedby="name">

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input aria-describedby="slug" class="form-control" id="slug" name="slug"
                                               type="text" value="{{$serial->slug}}">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="name">Второ име - може и да е празно</label>
                                    <input type="text" value="{{$serial->secondname}}" name="secondname" id="secondname" class="form-control" aria-describedby="name">

                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mt-15" name="description" placeholder="Описание" rows="3">{{$serial->description}}</textarea>
                            </div>

                            <hr>




                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="slug">Year</label>
                                        <input  class="form-control" id="year" name="year"
                                                type="text" value="{{$serial->year}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tv">Телевизия</label>

                                        <select name="tv" id="tv" class="form-control custom-select  mt-15">
                                            @foreach($tvs as $tv)
                                                <option value="{{$tv->id}}">{{$tv->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="country">Страна</label>

                                        <select name="country" id="country" class="form-control custom-select  mt-15">
                                            <h5 class="hk-sec-title">Страна</h5>
                                            @foreach($countries as $country)
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cat">Категория</label>

                                        <select name="cat" id="cat" class="form-control custom-select  mt-15">
                                            @foreach($cats as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="isactive" id="isactive">
                                <label class="custom-control-label" for="isactive">Активна?</label>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-outline-primary">Редакция на Сериал</button>
                        </form>
                        <hr>
                        @if(!$serial->image)
                            <div class="form-group">
                                <div class="hk-sec-wrapper">
                                    <h5 class="hk-sec-title">Изображение</h5>
                                    <p class="mb-40">Override your input files with style. Find more options <a href="http://jeremyfagis.github.io/dropify/" target="_blank">here</a>.</p>
                                    <div  class="row">
                                        <div class="col-sm">
                                            <input type="file" name="image"
                                                   id="input-file-now" class="dropify"  enctype="multipart/form-data" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            Изображението може да се види от : <a href="{{asset('/uploads/'.$serial->image)}}" target="_blank">ТУК</a>.
                            <form action="{{route('deleteimage',$serial->id)}}" method="post">
                                @csrf
                                <input type="submit" value="Изтриване на снимка"
                                       onclick="return confirm('Снимката ще бъде изтрита')"
                                       class="btn btn-sm btn-danger"/>
                            </form>
                        @endif



                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Dropify JavaScript -->
    <script src="{{asset('vendors/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $('.dropify').dropify();
    </script>

@endsection

@section('css')
    <link href="{{asset('vendors/dropify/dist/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>

@endsection
