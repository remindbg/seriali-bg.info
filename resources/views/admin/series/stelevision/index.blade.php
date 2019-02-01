@extends('layouts.adminapp')

@section('content')
    <a href="{{route('stelevision.create')}}"><button type=""  class="btn btn-primary btn-sm">Нов ТВ Канал</button></a>
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
                @foreach($stelevision as $tv)
                    <tr>
                        <td>{{$tv->id}}</td>
                        <td>{{$tv->name}}</td>
                        <td>{{$tv->series->count()}}</td>
                        <td>
                            <form action="{{route('stelevision.destroy',$tv->id)}}" method="post">
                                @csrf
                                @method('delete')
                            <a href="{{route('stelevision.edit',$tv->id)}}" class="btn btn-info btn-s">Edit</a>
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
