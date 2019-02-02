@extends('layouts.adminapp')

@section('css')

@endsection



@section('content')
    <div class="card mb-20 shadow-sm shadow-hover-lg">
        <div class="card-body">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Нова Страна</h5>

                <div class="row">
                    <div class="col-sm">
                        <form class="mb-15" action="{{route('scountry.store')}}" method="post">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">Име на Страната</label>
                                        <input type="text" name="name" id="name" class="form-control" aria-describedby="name">

                                    </div>
                                </div>

                            </div>


                            <hr>
                           <button type="submit" class="btn btn-outline-primary">Създай Страна</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('scripts')


@endsection

