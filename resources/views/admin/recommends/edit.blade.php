@extends('layouts.admin')
@section('title', 'Изменить рекомендателя')
@section('content')
    <div class="card-body">
        <form class="row g-3" action="{{route('admin.recommend.update', $recommender->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-12"><input type="text" class="form-control" name="name" placeholder="Имя" value="{{$recommender->name}}"></div>
            <div class="col-md-12"><input type="text" class="form-control" name="city" placeholder="Город" value="{{$recommender->city}}"></div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
