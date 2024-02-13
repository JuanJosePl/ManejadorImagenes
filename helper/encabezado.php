<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejador Imagenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">Mis Imagenes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mi_menu"
            aria-controls="mi_menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mi_menu">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Etiquetas</a>
                </li>
            </ul>
            <form class="d-flex">
                <input type="text" name="marca" list="marca" class="form-control me-2" placeholder="Etiqueta">
                <datalist id="marca">
                </datalist>
                <button type="submit" class="btn btn-outline-info">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2 sidenav mt-5"></div>