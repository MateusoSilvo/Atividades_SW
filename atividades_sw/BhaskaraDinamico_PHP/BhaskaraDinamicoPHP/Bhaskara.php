<?php
echo '<pre>';

echo 'ax² + bx + c = 0';

echo'<br>';

$a = $_GET["Entrada1"]; 
$b = $_GET["Entrada2"];
$c = $_GET["Entrada3"];

echo "a = $a <br>";
echo "b = $b <br>";
echo "c = $c <br>";

echo'<br>';

function delta($a, $b, $c) {

    $resultadoDelta = $b * $b - 4 * $a * $c;

    return $resultadoDelta;
}

$resultadoDaFunctionDelta = delta($a, $b, $c);

$saídaDelta = array(
                    'Delta' => "$resultadoDaFunctionDelta"
);

var_dump($saídaDelta);

if ($resultadoDaFunctionDelta < 0) {

    echo'Delta é menor que zero, portanto não possui raízes reais.';
    echo'<br>';
    echo'<br>';

}

else if ($resultadoDaFunctionDelta == 0) {

    echo'Delta é igual a zero, portanto possui apenas uma raíz real, ou duas iguais.';
    echo'<br>';
    echo'<br>';

    function x1($a, $b, $resultadoDaFunctionDelta){
        
        $resultadox1 = $b + sqrt($resultadoDaFunctionDelta) / (2 * $a);
        return $resultadox1;
    }

    $resultadoDaFunctionx1 = x1($a, $b, $resultadoDaFunctionDelta);

    function x2($a, $b, $resultadoDaFunctionDelta){

        $resultadox2 = $b - sqrt($resultadoDaFunctionDelta) / (2 * $a);
        return $resultadox2;
    }

    $resultadoDaFunctionx2 = x2($a, $b, $resultadoDaFunctionDelta);

    $saída = array(
        'x¹' => "$resultadoDaFunctionx1",
        'x²' => "$resultadoDaFunctionx2"

    );

    var_dump($saída);


}

else if($resultadoDaFunctionDelta > 0) { 
    echo'Delta é maior que zero, portanto possui duas raízes distintas reais.';
    echo'<br>';
    echo'<br>';

    function x1($a, $b, $resultadoDaFunctionDelta){

        $resultadox1 = (- $b + sqrt($resultadoDaFunctionDelta)) / (2 * $a);
        return $resultadox1;
    }

    $resultadoDaFunctionx1 = x1($a, $b, $resultadoDaFunctionDelta);

    function x2($a, $b, $resultadoDaFunctionDelta){
        
        $resultadox2 = (- $b - sqrt($resultadoDaFunctionDelta)) / (2 * $a);
        return $resultadox2;
    }

    $resultadoDaFunctionx2 = x2($a, $b, $resultadoDaFunctionDelta);

    $saída = array(
                    'x¹' => "$resultadoDaFunctionx1",
                    'x²' => "$resultadoDaFunctionx2"

    );

    var_dump($saída);

}

?>