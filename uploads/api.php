    <?php
    // Encontrar errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require("calculadora.php"); 
    $obj = new Calculadora();
    $resul = $obj->calcular($_POST["operacion"],$_POST["num1"],$_POST["num2"]);
    
    header("Location: ../index.php?resultado=$resul");

?>