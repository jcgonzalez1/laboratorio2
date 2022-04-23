<?php
session_start();
include('config.php');
include_once 'class/vehiculos.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
$crud = new crud($conn);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>LISTA DE VEHICULOS</title>
</head>

<body>
    <div class="container"><br>
        <table id="vehiculos" class="display table table-bordered table-stripe" cellspacing="0" width="100%">
            <tr>
                <th>ID</th>
                <th>MATRICULA</th>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>COLOR</th>
                <th>PRECIO</th>
            </tr>
            <tbody>
                <?php
                $query = "SELECT * FROM automovil";
                $crud->dataview($query)
                ?>

            </tbody>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>