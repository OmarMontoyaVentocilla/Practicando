<?php

require_once 'conexion.php';
$idpais=$_POST['idpais'];
$sql="SELECT * FROM ciudad WHERE idpais='".$idpais."'";
$res=$conexion->query($sql);
while ($ciudad=$res->fetch_assoc()) {
?>
<option value="<?php echo $ciudad['idciudad'];?>"><?php echo $ciudad['nombreciudad'];?></option>
<?php	
}
$conexion->close();
?>