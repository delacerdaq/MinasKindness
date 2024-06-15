<?php
require("../model/config.php");

$nome = "";
$senha = "";
$CNPJ = "";
$endereco = "";
$telefone = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $CNPJ = $_POST["cnpj"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
}

function inserirRegistro($pdo, $nome, $senha, $CNPJ, $endereco, $telefone, $email)
{
    $sql = "INSERT INTO empresas(nome, senha, CNPJ, endereco, telefone, email)
    VALUES (:nome, :senha, :CNPJ, :endereco, :telefone, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    $stmt->bindParam(':CNPJ', $CNPJ, PDO::PARAM_STR);
    $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
    $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    return $stmt->execute();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (inserirRegistro($pdo, $nome, $senha, $CNPJ, $endereco, $telefone, $email)) {
        echo "Registro inserido com sucesso! <br> <a href='../view/index.php'>Home</a>";
    } else {
        echo "Erro ao inserir registro";
    }
}
?>
