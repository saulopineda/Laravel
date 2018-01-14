@extends('Layouts.app')
@section('title')
    Editar nota {{ $note->title}}
@endsection
@section('content')
<form action="/notes/{{$note->id}}" method="POST" role="form">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <legend>Editar nota</legend>
    @include('Layouts._validation-errors')
    @include('Notes._form')

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
