<?php
$id = trim($_GET['id']);

//recuperar os dados no banco de dados
include 'conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM premiacao WHERE id=?;"; //o ? indica uma argumento para o sql
$query = $pdo->prepare($sql);
$query->execute(array($id)); // o array($id) é um parâmetro passado para o argumento do SQL. 

$premiacao = $query->fetch(PDO::FETCH_ASSOC);
Conexao::desconectar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Remover Premiação</title>
</head>

<body>

    <body bgcolor="add8e6">

        <nav class="light-blue darken-4">
            <div class="nav-wrapper">
                <a href="menu.php" class="brand-logo right"><img src="imagens/img9.jpg" width="60" class="circle responsive-img"></a>
            </div>
        </nav>

        <div class="container grey lighten-4 col s12">
            <div class="blue lighten-5 col s12">
                <h3>Remover Premiação</h3>
            </div>
            <form action="rmvPremiacao.php" method="POST" id='frmRmvPremiacao' class="col s12">
                <div class="row">
                    <div class="col s10">
                        <label for="lblId">
                            <h4>
                                <blockquote>ID: <?php echo $id ?></blockquote>
                            </h4>
                        </label>
                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                        <label for="lblColocacao">
                            <H4>COLOCAÇÃO: <?php echo $premiacao['colocacao']; ?></H4>
                        </label>
                        <label for="lblPescador">
                            <H4>PESCADOR: <?php echo $premiacao['pescador']; ?></H4>
                        </label>
                        <label for="lblPremio">
                            <H4>PRÊMIO: <?php echo $premiacao['premio']; ?></H4>
                        </label>
                    </div>
                </div>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light red" type="submit" name="btnRemover">
                        Remover <i class="material-icons">delete</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar" onclick="JavaScript:location.href='listarPremiacao.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>
                <br />
            </form>
    </body>

</html>