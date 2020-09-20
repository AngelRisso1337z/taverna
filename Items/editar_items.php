<?php
require_once ('../tablas/items.php');

$items = new Items();

$idItem = $_GET['id'];
$info = $items->obtenerInfo($idItem);
$selectedActivo = "";
if ($info['estadoItem'] == 1){
    $selectedActivo = "selected";
}
$selectedInactivo = "";
if ($info['estadoItem'] == 0){
    $selectedInactivo = "selected";
}

$submit = $_POST['submit'];
if($submit == 1){
    //Actualizar
    $items->idItem = $idItem;
    $items->nombreItem = $_POST['nombreItem'];
    $items->pesoItem = $_POST['pesoItem'];
    $items->tipoItem = $_POST['tipoItem'];
    $items->estadoItem = $_POST['estadoItem'];

    $actualizar = $items->actualizar();

    if($actualizar == 0){
        header("Location: index.php");
    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Fund. Programación" />
    <title>Editar Items - Sistema Taberna</title>
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
                <h1 class="mt-4">Editar Items</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Items</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        Información
                    </div>
                    <div class="card-body">

                        <form name="editar" id="editar" action="" method="post">
                            <input type="hidden" name="submit" value="1">

                            <div class="form-group col-md-6">
                                <label>Nombre del item</label>
                                <input type="text" name="nombreItem" id="nombreItem" class="form-control" required
                                       value="<?php echo $info['nombreItem'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Peso del item</label>
                                <input type="text" name="pesoItem" id="pesoItem" class="form-control" required
                                       value="<?php echo $info['pesoItem'] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tipo del item</label>
                                <input type="text" name="tipoItem" id="tipoItem" class="form-control" required
                                       value="<?php echo $info['tipoItem'] ?>">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Estado del Item</label>
                                <select name="estadoItem" id="estadoItem" class="form-control">
                                    <option value="1" <?=$selectedActivo?>>Activo</option>
                                    <option value="0" <?=$selectedInactivo?>>Inactivo</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <a href="index.php" class="btn btn-dark">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Guardar Datos</button>
                            </div>

                        </form>

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

