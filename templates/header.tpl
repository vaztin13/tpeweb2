<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}" />  <!-- IMPORTANTE para evitar redirecciones de /x/1  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Inmobiliaria Alfon</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">INMOBILIARIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="propiedades">PROPIEDADES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="administrador">ADMINISTRADOR</a>
                    </li>
            </div>
        </div>
    </nav>

    {* Podés hacer un dropdown para elegir propiedades en alquiler o venta, 
    si esa es la asociacion q tenes con la tabla propiedades x ejemplo
    *}