@extends('Layouts.app')
@section('title')
    Listado de Notas
@endsection
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($notes as $note)
      <tr>
        <td>
            <a href="/notes/{{ $note->id}}">
            {{ $note->title }}
            @if($note->isImportant())
                  *
            @endif
            </a>
          </td>
        <td>
            <a href="/notes/{{ $note->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
