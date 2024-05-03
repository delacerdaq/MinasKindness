<?php
$nome ="";
$sobrenome = "";
$email = "";
$senha = "";
$endereco = "";
$complemento = "";
$cidade = "";
$estado = "";

echo "Inserindo dados abaixo...<br>";

require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $endereco = $_POST["endereco"];
    $complemento = $_POST["complemento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
}

function inserirRegistro($pdo, $nome, $sobrenome, $email, $senha, $endereco, $complemento, $cidade, $estado)
{
    $sql = "INSERT INTO usuarios(nome, sobrenome, email, senha, endereco, complemento, cidade, estado)
    VALUES (:nome, :sobrenome, :email, :senha, :endereco, :complemento, :cidade, :estado)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':sobrenome', $sobrenome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $stmt->bindParam(':complemento', $complemento, PDO::PARAM_STR);
    $stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
    $stmt->bindParam(':estado', $estado, PDO::PARAM_STR); 
    return $stmt->execute();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (inserirRegistro($pdo, $nome, $sobrenome, $email, $senha, $endereco, $complemento, $cidade, $estado)) {
        echo "Registro inserido com sucesso! <br> <a href='index.php'>Home</a>";
    } else {
        echo "Erro ao inserir registro";
    }
}
?>