<?php 
	include('C:\wamp64\www\maxelec\postventa\modelo\mform.php');
	$obj = new mform();
	$dni = $_POST['dni'];

	$data = $obj->busc_cliente($dni);

 ?>