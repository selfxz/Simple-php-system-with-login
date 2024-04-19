<?php
    require 'config/conexion2.php';
    $sqlCli = "SELECT * FROM t_cli";
    $cliente = $conn->query($sqlCli);
    $dir = "vista/datos/imagenes/";
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>Usuarios</title>
		<link href="css/styles.css" rel="stylesheet" />
		<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	</head>
	<body class="sb-nav-fixed">
		<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
			<a class="navbar-brand" href="index.html">LAS CASUARINAS</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
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
			<div id="layoutSidenav_content">
				<main>
					<div class="container-fluid">
						<h1 class="mt-4">Clientes</h1>
						<div class="card mb-4">
						<div class="row justify-content-end">
                <div class="col-auto">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASZJREFUSEu9VYmNwjAQnOnkqISjkiOVwFVydAJXCelk0US2ZTv4CSRYshzJzs7Ozj7Exosb20cTwMy+AewB6NQeAdzc+U9S38VVBDCzLwB/zmjNhgAPJHXO1lMAMzsBOC8In4xfSP7m/8wAXjAe2zznIAmAC8t9gef5UzEZYl1ygGst5iSn92ZmFSdGkjt/HwDM7OhELWdEH4D+l+hTdsUATWE7Gchu0CIGUEqKxRoMbiQPOQOJq9wPy3vcEv2JJkGHmMGaAPDOxQDVDJro9ousohs+LrIamVisIbKK7ZIzaDa3zhCFDEoAXIUK5J1WkRTZDMCBNCu6EsV6s4tY/Cxs10n1JrVU8mbTgeNBHYh00fZjU9d+bL4+Mlvtofe+OfR7DZXePQBXqZQZnJ9CeQAAAABJRU5ErkJggg=="/> Agregar </a>
                </div>
            </div>
						</div>
						<div class="card mb-4">
							<div class="card-header"><i class="fas fa-table mr-1"></i>Tabla de Clientes</div>
							<div class="card-body">
								<div class="table-responsive">
								<table class="table table-sm table-dark table-striped table-hover mt-5">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Dni</th>
                                <th>Fecha de resgistro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- fetch_assoc se usa para obtener una fila de resultados de una 
                            consulta SQL en forma de un array asociativo-->
                            <?php while ($row = $cliente->fetch_assoc()) {?>
                                <tr>
                                    <td><img src="<?= $dir . $row['id'] .'.jpg?n=' . time(); ?>" width="50"></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['dni']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editaModal" data-bs-id="<?= $row['id']; ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAP1JREFUSEvFlesRwjAMg9VNYBMYhUkYBTaBUdgE7uPqXurGedD2yJ+0qStZspMM2nkMO+NrK4KDpJOku0/YExB0k8QPpXGW9BwDHiM4ry9JfGP+Dk+QBkcEOXADJDGejxHBOyDOkVkyBgg4a8wXs8sraCWIbLH1VQRp5igzW1BCDX+2CCAaIAVJbbEiT/7nihxZlAO3uvhazOrVUoNecBRaCy/a1CuIwKN1wFE0JV5TkJNfUrSwuEbQqsh8X0VQynw1QdoZsz53W/xnBYZTAiemm6D3uvg/QctxXVPFJuNIz94HbJRrcoHUwPx3asRJGu7kXsBq/FZ3cki0O8EHmFFTGdR7G0wAAAAASUVORK5CYII="/>Editar</a>

                                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="<?= $row['id']; ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJhJREFUSEvtlc0NgCAMRltuBNkJR3ESdTIZxR3UcBPDwd8AVSOe4Nx8rzxIi5D4YOJ8IAFmGBQw1gUaabgQbazJKIAId7k9zHPFpdQhyAlgpsl+oYwLseX+C/ii+2uG9w3eqjqqWUEZcFKeFZG/OCvKinYD6WfROHaAqEjpxwJrNS+K8t40dWsSsX4ACW42cic/uoWnODlgAclKWBll8HUUAAAAAElFTkSuQmCC"/>Eliminar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
								</div>
								</div>
								</div>
											</div>
		<?php include 'modelo/nuevoModal.php'; ?>
        <?php include 'modelo/editaModal.php'; ?>
        <?php include 'modelo/eliminaModal.php'; ?>
					</main>
					
			</div>
		</div>
		<script >
    let nuevoModal = document.getElementById('nuevoModal')
let editaModal = document.getElementById('editaModal')
let eliminaModal = document.getElementById('eliminaModal')

editaModal.addEventListener('shown.bs.modal',event => {
    let button = event.relatedTarget
    let id = button.getAttribute('data-bs-id')

    let inputId = editaModal.querySelector('.modal-body #id')
    let inputNombre = editaModal.querySelector('.modal-body #nombre')
    let inputEmail = editaModal.querySelector('.modal-body #email')
    let inputTelefono = editaModal.querySelector('.modal-body #telefono')
    let inputDni = editaModal.querySelector('.modal-body #dni')
    let imagen = editaModal.querySelector('.modal-body #img_imagen')

    let url = "vista/modificar/getCliente.php"
    let formData = new FormData()
    formData.append('id', id)
    fetch(url,{
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data =>{
        inputId.value = data.id
        inputNombre.value = data.nombre
        inputEmail.value = data.email
        inputTelefono.value = data.telefono
        inputDni.value = data.dni
        imagen.src= '<?= $dir ?>' + data.id + '.jpg'
    }).catch(err => console.log(err))

})

eliminaModal.addEventListener('show.bs.modal', event =>{
        let button = event.relatedTarget
        let id = button.getAttribute('data-bs-id')
        eliminaModal.querySelector('.modal-footer #id').value = id
})
</script>
<script src="js/bootstrap.bundle.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script src="js/scripts.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
		<script src="assets/demo/datatables-demo.js"></script>
	</body>
</html>
