@props(['color' => 'purple'])

<div
style="
    border: 1px solid;
    border-radius: 10px;
    background: {{$color}};
    color: white;
    padding: 10px;
"
{{$attributes}}
>
    <p>Alert</p>
    <span>ejemplo de alerta anonimo</span>
    <span>@if(isset($title)) {{$title}} @endif</span>
    <p>{{$slot}}</p>
  </div>