<?php 
	include("conexion.php");
	class mform{

		function mform(){}

		function selcon($sql,$op){
			$conBD = new conexion();
			$conBD->conectarBD();
			$data = $conBD->ejecutarconsulta($sql,$op);
			$conBD->desconectarBD();
			return $data;
		}

		function busc_cliente($dni){
			$sql = "SELECT * FROM clientes WHERE dni = '$dni';";
			$data = $this->selcon($sql,1);
			return $data;
		}
		
		function busc_id($id_reclamo){
			$sql = "SELECT id_reclamo FROM reclamos WHERE id_reclamos = '$id_clemados';";
			$data2 = $this->selcon($sql,1);
			return $data2;
		}
		
		function nuevallamada($producto,$tipo_prod,$modelo_prod,$comercio,$fecha_compra,$descrip,$estado){
			$sql = "INSERT INTO maxelec.reclamos (`dni`, `nombre`, `correo`, `telefono`, `direccion`, `provincia`, `ciudad`, `producto`, `tipo_prod`, `modelo_prod`, `comercio`, `fecha_compra`, `descrip`, `estado`, `fecha_reclamo`) VALUES 
			((SELECT dni FROM maxelec.clientes WHERE dni = 45555555),
			(SELECT nombre FROM maxelec.clientes WHERE dni = 45555555), 
			(SELECT correo FROM maxelec.clientes WHERE dni = 45555555), 
			(SELECT telefono FROM maxelec.clientes WHERE dni = 45555555), 
			(SELECT direccion FROM maxelec.clientes WHERE dni = 45555555), 
			(SELECT provincia FROM maxelec.clientes WHERE dni = 45555555), 
			(SELECT ciudad FROM maxelec.clientes WHERE dni = 45555555), 
			'$producto', 
			'$tipo_prod', 
			'$modelo_prod', 
			'$comercio', 
			'$fecha_compra', 
			'$descrip', 
			'$estado', 
			NOW())";
			$data2 = $this->selcon($sql,2);
		}


	}

 ?>