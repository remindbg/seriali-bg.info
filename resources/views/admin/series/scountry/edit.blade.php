@extends('layouts.adminapp')

@section('css')

@endsection



@section('content')
    <div class="card mb-20 shadow-sm shadow-hover-lg">
        <div class="card-body">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Промяна на Страна</h5>

                <div class="row">
                    <div class="col-sm">
                        <form class="mb-15" action="{{route('scountry.update',$country->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">Име на Страната</label>
                                        <input type="text" value="{{$country->name}}" name="name" id="name" class="form-control" aria-describedby="name">

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="slug">Slug ( да се edit ако се смени името!</label>
                                        <input type="text" value="{{$country->slug}}"  name="slug" id="slug" class="form-control" aria-describedby="slug">

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-outline-primary">Промяна</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('scripts')


@endsection

