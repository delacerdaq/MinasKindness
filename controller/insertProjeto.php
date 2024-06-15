<?php
require("../model/config.php");

$nome = "";
$categoria = "";
$descricao = "";
$contato = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $descricao = $_POST["descricao"];
    $contato = $_POST["contato"];
}

function inserirRegistro($pdo, $nome, $categoria, $descricao, $contato)
{
    $sql = "INSERT INTO ongs(nome, categoria, descricao, contato)
    VALUES (:nome, :categoria, :descricao, :contato)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR);
    $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
    $stmt->bindParam(':contato', $contato, PDO::PARAM_STR);
    return $stmt->execute();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (inserirRegistro($pdo, $nome, $categoria, $descricao, $contato)) {
        echo "Registro inserido com sucesso! <br> <a href='../view/paginaprincipal.php'>Home</a>";
    } else {
        echo "Erro ao inserir registro";
    }
}
?>
