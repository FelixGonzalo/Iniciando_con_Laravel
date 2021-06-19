<div
style="
    border: 1px solid;
    border-radius: 10px;
    background: {{$color}};
    padding: 10px;
"
>
    <p>Alert</p>
    <span>ejemplo de alerta: {{$slot}}</span>
    {{-- @if(isset($title)) {{$title}} @endif --}}
    {{-- esto puede reemplazar las clases --}}
    <p {{$attributes}}>{{$attributes}}</p>
    {{-- esto funciona para rescatar las classes del componente --}}
    <p {{$attributes->merge(['class' => "clases propios del componente"])}}>texto</p>
    {{-- <p>{{$title}}</p> --}}
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <h3>{{$prueba()}}</h3>
</div>