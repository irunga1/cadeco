<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- <script src="<?php echo base_url("public/js/menu.js"); ?>"></script>
		<script src="<?php echo base_url("public/js/main.js"); ?>"></script> -->
    
    
    <link rel="stylesheet" href="<?php echo base_url("public/css/main.css"); ?>">
</head>
<body>
<span id="fixed-div" style="font-size:30px;cursor:pointer" onclick="obj1.openNav();">&#9776;</span>

<div id="mySidenav" class="sidenav">
	<div class="logoContainer">
		<img src="<?php echo base_url()."public/img/cln.png" ?>" alt="">
	</div>
  <a href="javascript:void(0)" class="closebtn" onclick="obj1.closeNav();">&times;</a>
  <a href="<?php echo base_url("home/index"); ?>"> <span class="mItem">Inicio</span> </a>
  <a href="<?php echo base_url("mision/index"); ?>"> <span class="mItem">Misión</span></a>
  <a href="<?php echo base_url("directorio/index"); ?>"> <span class="mItem">Directorio</span> </a>
  <a href="<?php echo base_url("membresias/index"); ?>"> <span class="mItem">Membresias</span> </a>
  <a href="<?php echo base_url("miembros/index"); ?>"> <span class="mItem">Miembros</span> </a>
</div>
