

<?php

//lectura de valores

class IMC {

    function calcula_imc($peso, $estatura) {
        
        $imc = $peso / ($estatura * $estatura);

        if($imc < 18.5){
            return "Estas falto de peso";
        }elseif($imc >= 18.5 && $imc <= 24.9 ){
            return "Peso normal";
        }elseif($imc >= 25 && $imc <= 29.9 ){
            return "sobrepeso";
        }elseif($imc >= 30 && $imc <= 34.5 ){
            return "Obesidad Grado I";
        }elseif($imc >= 35 && $imc <= 39.9 ){
            return "Obesidad Grado II";
        }elseif($imc >= 40 ){
            return "Obesidad Grado III";
        }
    }
}

$peso = $_POST['peso'];
$estatura = $_POST['estatura'];


$IMC =  new IMC();

echo '<br><br><br><h1>'.$IMC->calcula_imc($peso, $estatura).'</h1>';

echo '<br><hr><br><a href="index.php">Back</a>';

?>