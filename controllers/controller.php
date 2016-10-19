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

		switch (count($opciones)) {
			case 14:
				$row1 = array("col s12 m5", "col s6 m3 offset-m1");
				$row2 = array("col s6 m3", "col s6 m3", "col s6 m3", "col s6 m3");
				$row3 = array("col s6 m3", "col s6 m3", "col s6 m3", "col s6 m3");
				$row4 = array("col s6 m3", "col s6 m4", "col s6 m2", "col s6 m3");
				break;

			case 15:
				$row1 = array("col s2 m3", "col s6 m3", "col s6 m3 offset-m1");
				$row2 = array("col s6 m3", "col s6 m3", "col s6 m3", "col s6 m3");
				$row3 = array("col s6 m3", "col s6 m3", "col s6 m3", "col s6 m3");
				$row4 = array("col s6 m3", "col s6 m4", "col s6 m2", "col s6 m3");
				break;
			
			default:
				# code...
				break;
		}

		include "views/home.php";
	}

	public function redirect($frame){
		//header("Location: ".$frame);
		/*if (isset($frame)) {
		    $frame = $frame;
		    $ch = curl_init();
		    $timeout = 5;
		    curl_setopt($ch, CURLOPT_URL, $frame);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		    $data = curl_exec($ch);
		    curl_close($ch);
		    echo $data;
		}*/

		$homepage = file_get_contents($frame);
		echo $homepage;
		//echo $frame;

	}
}
?>