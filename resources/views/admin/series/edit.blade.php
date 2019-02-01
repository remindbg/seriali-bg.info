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
                            @method('post')
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">Заглавие / Име на Сериал</label>
                                        <input type="text" value="{{$serial->name}}" name="name" id="name" class="form-control" aria-describedby="name">

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="slug">Slug - остави празно засега</label>
                                        <input type="text" value="{{$serial->slug}}" name="name" id="slug" class="form-control" aria-describedby="slug">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mt-15"  name="description" rows="3" placeholder="Описание">{{$serial->description}}</textarea>
                            </div>

                            <hr>

                            <div class="form-group">
                                <div class="hk-sec-wrapper">
                                    <h5 class="hk-sec-title">Изображение</h5>
                                    <p class="mb-40">Override your input files with style. Find more options <a href="http://jeremyfagis.github.io/dropify/" target="_blank">here</a>.</p>
                                    <div  class="row">
                                        <div class="col-sm">
                                            <input type="file" name="avatar" id="input-file-now" class="dropify" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tvpublisher">Телевизия</label>

                                        <select name="tvpublisher" id="tvpublisher" class="form-control custom-select  mt-15">
                                            <h5 class="hk-sec-title">Телевизия</h5>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tvpublisher">Страна</label>

                                        <select name="tvpublisher" id="serieslang" class="form-control custom-select  mt-15">
                                            <h5 class="hk-sec-title">Страна</h5>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tvpublisher">Категория</label>

                                        <select name="tvpublisher" id="tvpublisher" class="form-control custom-select  mt-15">
                                            <h5 class="hk-sec-title">Категория</h5>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="isactive" id="isactive">
                                <label class="custom-control-label" for="isactive">Активна?</label>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-outline-primary">Създай Нов Сериал</button>
                        </form>


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
