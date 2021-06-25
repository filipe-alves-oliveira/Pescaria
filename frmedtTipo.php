<?php //frmedtTipo.php
    include 'menu.php';
    include 'conexao.php'; 

    //recuperar o id pelo método GET
    $id =$_GET['id']; 

    //recuperar os dados no banco de dados
     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM Tipo WHERE id=?;"; 
     $query = $pdo->prepare($sql);
     $query->execute(array($id));

     $dados = $query->fetch(PDO::FETCH_ASSOC);

     //atribui dados em variáveis
     $nome = $dados['tipo'];
    Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<body bgcolor="add8e6"> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Editar Tipo</title>
</head>
<body>
    <div class="container grey lighten-4 col s12">
        <div class="blue lighten-5 col s12">
            <h3>Alterar Dados do Tipo</h3>
        </div>
     <div class="row">
        <form action="edtTipo.php" method="POST" id="frmedtTipo" class="col s12">
                       
        <div class="input-field col s8">
              <h6>
                <label for="lblID"> <b>ID: </b> <?php echo $id;?>
                </label> 
                <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
              </h6>
            </div>
           
            <br>

            <div class="input-field col s8">
                <label for="lblNome">Informe o Tipo: </label>
                <input type="text" class="form-control" id="txtNome" name="txtNome"
                value="<?php echo $nome?>">
            </div>


            <br>
            <div class="input-field col s8">
               <button class="btn waves-effect waves-light green" type="submit" name="btnGravar">
               Salvar <i class="material-icons">send</i> 
               </button>

               <button class="btn waves-effect waves-light orange" type="reset" name="btnLimpar">
               Limpar <i class="material-icons">brush</i> 
               </button>

               <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar"
                onclick="JavaScript:location.href='ListarTipo.php'">
               Voltar <i class="material-icons">arrow_back</i> 
               </button>

            </div>
        </form>   
     </div>
    </div>
</body>
</html>
