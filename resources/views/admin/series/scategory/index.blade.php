@extends('layouts.adminapp')

@section('content')
    <a href="{{route('scategory.create')}}"><button type=""  class="btn btn-primary btn-sm">Нова Категория</button></a>
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
                @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->series->count()}}</td>
                        <td>
                            <form action="{{route('scategory.destroy',$cat->id)}}" method="post">
                                @csrf
                                @method('delete')
                            <a href="{{route('scategory.edit',$cat->id)}}" class="btn btn-info btn-s">Edit</a>
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
