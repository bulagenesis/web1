<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title></title>
</head>
<body>
<?php
include 'conexion.php';
$id = $_GET['id'];
$sql = "DELETE FROM articulos WHERE id = $id";
$res = $con->query($sql);
if ($res) {
    echo "<script>
    swal('Articulo eliminado correctamente')
    .then((value) => {
        window.location.href = 'listado.php';
    });    </script>";
} else {
    echo "Error al eliminar el registro";
}
?>
</body>
</html>
