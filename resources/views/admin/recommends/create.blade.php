@extends('layouts.admin')
@section('title', 'Добавить рекомендателя')
@section('content')
    <div class="card-body">
        <form class="row g-3" action="{{route('admin.recommend.store')}}" method="POST">
            @csrf
            <div class="col-md-12"><input type="text" class="form-control" name="name" placeholder="Имя" value=""></div>
            <div class="col-md-12"><input type="text" class="form-control" name="city" placeholder="Город" value=""></div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
