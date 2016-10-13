<?php include "header.php"; ?>
<div class="container m-y-3">
	<form method="post">
		<div class="form-group">
		    <label for="exampleInputEmail1">Nombre</label>
		    <input type="text" class="form-control" name="nombre" value="<?=$opcion['nombre']?>">
		 </div>
		<div class="form-group">
		    <label for="exampleInputEmail1">Descripción</label>
		    <textarea class="form-control" name="descripcion"><?=$opcion['descripcion']?></textarea>
		 </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">Url</label>
		    <input type="text" class="form-control" name="url" value="<?=$opcion['url']?>">
		 </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">Orden</label>
		    <input type="number" class="form-control" name="orden" value="<?=$opcion['orden']?>">
		 </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">Externo</label>
		    <select class="form-control" name="externo">
		    	<option value="1" <?php if($opcion['externo']) echo "selected"; ?>>SI</option>
		    	<option value="0" <?php if(!$opcion['externo']) echo "selected"; ?>>NO</option>
		    </select>
		 </div>
		 <div class="form-group">
		    <label for="exampleInputEmail1">Estado</label>
		    <select class="form-control" name="estado">
		    	<option value="1" <?php if($opcion['estado']) echo "selected"; ?>>Activo</option>
		    	<option value="0" <?php if(!$opcion['estado']) echo "selected"; ?>>Inactivo</option>
		    </select>
		 </div>
		 <center>
		 	<button type="submit" name="submit-form-opcion" class="btn btn-lg btn-primary">ENVIAR</button>
		 </center>
	</form>
</div>