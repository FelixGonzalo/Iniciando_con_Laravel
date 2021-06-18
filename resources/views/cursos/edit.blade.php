@extends('layouts.plantilla')

@section('title', 'Curso editar')

@section('content')
  <h1>EDITAR CURSO: {{$curso->name}}</h1>
  <form action="{{route('cursos.update', $curso)}}" method="post">
    @csrf
    @method('put')
    {{-- csrf genera un input oculto para generar token --}}
    <label>
      Nombre:
      <br> <input type="text" name="name" value="{{old('name', $curso->name)}}">
    </label>
    @error('name')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <br>
    <label>
      Categoria:
      <br> <input type="text" name="category" value="{{old('category',$curso->category)}}">
    </label>
    @error('category')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <br>
    <label>
      Descripción:
      <br> <textarea name="description" cols="60" rows="5">{{old('description',$curso->description)}}</textarea>
    </label>
    <br>
    @error('description')
      <br>
      <small>*{{$message}}</small>
      <br>
    @enderror
    <button type="submit">Actualizar ahora</button>
  </form>
@endsection