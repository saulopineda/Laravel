@extends('Layouts.app')
@section('title')
    Notas: {{ $note->title }}
@endsection
@section('content')
    <h1>  {{ $note->title }}</h1>
    <p>  {{ $note->body }}</p>
@endsection
