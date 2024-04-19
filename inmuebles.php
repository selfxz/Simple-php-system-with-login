<?php
include 'config/conexion3.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inmuebles</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/estilo.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="vista/login/mostrar.php">LAS CASUARINAS</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar" aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Inicio</div>
                            <a class="nav-link" href="vista/login/mostrar.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Inicio</a
                            >
                            <div class="sb-sidenav-menu-heading">Listados</div>
                            <a class="nav-link collapsed" href="inmuebles.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Inmuebles
                                </a>
                            <a class="nav-link collapsed" href="terrenos.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Terrenos
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Adicionales</div>
                            <a class="nav-link" href="charts.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pagos</a
                            ><a class="nav-link" href="tabla.php"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Clientes</a
                            >
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-xl-8">
                        <h1 class="text-center">Listado de Inmuebles</h1>
                        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#nuevoModal" type="button">Agregar Inmueble</button>
        
                        <table class="table table-light table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Ubicación</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Costo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $cn = $sql->query('SELECT * FROM t_inmu');
                                $result = $cn->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($result as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id_inmueble']; ?></td>
                                        <td><?php echo $row['ubi_pro']; ?></td>
                                        <td><?php echo $row['descripcion']; ?></td>
                                        <td><?php echo 'S/', $row['costo']; ?></td>
                                    </tr>
                                    <?php
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <?php
    include 'modelo/modal.php';
    ?>
    </body>
</html>
