<?php 
/*****************************
 	Developer:ennima1
 	Agency:Miru Interactive 
******************************/

require('connect.php'); 
$field_titulo = $_REQUEST['titulo']; 
$field_introduccion = $_REQUEST['introduccion']; 
$field_autor = $_REQUEST['autor']; 
$field_fecha = $_REQUEST['fecha']; 
$field_cuerpo = $_REQUEST['cuerpo']; 
$field_status = $_REQUEST['status']; 

 
$query_insert = 'INSERT INTO `articulos`  VALUES (NULL, "'.$field_titulo.'","'.$field_introduccion.'","'.$field_autor.'","'.$field_fecha.'",\''.$field_cuerpo.'\',"'.$field_status.'")'; 
echo $query_insert; 
 if ($conn->query($query_insert) === TRUE) { 
    echo "New record created successfully"; 
 } else {
    echo "Error: " . $query_insert . "<br>" . $conn->error;
 } 
$conn->close();
?>