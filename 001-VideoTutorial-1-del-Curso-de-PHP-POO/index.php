<?php
//  S
require_once 'php/php.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>
      Document
    </title>
  </head>
  <body>

		<?php
$persona->inicializar('Carlos', 'Aleman');
echo $persona->nombre;
echo $persona->listar_nombre();
?>
  </body>
</html>
