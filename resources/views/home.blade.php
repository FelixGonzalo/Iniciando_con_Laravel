@extends('layouts.plantilla')

@section('title', 'HoMe')

@section('content')

  @php
      $color = 'red';
      $alert = 'alertanonimo';
  @endphp

  <h1>INTRO A LARAVEL - CURSOS</h1>


  <div class="container">
    <h2>COMPONENTES DE CLASE</h2>
    <x-alert />
    <x-alert :color="$color" />

    {{-- lo que esta dentro esta en una variable slot --}}
    <x-alert color="blue">
      Este es un mensaje de blue.
      prueba de mensaje
    </x-alert>

    {{-- slot con nombre para varias variables --}}
    <x-alert color="gray">
      {{-- <x-slot name="title">
        Titulo de slot
      </x-slot> --}}
      texto del titulo slot
    </x-alert>


    {{-- los valores de class se almacen en  --}}
    <x-alert color="gray" class="alertEspecial">
      texto de la alerta
    </x-alert>

    <h2>COMPONENTES ANONIMOS</h2>
    <x-alertanonimo />
    <x-alertanonimo color="black"/>
    <x-alertanonimo color="black">
      <x-slot name="title">
        slot con nombre title
      </x-slot>
      slot de contenido
    </x-alertanonimo>

    <x-alertanonimo class="claseAparte" color="green"/>
    <h2>COMPONENTES DINAMICOS</h2>
    <x-dynamic-component :component="$alert">
    </x-dynamic-component>

  </div>
@endsection