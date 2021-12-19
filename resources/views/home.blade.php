
@php
$hellow=' Hello World';
    
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>new page</title>
</head>
<body>
    <h1>{{$hellow}}</h1>


    <div>
        <b-navbar toggleable="lg" type="dark" variant="info">
      
          <b-collapse id="nav-collapse" is-nav>
            <b-navbar-nav>
                <a href="{{route('paginaprova2')}}">pagina numero 2</a>
                <a href="{{route('paginaprova3')}}">pagina numero 3 / lista</a>
                <a href="{{route('paginaprova4')}}">pagina numero 4</a>
            </b-navbar-nav> 
           
          </b-collapse>
        </b-navbar>
    </div>



      
    
</body>
</html>