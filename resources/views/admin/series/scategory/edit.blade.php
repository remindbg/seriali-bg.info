@extends('layouts.adminapp')

@section('css')

@endsection



@section('content')
    <div class="card mb-20 shadow-sm shadow-hover-lg">
        <div class="card-body">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Промяна на Категория</h5>

                <div class="row">
                    <div class="col-sm">
                        <form class="mb-15" action="{{route('scategory.update',$cat->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="name">Име на Категорията</label>
                                        <input type="text" value="{{$cat->name}}" name="name" id="name" class="form-control">

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="slug">Slug </label>
                                        <input type="text"
                                               value="{{$cat->slug}}"
                                               name="slug" id="slug"
                                               class="form-control"
                                               aria-describedby="slug">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mt-15" name="description" rows="3" placeholder="Описание">{{$cat->description}}</textarea>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-outline-primary">Промяна на Категория</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('scripts')


@endsection

