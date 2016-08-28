<?php
require_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>inicio</title>
   <script type="text/javascript" src="jquery.js"></script>
   <script type="text/javascript">
   	  
function mostrarCiudades(){
	var pais=$('#pais').val();
	$.ajax({
        url:"cargar.php",
        data:{idpais:pais},
        type:"POST",
        success:function(data){
        	$('#ciudad').html(data);
        }


	})
}

   </script> 
</head>
<body>
<form method="post">
Pais:<select name="pais" id="pais" onchange="mostrarCiudades()">
<option >Seleccion Pais</option>
<?php
$sql="SELECT * FROM pais ORDER BY nombrepais ASC";
$res=$conexion->query($sql);
while ($pais=$res->fetch_assoc()) {
?>
<option value="<?php echo $pais['idpais'];?>"><?php echo $pais['nombrepais'];?></option>
<?php 
} 
$conexion->close();
?>
</select><br><br>
Ciudad:<select name="ciudad" id="ciudad"></select>
</form>	
</body>
</html>