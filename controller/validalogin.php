<?php
// Inicie a sessão para manter o usuário autenticado
session_start();
require("config.php");

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email= $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL usando parâmetros para evitar SQL injection
    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $_SESSION['email'] = $email;
        header('Location: paginaprincipal.php'); 
        exit();
    } else {
        echo "Login ou senha inválidos!";
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
