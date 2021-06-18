<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    h1 {
      color: rgb(116, 116, 241);
    }
  </style>
</head>
<body>
  <h1>Correo electrónico</h1>
  <p>mensaje con laravel</p>
  <p>nombre: {{$contacto['name']}}</p>
  <p>correo: {{$contacto['mail']}}</p>
  <p>mensaje: {{$contacto['message']}}</p>
</body>
</html>