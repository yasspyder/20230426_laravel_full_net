@extends('layouts.main') @section('title')
{{ $news->category->title }} @parent @endsection @section('content')

<div class="col">
    <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title></title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Категория: {{ $news->category->title }}</text>
        </svg>

        <div class="card-body">
            <h1>{{ $news->title }}</h1>
            <br>
            <img src="{{ Storage::disk('public')->url($news->image) }}" width="320" height="240" style="border-radius:6px" alt="image">
            <p class="card-text">{!! $news->description !!}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ route('news.index', ['id' => $news->category_id]) }}" class="btn btn-sm btn-outline-secondary">Назад к новостям</a>
                </div>
                <div class="btn-group">
                    <a target="_blank" href="{{ $news->link }}" class="btn btn-sm btn-outline-secondary">Перейти к источнику</a>
                </div>
                <small class="text-muted">{{ $news->author->name }} - {{ $news->created_at }}</small>
            </div>
        </div>
    </div>
</div>
@endsection