<?php 
/*****************************
 	Developer:ennima1
 	Agency:Miru Interactive 
******************************/

require('connect.php'); 
$field_usuario = $_REQUEST['usuario']; 
$field_pass = $_REQUEST['pass']; 
$field_nombre = $_REQUEST['nombre']; 
$field_email = $_REQUEST['email']; 
$field_avatar = $_REQUEST['avatar']; 
$field_privilegios = $_REQUEST['privilegios']; 
$field_status = $_REQUEST['status']; 
$field_tel = $_REQUEST['tel']; 

$field_privilegios2 = "";

foreach ($field_privilegios as $key => $value) {
	$field_privilegios2 .= $value.",";
}
$field_privilegios = trim($field_privilegios2,",");

 
$query_insert = 'INSERT INTO `usuarios`  VALUES (NULL,"'.$field_usuario.'","'.$field_pass.'","'.$field_nombre.'","'.$field_email.'","'.$field_avatar.'","'.$field_privilegios.'","'.$field_status.'","'.$field_tel.'")'; 
echo $query_insert; 
 if ($conn->query($query_insert) === TRUE) { 
    echo "New record created successfully"; 
 } else {
    echo "Error: " . $query_insert . "<br>" . $conn->error;
 } 

$resultado = $conn->query("SELECT * FROM `usuarios`");
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    echo " id = " . $fila['nombre'] . "\n";
}
$conn->close();
?>