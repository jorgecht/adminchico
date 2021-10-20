@extends('layout.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso <?php echo $curso->name; ?></h1>
    <a href="{{ route('cursos.index') }}">Volver al curso</a><br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar Curso</a><br>
    <p><strong>Categoria:</strong>> {{ $curso->categoria }}</p><br>
    <p>{{ $curso->descripcion }}</p>
    <br>
    <br>
    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
