<html lang="es">
  <head> 
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Resultados de la Evaluación</title>
  </head>
  <body>

  <?php
    // Recoger datos del formulario
    $asignatura=$_POST['asignatura'];

    $pregunta1=$_POST['pregunta1'];

    $pregunta2=$_POST['pregunta2'];

    $pregunta3=$_POST['pregunta3'];

    $pregunta4=$_POST['pregunta4'];

    $pregunta5=$_POST['pregunta5'];

    $pregunta6=$_POST['pregunta6'];

    $pregunta7=$_POST['pregunta7'];

    $pregunta8=$_POST['pregunta8'];

    $pregunta9=$_POST['pregunta9'];

    $pregunta10=$_POST['pregunta10'];

    // Crear un array con las valoraciones
    $preguntas=[$pregunta1,$pregunta2,$pregunta3,$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10];

    echo "<h2>Resultados de la Evaluación para la asignatura: $asignatura</h2>";
    echo "<h3>Resumen de las valoraciones:</h3>";
    
    echo "<ul>";

    // Recorrer el array en un bucle for y calcular la media
    $suma=0;
    for ($i=0; $i<=9; $i++){
      echo "Pregunta " . ($i+1) . ": " . $preguntas[$i] . "." . "<br><br>";
      $suma=$suma+$preguntas[$i];
    }
    
    //$sumapreg = $pregunta1 + $pregunta2 + $pregunta3 + $pregunta4 + $pregunta5 + $pregunta6 + $pregunta7 + $pregunta8 + $pregunta9 + $pregunta10;

    //$media = $sumapreg / 10;
    
    echo "</ul>";

    // Calcular la media e imprimirla
    
    echo "La media de las valoraciones es: " . $suma/10;

    
    // Imprimir la hora
    
    $fecha = date('d-m-Y');
    echo "<br><br>";
    echo "La fecha de hoy es: $fecha";
 
  ?>
  </body>
</html>
