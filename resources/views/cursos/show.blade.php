@extends('layouts.plantilla')

@section('title', 'Cursos ' . $curso->name)

@section('content')
{{-- <h1>Bienvenido al curso: <?php echo $curso;?></h1> --}}
<h1>Bienvenido al curso: {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">Volver</a>
<a href="{{route('cursos.edit', $curso)}}">Editar</a>
<br>
<p>Categoria: {{$curso->category}}</p>
<p>Descripción: {{$curso->description}}</p>
@endsection