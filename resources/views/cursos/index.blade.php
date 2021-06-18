@extends('layouts.plantilla')

@section('title', 'Cursos_index')

@section('content')
  <h1>CURSOS</h1>
  <a href="{{route('cursos.create')}}">crear curso</a>
  {{-- <a href="cursos/create">crear curso</a> --}}
  <ul>
    @foreach ($cursos as $curso)
      <li><a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a></li>
    @endforeach
  </ul>
  {{$cursos->links()}}

@endsection