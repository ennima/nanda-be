<?php 
/*****************************
 	Developer:ennima1
 	Agency:Miru Interactive 
******************************/

require('connect.php'); 

$field_privilegios = $_REQUEST['privilegios']; 

//print_r($field_privilegios);

$field_privilegios2 = "";

foreach ($field_privilegios as $key => $value) {
	$field_privilegios2 .= $value.",";
}
$field_privilegios = trim($field_privilegios2,",");

echo $field_privilegios;
?>