@extends('layouts.plantilla')

@section('title', 'Curso crear')

@section('content')
  <h1>NUEVO CURSO</h1>
  <form action="{{route('cursos.store')}}" method="post">
    @csrf
    {{-- csrf genera un input oculto para generar token --}}
    <label>
      Nombre:
      <br> <input type="text" name="name" value="{{old('name')}}">
    </label>
    @error('name')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <br>
    <label>
      Categoria:
      <br> <input type="text" name="category" value="{{old('category')}}">
    </label>
    @error('category')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <br>
    <label>
      Descripción:
      <br> <textarea name="description" cols="60" rows="5">{{old('description')}}</textarea>
    </label>
    @error('description')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <br>
    <button type="submit">Crea ahora</button>
  </form>
@endsection
