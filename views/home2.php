<?php include "header.php"; ?>
<div class="container-fluid m-a-0 p-a-0" style="height:100%;">
	<div class="col-xs-12 col-md-2 m-a-0 p-a-0">
		<h1>Opciones</h1>
		<ul>
		<?php 
			foreach ($opciones as $key => $opcion) {
		?>
			<li><a href="#" class="option" onclick="javascript: cargarOpcion('<?=$opcion["url"]?>');"><?=$opcion["nombre"]?></a><small class="form-text text-muted"><?=$opcion["descripcion"]?></small></li>
		<?php
			}
		?>
		</ul>
	</div>
	<div class="col-xs-12 col-md-10 m-a-0 p-a-0" style="height:100%;">
		<div class="embed-responsive embed-responsive-16by9" style="height:100%;">
		  <iframe class="embed-responsive-item" src="" id="marcoContenido" style="height:100%;" allowfullscreen></iframe>
		</div>
	</div>
</div>
<?php include "footer.php"; ?>