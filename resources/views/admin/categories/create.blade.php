@extends('layouts.admin')
@section('content')
<div class="offset-2 col-8">
    <br>
    <h2>Добавить категорию</h2>
    @include('inc.message')
    <form method="post" action="{{ route('admin.categories.store', ['status=1']) }}">
        @csrf
        <div class="form-group">
            <label for="title" @error('title') style="color:red" @enderror>Заголовок</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="description" @error('description') style="color:red" @enderror>Описание</label>
            <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
        </div><br>
        <button class="btn btn-primary" type="submit">Сохранить</button>
    </form>
</div>
@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush