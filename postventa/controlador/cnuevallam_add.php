<?php 
	include('C:\wamp64\www\maxelec\postventa\modelo\mform.php');
	$obj = new mform();
	
	$producto = $_POST['producto'];
	$tipo_prod = $_POST['tipo_prod'];
	$modelo_prod = $_POST['modelo_prod'];
	$comercio = $_POST['comercio'];
	$fecha_compra = $_POST['fecha_compra'];
	$descrip = $_POST['descrip'];
	$estado = $_POST['estado'];
	$obj->nuevallamada($producto,$tipo_prod,$modelo_prod,$comercio,$fecha_compra,$descrip,$estado);
 ?>