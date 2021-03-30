
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
    <link rel="stylesheet" href="public/css/styles.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="z-index:9999999;">
            <div class="sidebar-header">
				<img src="<?php echo base_url()."public/img/cln.png" ?>" class="img-fluid" alt="">
                <strong>BS</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="/principal">
                        Inicio
                    </a>
                </li>
                <li>
					<a href="/mision">
						Mision
					</a>

                    <a href="/directorio">
                        Directorio
                    </a>
                </li>
                <li>
                    <a href="/membresias">
                        Membresias
                    </a>
                </li>
                <li>
                    <a href="/miembros">
                        Miembros
                    </a>
                </li>
            </ul>

        </nav>

        <div id="container-fluid">
