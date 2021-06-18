<?php
echo '<pre>';

echo'<br>';

$a = $_GET["Entrada1"]; 
$b = $_GET["Entrada2"];

$aleatorios = array();

for ($i=$a; $i < $b; $i++) {
  $aleatorios[] = rand();
}

var_dump($aleatorios);

echo "<br>";

function imparpar($numero) {

    if ($numero % 2 == 0) {
      $retorno = true;
    } else {
        $retorno = false;
    }
  
    return $retorno;
  }
  
  var_dump(imparpar(0));

  echo "<br>";

  foreach ($aleatorios as $key => $value) {
    echo "O numero $key ";
     if (imparpar($value)) {
      echo "É par";
    } else {
      echo "é Impar";
    }
    echo "<br>";
  }
  


 ?>