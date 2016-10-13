<?php include "header.php"; ?>

  <div class="container m-t-3">
    <table class="table">
	  <thead class="thead-inverse">
	  	<tr>
		  	<th>Nombre</th>
		  	<th>Url</th>
		  	<th>Orden</th>
		  	<th>Estado</th>
		  	<th>Externo</th>
		  	<th>Opciones</th>
	  	</tr>
	  </thead>
	  <tbody>
	  	<tr>
	  		<?php 
	  			foreach ($opciones as $key => $opcion) {
	  				
	  				if ($opcion["estado"]) {
	  					$estado = "SI";
	  				}else{
	  					$estado = "NO";
	  				}

	  				if ($opcion["externo"]) {
	  					$externo = "SI";
	  				}else{
	  					$externo = "NO";
	  				}
	  		?>
	  			<tr>
	  				<td><?=$opcion["nombre"]?></td>
	  				<td><?=$opcion["url"]?></td>
	  				<td><?=$opcion["orden"]?></td>
	  				<td><?=$estado?></td>
	  				<td><?=$externo?></td>
	  				<td>
	  					<a href="admin/editarOpcion/<?=$opcion["idopcion"]?>" class="btn btn-sm btn-success">Editar</a>
	  					<a href="admin/eliminarOpcion/<?=$opcion["idopcion"]?>" class="btn btn-sm btn-danger">Eliminar</a>
	  				</td>
	  			</tr>
	  		<?php
	  			}
	  		?>
	  	</tr>	  	
	  </tbody>
	 </table>
	 <center>
	 	<a href="admin/crearOpcion" class="btn btn-lg btn-primary m-t-2">Nueva Opción</a>
	 </center>
	 </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
