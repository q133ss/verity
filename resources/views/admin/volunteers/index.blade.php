@extends('layouts.admin')
@section('title', 'Волонтеры')
@section('content')
    <div class="card-body">
        <a href="{{route('admin.volunteers.create')}}" class="btn btn-info">Добавить</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ФИО</th>
                <th scope="col">Город</th>
                <th scope="col">Соц.сети</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($volunteers as $volunteer)
                <tr>
                    <th scope="row">{{$volunteer->id}}</th>
                    <td>{{$volunteer->getFio()}}</td>
                    <td>{{$volunteer->city}}</td>
                    <td>
                        @foreach($volunteer->getSocials() as $key => $social)
                            <a href="{{$social}}">{{$key}}</a> <br>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{route('admin.volunteers.edit', $volunteer->id)}}" class="btn btn-warning">Изменить</a>
                        <form action="{{route('admin.volunteers.destroy', $volunteer->id)}}" style="display:inline" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
