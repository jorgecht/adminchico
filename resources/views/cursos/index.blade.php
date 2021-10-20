@extends('layout.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenidos a la pagina principal del curso</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection
