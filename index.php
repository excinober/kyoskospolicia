<?php
session_start();


/** Require Includes **/
require "includes/constantes.php";
require "includes/functions.php";

/** Require Models **/
require "models/dbclass.php";
require "models/opcionesclass.php";

require "controllers/controller.php";
require "controllers/controllerAdmin.php";


if (isset($_GET["url"]) && !empty($_GET["url"])) {
	
	$url = $_GET["url"];
	$url = explode("/", $url);

	if (!empty($url[0])) {

		switch ($url[0]) {
			case 'admin':
				$controller = new ControllerAdmin();

				if (!empty($url[1])) {
					switch ($url[1]) {
						case 'editarOpcion':
							$controller->pageEditarOpcion($url[2]);
							break;

						case 'crearOpcion':
							$controller->pageCrearOpcion();
							break;

						case 'eliminarOpcion':
							$controller->eliminarOpcion($url[2]);
							break;
						
						default:
							$controller->pageAdminHome();							
							break;
					}
				}else{
					$controller->pageAdminHome();							
				}
				break;
			
			default:
				$controller = new Controller();
				$controller->pageHome();
				break;
		}
	}

}else{
	$controller = new Controller();
	$controller->pageHome();
}
?>