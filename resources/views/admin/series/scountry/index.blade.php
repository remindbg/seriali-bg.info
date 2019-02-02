@extends('layouts.adminapp')

@section('content')
    <a href="{{route('scountry.create')}}"><button type=""  class="btn btn-primary btn-sm">Нова Страна</button></a>
    <hr>
    <div class="card mb-20 shadow-sm shadow-hover-lg">
        <div class="card-body">
            <table class="table table-lg mb-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Име</th>
                    <th>Брой Сериали</th>
                    <th>Избор</th>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{$country->id}}</td>
                        <td>{{$country->name}}</td>
                        <td>{{$country->series->count()}}</td>
                        <td>
                            <form action="{{route('scountry.destroy',$country->id)}}" method="post">
                                @csrf
                                @method('delete')
                            <a href="{{route('scountry.edit',$country->id)}}" class="btn btn-info btn-s">Edit</a>
                            <button type="submit" onclick="return confirm('Сигурен ли си?')" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
