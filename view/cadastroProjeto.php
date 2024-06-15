<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Projeto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastroProjeto.css">
</head>

<body>

<section id="conteiner-main">
<form action="../controller/insertProjeto.php" method="POST">

<article id="info-form">

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputCategoria">Categoria</label>
        <input name="categoria" type="text" id="inputCategoria" class="form-control" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputNome">Nome</label>
        <input name="nome" type="text" id="inputNome" class="form-control" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputDescricao">Descrição</label>
        <input name="descricao" type="text" id="inputDescricao" class="form-control" required>
    </div>

    <div class="form-group col-md-6">
        <label for="inputContato">Contato</label>
        <input name="contato" type="text" id="inputContato" class="form-control" required>
    </div>
</div>
<button type="submit" id="btn-submit" class="btn btn-primary">Enviar</button>

</article>
</form>
</section>

</body>
</html>