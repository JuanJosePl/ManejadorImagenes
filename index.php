<?php 
require "libs/Mysql.php";
require "libs/Imagen.php";
require "helper/encabezado.php";

$archivos = Imagen::leerDirectorio();
?>

<div class="col-sm-8 sidenav mt-3">
    <h2 class="text-center">Mis Imagenes</h2>
    <?php 
    $fotos_array = [];
    foreach ($archivos as $archivo) {
        if($archivo->isFile()) {
            $img = $archivo->getPath()."/".$archivo->getFilename();
            $foto = 
            [ 
                "archivo"=> $archivo->getFilename(),
                "camino"=> $archivo->getPath(),
                "size"=> round($archivo->getSize()/1024,1),
                "fecha" => $archivo->getFilename(),
            ];
            $fotos_array[] = $foto;
            print "<img id='' src='" . $img . "' height='80'/>";
        }
    }
    ?>
</div>
<?php require "helper/piepagina.php"?>
