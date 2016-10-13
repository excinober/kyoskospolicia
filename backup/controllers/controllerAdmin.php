<?php
/**
* 
*/
class ControllerAdmin
{
	
	function __construct()
	{
		$this->opciones = new Opciones();
	}

	public function pageAdminHome(){

		$estados = array(0,1);
		$opciones = $this->opciones->listarOpciones($estados);
		include "views/admin/home.php";
	}

	public function pageEditarOpcion($idopcion){

		if (isset($_POST["submit-form-opcion"])) {
			
			extract($_POST);
			$filas = $this->opciones->actualizarOpcion($nombre, $descripcion, $url, $orden, $externo, $estado, $idopcion);
		}

		$opcion = $this->opciones->detalleOpcion($idopcion);

		include "views/admin/form_opcion.php";
	}

	public function pageCrearOpcion(){
		
		if (isset($_POST["submit-form-opcion"])) {
			
			extract($_POST);
			$idopcion = $this->opciones->crearOpcion($nombre, $descripcion, $url, $orden, $externo, $estado);

			$this->pageAdminHome();

		}else{

			include "views/admin/form_opcion.php";	
		}
	}

	public function eliminarOpcion($idopcion){

		$filas = $this->opciones->eliminarOpcion($idopcion);
		$this->pageAdminHome();
	}
	
}
?>