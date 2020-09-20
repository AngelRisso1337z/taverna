<?php
require_once ('../tablas/inventario.php');

$inventario= new inventario();

$listado = $inventario->obtener();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Fund. Programación" />
    <title>Inventarios - Sistema Taberna</title>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="../css/styles.css" rel="stylesheet" />

</head>
<body class="sb-nav-fixed">
<!-- Navbar-->
<?php include_once('../funciones/menu-user.php'); ?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <?php include_once('../funciones/menu.php'); ?>
            </div>

        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Inventarios</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Inventarios/li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        Listado
                        <div class="float-right">
                            <a href="agregar_inventarios.php" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                                Agregar
                            </a>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Rango</th>
                                        <th>Disponiblidad</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($listado as $key){
                                ?>
                                    <tr>
                                        <td>
                                            <a href="editar_Inventario.php?id=<?= $key['$idinventario'] ?>">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td><?= $key['idinventario'] ?></td>
                                        <td><?= $key['nombre'] ?></td>
                                        <td><?= $key['rangos_idRangos'] ?></td>
                                        <td><?= $key['disponible'] ?></td>

                                    </tr>

                                    <?php
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Sistema <b>Taberna</b> 2020</div>

                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
</body>
</html>

