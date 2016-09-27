<?php 
//require_once("clases/AccesoDatos.php");
//require_once("clases/cd.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'alta':
		include("alta.php");
		break;
	case 'MostrarGrilla':
		include("grilla.php");
		break;
	case 'MostrarMenu':
		include("menuPrincipal.php");
		break;	
	/*case 'MostarBotones':
		include("partes/botonesABM.php");
		break;
	case 'MostarLogin':
		include("partes/formLogin.php");
		break;
	case 'MostrarFormAlta':
		include("partes/formCd.php");
		break;
		*/
	default:
		# code...
		break;
}

 ?>