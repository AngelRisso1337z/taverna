<?php
#echo dirname(__FILE__);
function url(){
    $base = explode("/",parse_url($_SERVER['REQUEST_URI'])['path']);
    $port = $_SERVER['SERVER_PORT'];
    $domainURL = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'];
    return $domainURL.':'.$port.'/'.$base[1].'';
}
?>
<div class="nav">
    <a class="nav-link" href="<?php echo url(); ?>/index.php">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Dashboard
    </a>
    <div class="sb-sidenav-menu-heading">Accesos</div>
    <a class="nav-link" href="<?php echo url(); ?>/items">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        Items
    </a>
    <a class="nav-link" href="<?php echo url(); ?>/rangos">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        Rangos
    </a>
    <a class="nav-link" href="<?php echo url(); ?>/inventario">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        Inventarios
    </a>
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu-productos">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        menu
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="menu-productos" data-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="#">Listado</a>
            <a class="nav-link" href="#">Marcas</a>
            <a class="nav-link" href="#">Tipo de Producto</a>
        </nav>
    </div>


</div>
