<div class="headerMision mb-5">
	<h1>Misión y Metas</h1>
</div>

<div class="row mb-3">

	<div class="col-sm-12 col-md-12 col-lg-9 mt-5 mx-auto d-block">
		
		<div class="text-center">
			<?php
				for($i=1;$i<14;$i++){
					$tipoArchivo = ($i == 10 ? 'png' : 'jpeg');
					echo "<img src='".base_url("public/img/marcas/1-$i.$tipoArchivo")."' alt='' class='img-fluid m-3'>";
					$a = $i%5;
					if($a==0){
					echo "<hr>";
					}
				}						
			?>
		</div>

	</div>

</div>


<div class="row">
	
	<div class="col-sm-12 col-md-12 col-lg-9 offset-lg-1 mt-5">
		<h1 class="titulos text-center">
			Socios Corporativos
		</h1>
	</div>
</div>

<div class="row mb-3">

	<div class="col-sm-12 col-md-12 col-lg-9 mt-5 mx-auto d-block">
			
		<div class="text-center">
			<?php
				for($i=1;$i<3;$i++){
					echo "<img src='".base_url("public/img/marcas/3-$i.jpg")."' alt='' class='img-fluid m-3'>";
					$a = $i%5;
					if($a==0){
					echo "<hr>";
					}
				}						
			?>
		</div>

	</div>

</div>


<div class="row">
	
	<div class="col-sm-12 col-md-12 col-lg-9 offset-lg-1 mt-5">
		<h1 class="titulos text-center">
			Media Members
		</h1>
	</div>
</div>

<div class="row mb-5">

	<div class="col-sm-12 col-md-12 col-lg-9 mt-5 mx-auto d-block">
			
		<div class="text-center">
			<?php
				for($i=1;$i<4;$i++){
					echo "<img src='".base_url("public/img/marcas/2-$i.png")."' alt='' class='img-fluid m-3'>";
					$a = $i%5;
					if($a==0){
					echo "<hr>";
					}
				}						
			?>
		</div>

	</div>

</div>

