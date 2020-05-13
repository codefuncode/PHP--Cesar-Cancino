<?php
require_once 'php/class.php';
require_once 'php/__construct.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Document</title>
</head>
<body>
<?php
// ==============================================================
//  Código para el fichero  php/class.php
$pagina_posision = new Pagina();

$pagina_posision->iniciar('Titulo de la primera instancia ', 'r');

$pagina_posision->imprimir();

// ==============================================================
?>
<!-- ======================================================== -->
<?php
// ==============================================================
//  Código para el fichero  php/__construct.php

$ejemplo_construct = new EscribeTitulo('nuevo tirulo constructor', 'r');

$ejemplo_construct->imprime();

// ==============================================================
?>

</body>
</html>
