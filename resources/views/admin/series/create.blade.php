@extends('layouts.adminapp')

@section('css')

@endsection
@section('css_after')

@endsection


@section('content')
    <div class="card mb-20 shadow-sm shadow-hover-lg">
        <div class="card-body">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Нов Сериал</h5>

                <div class="row">
                    <div class="col-sm">
                        <form class="mb-15" action="{{route('series.store')}}" method="post">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">Заглавие / Име на Сериал</label>
                                        <input type="text" name="name" id="name" class="form-control" aria-describedby="name">

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="slug">Slug - остави празно засега</label>
                                        <input type="text" disabled="disabled" name="name" id="slug" class="form-control" aria-describedby="slug">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mt-15" name="description" rows="3" placeholder="Описание"></textarea>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tvpublisher">Телевизия</label>

                                        <select name="tv" id="tv" class="form-control custom-select  mt-15">
                                            <h5 class="hk-sec-title">Телевизия</h5>
                                            @foreach ($tvs as $tv)
                                                <option value="{{$tv->id}}">{{$tv->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tvpublisher">Страна</label>

                                    <select name="tv1" id="serieslang" class="form-control custom-select  mt-15">
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


@endsection

