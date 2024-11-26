<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <script src="bootstrap.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Empresa WEB 1</title>
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="nart" tabindex="-1" aria-labelledby="nartLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nartLabel" style="color:black">Nuevo Articulo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="guardar.php" method="post">
                    <div class="mb-3">
                            <label for="id" class="form-label">Id</label>
                            <input type="number" class="form-control" id="id" name="id" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="des" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="des" name="des" required>
                        </div>
                        <div class="mb-3">
                            <label for="cant" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cant" name="cant" required>
                        </div>
                        <div class="mb-3">
                            <label for="vru" class="form-label">Vr. Unitario</label>
                            <input type="number" class="form-control" id="vru" name="vru" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>  
            </div>
        </div>
    </div>


<div class="container mt-4">
        <div class="content-wrapper">
            <!-- Sidebar -->
            <?php
            include 'menu.php';
            include 'conexion.php';
            ?>
            <!-- Contenido -->
            <div class="border border-dark border-1 h-100 p-4 text-dark">
                <h2>Listado Articulos</h2> <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#nart"><i class="bi bi-plus-square"></i> Nuevo</button>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Descripción</th>
                            <th>Cant.</th>
                            <th>Vr. Unitario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM articulos ORDER BY des asc";
                        $res = $con->query($sql);
                        foreach ($res as $row) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['des'] . "</td>";
                            echo "<td>" . $row['cant'] . "</td>";
                            echo "<td>" . $row['vru'] . "</td>";
                            echo "<td><a href='editar.php?id=" . $row['id'] . "'><i class='bi bi-pencil'></i></a>&nbsp;&nbsp;<a href='eliminar.php?id=" . $row['id'] . "'><i class='bi bi-trash'></i></a></td>";
                            echo "</tr>";
                        }
                        $con->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<script src="index.js"></script>