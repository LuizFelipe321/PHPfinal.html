<?php
    function somar($a, $b) {
        return $a + $b;
    }
    function subtrair($a, $b) {
        return $a - $b;
    }
    function multiplicar($a, $b) {
        return $a * $b;
    }
    function dividir($a, $b) {
        if ($b == 0) {

            throw new Exception("Não é possível realizar uma divisão por zero.");
           
        }
        return $a / $b;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
        $resultado = '';

        try{

        switch ($operacao) {
            case 'somar':
                $resultado = somar($num1, $num2);
                break;
            case 'subtrair':
                $resultado = subtrair($num1, $num2);
                break;
            case 'multiplicar':
                $resultado = multiplicar($num1, $num2);
                break;
            case 'dividir':
                $resultado = dividir($num1, $num2);
                break;
            default:
                $resultado = "Operação inválida.";
        }
        echo "<p>Resultado é: $resultado </p>";
    }catch (Exception $e){
        echo "Erro ao calcular: " . $e->getMessage();
    }
    }

?>
