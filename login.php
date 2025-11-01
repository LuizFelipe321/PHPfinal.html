<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        $stmt = $conn->prepare("SELECT id, nome, email, senha FROM cadastro WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows === 1) {
            $usuario = $result->fetch_assoc();

            if (password_verify($senha, $usuario['senha'])) {
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                $_SESSION['usuario'] = $usuario['email'];

                if (isset($_POST['lembrar'])) {
                    setcookie('lembrar_email', $email, time() + (86400 * 30), "/");
                } else {
                    setcookie('lembrar_email', '', time() - 3600, "/");
                }

                header("Location: painel.php");
                exit();
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }

    } catch (mysqli_sql_exception $e) {
        echo "Erro ao processar o login: " . $e->getMessage();
    } finally {
        $conn->close();
    }
}
?>
