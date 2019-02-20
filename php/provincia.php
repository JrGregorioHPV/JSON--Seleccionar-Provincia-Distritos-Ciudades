<?php require_once('conexion.php'); ?>
<?php
require_once('conexion.php');  

  $Conexion = new Conexion();
  $Consulta = "SELECT * FROM tbl_provincia ORDER BY PROVINCIA ASC";

  $Resultado = $Conexion->query($Consulta);

   	    if($Resultado->num_rows > 0){
   	    	while($Fila = $Resultado->fetch_assoc()){
   	    		$data[] = $Fila;
   	    	}

   	    	// Imprime en Json
			echo (json_encode($data));
   	    }
?>
