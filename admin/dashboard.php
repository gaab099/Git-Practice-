<?php
session_start();

// SOLO ADMIN
if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (corregido) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <!-- Estilo opcional -->
    <style>
        .card:hover {
            transform: scale(1.05);
            transition: 0.3s;
        }
    </style>
</head>
<body>

<!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin - Don Toño</a>

        <div class="ms-auto d-flex align-items-center">
            <span class="text-white me-3">
                Bienvenido, <?php echo $_SESSION['nombre']; ?>
            </span>

            <a class="btn btn-danger" href="../php/logout.php">
                <i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión
            </a>
        </div>
    </div>
</nav>

<!-- CONTENIDO -->
<div class="container mt-5">
    <h2 class="mb-4">Panel de Administración</h2>

    <div class="row">

        <!-- VER PRODUCTOS -->
        <div class="col-md-4 mb-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <i class="fa-solid fa-box fa-3x mb-3 text-primary"></i>
                    <h5 class="card-title">Ver Productos</h5>
                    <a href="ver-productos.php" class="btn btn-primary">
                        Todos los productos
                    </a>
                </div>
            </div>
        </div>

        <!-- AGREGAR PRODUCTO -->
        <div class="col-md-4 mb-4">
            <div class="card text-center shadow">
                <div class="card-body">
                    <i class="fa-solid fa-plus fa-3x mb-3 text-success"></i>
                    <h5 class="card-title">Agregar Producto</h5>
                    <a href="crear-productos.php" class="btn btn-success">
                        Crear nuevo producto
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
