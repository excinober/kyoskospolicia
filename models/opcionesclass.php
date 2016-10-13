<?php
/**
* 
*/
class Opciones extends Database
{
	
	public function listarOpciones($estados=array()){

		$where = " WHERE ";

		foreach ($estados as $key => $estado) {
			$where .= " `estado` = '$estado' ";
			if (($key+1) < count($estados)) {
				$where .= " OR ";
			}
		}
		
		$query = $this->consulta("SELECT `idopcion`, `orden`, `nombre`, `descripcion`, `icono`, `estado`, `url`, `externo`, `padre`, `destacado` FROM `opciones` $where ORDER BY `orden` ASC");
		
		return $query;

	}

	public function crearOpcion($nombre, $descripcion, $icono, $url, $orden, $externo, $estado, $padre, $destacado){
		$idopcion = $this->insertar("INSERT INTO `opciones`(`orden`, `nombre`, `descripcion`, `icono`, `estado`, `url`, `externo`, `padre`, `destacado`) VALUES ('$orden','$nombre','$descripcion', '$icono', '$estado','$url','$externo','$padre','$destacado')");

		return $idopcion;
	}

	public function detalleOpcion($idopcion){
		$query = $this->consulta("SELECT `idopcion`, `orden`, `nombre`, `descripcion`, `icono`, `estado`, `url`, `externo`, `padre`, `destacado` FROM `opciones` WHERE `idopcion`='$idopcion'");
		
		return $query[0];
	}

	public function actualizarOpcion($nombre, $descripcion, $icono, $url, $orden, $externo, $estado, $idopcion, $padre, $destacado){
		$filas = $this->actualizar("UPDATE `opciones` SET 									
									`orden`='$orden',
									`nombre`='$nombre',
									`descripcion`='$descripcion',
									`icono`='$icono',
									`estado`='$estado',
									`url`='$url',
									`externo`='$externo',
									`padre`='$padre',
									`destacado`='$destacado' 
									WHERE `idopcion`='$idopcion'");
		return $filas;
	}

	public function eliminarOpcion($idopcion){
		$filas = $this->eliminar("DELETE FROM `opciones` WHERE idopcion = '$idopcion'");
		return $filas;
	}
}
?>