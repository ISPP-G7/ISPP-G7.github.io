<?php

$file = 'contador.txt'; // ruta del archivo de conteo

// comprobamos si el archivo existe
if (file_exists($file)) {
  // si existe, leemos el valor actual
  $count = file_get_contents($file);
  // incrementamos el valor en 1
  $count++;
  // escribimos el nuevo valor en el archivo
  file_put_contents($file, $count);
} else {
  // si el archivo no existe, lo creamos y le damos un valor inicial de 1
  $count = 1;
  file_put_contents($file, $count);
}

echo "Esta página ha sido visitada $count veces.";

?>
