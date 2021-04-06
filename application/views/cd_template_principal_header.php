
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CADECO</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("public/css/styles.css") ?> ">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>
	<div id="mySidenav" class="sidenav">
		<div class="logoContainer">
			<img src="<?php echo base_url()."public/img/cln.png" ?>" alt="">
		</div>

	<a href="javascript:void(0)" class="closebtn" onclick="obj1.closeNav();">&times;</a>
	<a href="<?php echo base_url("principal") ?>"> <i class="fa fa-home" aria-hidden="true"></i> <span class="mItem">Inicio</span> </a>
	<a href="<?php echo base_url("mision") ?>"> <i class="fas fa-trophy" aria-hidden="true"></i><span class="mItem">Mision</span></a>
	<a href="<?php echo base_url("directorio") ?>"> <i class="fas fa-book-open" aria-hidden="true"></i><span class="mItem">Directorio</span> </a>
	<a href="<?php echo base_url("membresias") ?>"> <i class="fas fa-bookmark" aria-hidden="true"></i><span class="mItem">Membresias</span> </a>
	<a href="<?php echo base_url("miembros") ?>"> <i class="fas fa-user-friends" aria-hidden="true"></i><span class="mItem">Miembros</span> </a>
	</div>


    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="z-index:333;">
            <div class="sidebar-header">
				<img src="<?php echo base_url()."public/img/cln.png" ?>" class="img-fluid" alt="">
                <strong>BS</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="<?php echo base_url("principal")?>">
					
                        Inicio
                    </a>
                </li>
                <li>
					<a href="<?php echo base_url("mision")?>">
						Misión
					</a>

                    <a href="<?php echo base_url("directorio")?>">
                        Directorio
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("membresias")?>">
                        Membresias
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("miembros")?>">
                        Miembros
                    </a>
                </li>
            </ul>

        </nav>

        <div id="container-fluid">
