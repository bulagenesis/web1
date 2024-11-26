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
    <div class="container mt-4">
    <div class="content-wrapper">
        <!-- Sidebar -->
        <?php
            include 'menu.php';
            include 'conexion.php';
        ?>   
        <!-- Contenido -->
            <div class="border border-dark border-1 h-100 p-4 text-dark">
                <h2>Listado Articulos</h2>
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
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['des']."</td>";
                                echo "<td>".$row['cant']."</td>";
                                echo "<td>".$row['vru']."</td>";
                                echo "<td><a href='editar.php?id=".$row['id']."'><i class='bi bi-pencil'></i></a>&nbsp;&nbsp;<a href='eliminar.php?id=".$row['id']."'><i class='bi bi-trash'></i></a></td>";
                                echo "</tr>";
                            }
                            $con->close();
                        ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="index.js"></script>