@extends('layouts.adminapp')

@section('content')
    <div class="card mb-20 shadow-sm shadow-hover-lg">

        <div class="card-body">
            <table class="table table-lg mb-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Име</th>
                    <th>Дата</th>
                    <th>Категория</th>
                    <th>Език</th>
                    <th>Епизоди</th>
                    <th>Избор</th>
                </tr>
                </thead>
                <tbody>
                @foreach($series as $serial)
                    <tr>
                        <td>{{$serial->id}}</td>
                        <td>{{$serial->name}}</td>
                        <td>{{$serial->created_at}}</td>
                        <td>kategoriqqq</td>
                        <td>ezik</td>
                        <td>Epizodi</td>
                        <td>
                            <form action="{{route('series.destroy',$serial->id)}}" method="post">
                                @csrf
                                @method('delete')
                            <a href="{{route('series.edit',$serial->id)}}" class="btn btn-danger btn-sm"> Edit </a>
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
