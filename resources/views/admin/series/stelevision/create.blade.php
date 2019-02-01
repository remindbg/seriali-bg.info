@extends('layouts.adminapp')

@section('css')

@endsection



@section('content')
    <div class="card mb-20 shadow-sm shadow-hover-lg">
        <div class="card-body">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Нова Телевизия</h5>

                <div class="row">
                    <div class="col-sm">
                        <form class="mb-15" action="{{route('stelevision.store')}}" method="post">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">Име на Телевизията</label>
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

                            <hr>
                           <button type="submit" class="btn btn-outline-primary">Създай</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('scripts')


@endsection

