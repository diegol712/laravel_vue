<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/plantilla.css">
</head>
<body>

<div id="app">
@include('plantilla.sidebar')

    @yield('contenido')

</div>

<script src="js/app.js"></script>
<script src="js/plantilla.js"></script>
</body>
</html>
