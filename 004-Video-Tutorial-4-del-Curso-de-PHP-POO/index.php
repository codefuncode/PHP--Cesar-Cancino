<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<?php include_once 'class/Ecuacion.php';?>
	<title>Document</title>
</head>
<body>

	<?php
$instancia1 = new Ecuacion();
$instancia1->cargaValor1(5);
$instancia1->cargaValor2(5);
$instancia2 = new Ecuacion();
$instancia2->cargaValor1(5);
$instancia2->cargaValor2(5);
$x = $instancia1->suma();
echo $x;
echo '<hr/>';
$x = $instancia1->resta();
echo $x;
echo '<hr/>';
$x = $instancia1->divide();
echo $x;
echo '<hr/>';
$x = $instancia1->multiplica();
echo $x;
echo '<hr/>';
echo '<p> Segunda instancia </p>';
echo '<hr/>';
$x = $instancia2->suma();
echo $x;
echo '<hr/>';
$x = $instancia2->resta();
echo $x;
echo '<hr/>';
$x = $instancia2->divide();
echo $x;
echo '<hr/>';
$x = $instancia2->multiplica();
echo $x;
echo '<hr/>';

?>

</body>
</html>
