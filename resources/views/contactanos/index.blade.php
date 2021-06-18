@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
  <h1>Dejanos un mensaje</h1>
  <form action="{{route('contactanos.store')}}" method="post">
    @csrf
    <label>
      Nombre:
      <br> <input type="text" name="name">
    </label>
    @error('name')
      <p>*{{$message}}</p>
    @enderror
    <br>
    <label>
      Correo:
      <br> <input type="text" name="mail">
    </label>
    @error('mail')
      <p>*{{$message}}</p>
    @enderror
    <br>
    <label>
      Mensaje:
      <br> <textarea name="message" cols="60" rows="5"></textarea>
    </label>
    @error('message')
      <p>*{{$message}}</p>
    @enderror
    <br>
    <button type="submit">Enviar mensaje</button>
  </form>

  @if (session('info'))
    <script>
      alert("{{session('info')}}")
    </script>
  @endif
@endsection