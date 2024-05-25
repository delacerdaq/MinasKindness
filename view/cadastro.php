<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>

<body>
    
<section id="conteiner-main">
<form action="insert.php" method="POST">

    <article id="info-form">

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName">Nome</label>
            <input name="nome" type="text" id="inputName" class="form-control" placeholder="John" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputSurname">Sobrenome</label>
            <input name="sobrenome" type="text" class="form-control" id="inputSurname" placeholder="Doe" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="doejohnn@email.com" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input name="senha" type="password" class="form-control" id="inputPassword4" placeholder="123@abc" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Endereço</label>
        <input name="endereco" type="text" class="form-control" id="inputAddress" placeholder="Av Vinicius de Morais, 25" required>
    </div>
    <div class="form-group">
        <label for="inputAddress2">Complemento</label>
        <input name="complemento" type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, casa, sítio...">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input name="cidade" type="text" class="form-control" id="inputCity" placeholder="Belo Horizonte" required>
        </div>

        <div class="form-group col-md-4">
            <label for="inputState">Estado</label>
            <select name="estado" id="inputState" class="form-control" required>
                <option selected hidden>Escolha...</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
        </div>
    </div>
    <button type="submit" id="btn-submit" class="btn btn-primary">Enviar</button>

    </article>

</form>

</section>

</body>
</html>