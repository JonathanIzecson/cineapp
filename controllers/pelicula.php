<?php
require_once("../models/Pelicula.php");
$pelicula = new Pelicula();

switch ($_GET['op']) {
    case 'listar':
        $data = $pelicula->getPeliculas();

        foreach ($data as $row) {
?>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <img class="img-rounded" src="public/images/<?php echo $row['imagen']; ?>" alt="Generic placeholder image" width="150" height="200">
                <h4><?php echo $row['titulo']; ?></h4>
                <h4>
                    <span class="label label-default"><?php echo $row['clasificacion']; ?></span>
                    <span class="label label-default"><?php echo $row['duracion']; ?> min</span>
                    <span class="label label-default"><?php echo $row['genero']; ?></span>
                </h4>
                <p><a class="btn btn-sm btn-primary" href="#" role="button">Consulta Horarios &raquo;</a></p>
            </div>

<?php
        }
        break;

    default:

        break;
}
?>