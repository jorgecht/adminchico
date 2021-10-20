@extends('layout.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf
        <a href="{{route('cursos.show', $curso)}}">Volver al curso</a><br><br>
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name"  value={{old('name', $curso->name)}}>
        </label><br>

        @error('name')
        <br>
         <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label><br>

        @error('descripcion')
        <br>
         <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value={{old('categoria', $curso->categoria)}}>
        </label><br><br>

        @error('categoria')
        <br>
         <small>*{{$message}}</small>
        <br>
        @enderror

        <button type="submit">Actualizar</button>

    </form>

@endsection
