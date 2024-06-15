<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/paginaprincipal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Principal</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand nav-link" href="../view/paginaprincipal.php">Minas Kindness</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../view/paginaprincipal.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../view/mapa.php">Mapa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../view/causas.php">Causas</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../view/contato.php">Contato</a>
        </li>  

        <li class="nav-item">
        <form class="d-flex" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
          <input class="form-control me-2" type="text" name="parametro" placeholder="Pesquisar" aria-label="Search">
          <input class="form-control me-2" type="submit" value="Buscar">
        </form>
        </li>
      
      </ul>
      <form class="nav justify-content-end" id="nav-icons">
        <a href=""><i class="bi bi-heart"></i></a>
        <a href=""><i class="bi bi-person"></i></a>
      </form>
    </ul>
    </div>
  </div>
</nav>

<?php
require ('../model/config.php');

// Obter o parâmetro de busca
$parametro = filter_input(INPUT_GET, "parametro", FILTER_SANITIZE_SPECIAL_CHARS);

// Função para listar registros com ou sem filtro
function listarRegistros($pdo, $parametro = null) {
    if ($parametro) {
        $stmt = $pdo->prepare("SELECT * FROM ongs WHERE categoria LIKE :categoria");
        $like_parametro = '%' . $parametro . '%';
        $stmt->bindParam(':categoria', $like_parametro, PDO::PARAM_STR);
        $stmt->execute();
    } else {
        $stmt = $pdo->query("SELECT * FROM ongs");
    }
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Listar registros
$registros = listarRegistros($pdo, $parametro);

// Exibir registros filtrados
foreach ($registros as $registro) {
    echo "<div class='ong-info'>";
    echo "<div><h5>Nome: " . htmlspecialchars($registro['nome']) . "</h5></div>";
    echo "<div><strong>Categoria:</strong> " . htmlspecialchars($registro['categoria']) . "</div>";
    echo "<div><strong>Descrição:</strong> " . htmlspecialchars($registro['descricao']) . "</div>";
    echo "<div><strong>Contato:</strong> " . htmlspecialchars($registro['contato']) . "</div>";
    echo "<a href='#' class='donate-button'>Doe Agora</a>";
    echo "</div>";
}     

?>
</body>
</html>