<?php
echo imprime_numeros();
function imprime_numeros(){
$texto="";
$arreglo=array("Integraciones","Falabella","IT");
for($i=1;$i<=100;$i++){
	$arreglo[3]=$i;
	$multiplo3=ceil($i%3/2);
	$multiplo5=ceil($i%5/4);
	$decimal=bindec($multiplo3.$multiplo5);
	$texto=$texto.$arreglo[$decimal]."<br>";
}
return $texto;
}
?>
