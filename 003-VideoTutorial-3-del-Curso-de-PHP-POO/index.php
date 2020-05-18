<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <?php include_once 'class/Pagina.php'?>
    <title>
      Documento
    </title>
  </head>
  <body>
    <?php
// Instancia de la case que tenes a vez las instancias
//  de las demás cases dentro de la misma
$pagina = new Pagina('Titulo de la pagina', 'Texto del pie de pagina');

$pagina->iniciar_cuero("Uno  ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nobis reiciendis voluptates veniam quam, eveniet. Pariatur voluptate, sapiente veniam nesciunt ipsam repudiandae eligendi ducimus labore corporis libero. Omnis, veniam, optio.");

$pagina->iniciar_cuero("Dos  ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nobis reiciendis voluptates veniam quam, eveniet. Pariatur voluptate, sapiente veniam nesciunt ipsam repudiandae eligendi ducimus labore corporis libero. Omnis, veniam, optio.");

$pagina->iniciar_cuero("Tres ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nobis reiciendis voluptates veniam quam, eveniet. Pariatur voluptate, sapiente veniam nesciunt ipsam repudiandae eligendi ducimus labore corporis libero. Omnis, veniam, optio.");

$pagina->iniciar_cuero("Cuatro ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nobis reiciendis voluptates veniam quam, eveniet. Pariatur voluptate, sapiente veniam nesciunt ipsam repudiandae eligendi ducimus labore corporis libero. Omnis, veniam, optio.");

$pagina->vista();
?>
  </body>
</html>
