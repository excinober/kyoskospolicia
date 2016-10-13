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
		
		$query = $this->consulta("SELECT `idopcion`, `orden`, `nombre`, `descripcion`, `estado`, `url`, `externo` FROM `opciones` $where");
		
		return $query;

	}

	public function crearOpcion($nombre, $descripcion, $url, $orden, $externo, $estado){
		$idopcion = $this->insertar("INSERT INTO `opciones`(`orden`, `nombre`, `descripcion`, `estado`, `url`, `externo`) VALUES ('$orden','$nombre','$descripcion','$estado','$url','$externo')");

		return $idopcion;
	}

	public function detalleOpcion($idopcion){
		$query = $this->consulta("SELECT `idopcion`, `orden`, `nombre`, `descripcion`, `estado`, `url`, `externo` FROM `opciones` WHERE `idopcion`='$idopcion'");
		
		return $query[0];
	}

	public function actualizarOpcion($nombre, $descripcion, $url, $orden, $externo, $estado, $idopcion){
		$filas = $this->actualizar("UPDATE `opciones` SET 									
									`orden`='$orden',
									`nombre`='$nombre',
									`descripcion`='$descripcion',
									`estado`='$estado',
									`url`='$url',
									`externo`='$externo' 
									WHERE `idopcion`='$idopcion'");
		return $filas;
	}

	public function eliminarOpcion($idopcion){
		$filas = $this->eliminar("DELETE FROM `opciones` WHERE idopcion = '$idopcion'");
		return $filas;
	}
}
?>