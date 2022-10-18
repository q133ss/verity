@extends('layouts.admin')
@section('title', 'Рекомендатели')
@section('content')
    <div class="card-body">
        <a href="{{route('admin.recommend.create')}}" class="btn btn-info">Добавить</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Город</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($recommends as $recommend)
                <tr>
                    <th scope="row">{{$recommend->id}}</th>
                    <td>{{$recommend->name}}</td>
                    <td>{{$recommend->city}}</td>
                    <td>
                        <a href="{{route('admin.recommend.edit', $recommend->id)}}" class="btn btn-warning">Изменить</a>
                        <form action="{{route('admin.recommend.destroy', $recommend->id)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
