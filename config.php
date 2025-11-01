<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = "sql309.infinityfree.com";  // host correto
$usuario = "if0_40241065";          // seu usuário MySQL
$senha = "1LjgipstBY";               // sua senha do painel
$banco = "if0_40241065_oi";          // nome do banco

try {
    $conn = new mysqli($host, $usuario, $senha, $banco);
    $conn->set_charset('utf8mb4'); // corrigido
} catch (mysqli_sql_exception $e) {
    die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
}
?>
