<?php
/**
* 
*/
class Controller
{
	
	function __construct()
	{
		$this->opciones = new Opciones();
	}

	public function pageHome(){

		$estados = array(1);

		$opciones = $this->opciones->listarOpciones($estados);
		include "views/home.php";
	}
}
?>