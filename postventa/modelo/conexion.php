<?php 
	class conexion{

		var $link;

		function conexion(){}

		function conectarBD(){
			include ("configuracion.php");
			$this->link = mysqli_connect($serbd,$usubd,$passbd,$nombd);
			if (!$this->link) {
				echo "Error en la conexion a la base de datos";
			}
		}

		function ejecutarconsulta($con,$op){
			$recordset = mysqli_query($this->link,$con);
			if ($op==1) {
				while($linea= mysqli_fetch_array($recordset)){
					$data[]=$linea;
				}
			} else {
				$data[]="";
			}
			$dat = isset($data) ? $data:NULL;
			if ($dat) {
				return $dat;
			}
		}

		function desconectarBD(){
			mysqli_close($this->link);
		}
		
	}
 ?>