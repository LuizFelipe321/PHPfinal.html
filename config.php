<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $servername = "sql309.byetcluster.com";  
$username = "if0_40241065";  
$password = "1LjgipstBY";
$dbname = "if0_40241065_oi";
    
    try {
        $conn = new mysqli($host, $usuario, $senha, $banco);    
        $conn->set_charset('utfm8mb4');
    } catch (mysqli_sql_exception $e) {
      die('Erro ao conectar ao banco de dados.'. $e ->getMessage());
    }
    
?>