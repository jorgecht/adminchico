@extends('layout.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf
        <a href="{{route('cursos.index')}}">Volver al curso</a><br><br>
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label><br>

        @error('name')
        <br>
         <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label><br>

        @error('descripcion')
        <br>
         <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label><br><br>

        @error('categoria')
        <br>
         <small>*{{$message}}</small>
        <br>
        @enderror

        <button type="submit">Enviar Formulario</button>

    </form>

@endsection
