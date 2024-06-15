<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Empresa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastroEmpresa.css">
</head>

<body>

<section id="conteiner-main">
<form action="../controller/insertEmpresa.php" method="POST">

<article id="info-form">

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputName">Nome</label>
        <input name="nome" type="text" id="inputNome" class="form-control" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputSenha">Senha</label>
        <input name="senha" type="text" id="inputSenha" class="form-control" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputCNPJ">CNPJ</label>
        <input name="cnpj" type="text" id="inputCNPJ" class="form-control" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputEndereco">Endereço</label>
        <input name="endereco" type="text" id="inputEndereco" class="form-control" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputTelefone">Telefone</label>
        <input name="telefone" type="text" id="inputTelefone" class="form-control" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input name="email" type="email" id="inputEmail" class="form-control" required>
    </div>
</div>
<button type="submit" id="btn-submit" class="btn btn-primary">Enviar</button>

</article>
</form>
</section>

</body>
</html>