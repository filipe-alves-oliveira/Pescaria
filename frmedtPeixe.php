<?php //frmedtPeixe.php
    include 'menu.php';
    include 'conexao.php'; 

    //recuperar o id pelo método GET
    $id =$_GET['id']; 

    //recuperar os dados no banco de dados
     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM peixe WHERE id=?;"; 
     $query = $pdo->prepare($sql);
     $query->execute(array($id));

     $dados = $query->fetch(PDO::FETCH_ASSOC);

     //atribui dados em variáveis
     $nome = $dados['nome'];
     $cidade = $dados['isca'];
     $estado = $dados['peso'];
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

    <title>Editar Peixe</title>
</head>
<body>
    <div class="container grey lighten-4 col s12">
        <div class="blue lighten-4 col s12">
            <h3>Alterar Dados do Peixe</h3>
        </div>
     <div class="row">
        <form action="edtPeixe.php" method="POST" id="frmedtPeixe" class="col s12">
                       
        <div class="input-field col s8">
              <h6>
                <label for="lblID"> <b>ID: </b> <?php echo $id;?>
                </label> 
                <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
              </h6>
            </div>
           
            <br>

            <div class="input-field col s8">
                <label for="lblNome">Informe o Nome do Peixe</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome"
                value="<?php echo $nome?>">
            </div>

            <div class="input-field col s5">
                <label for="lblCidade">Informe a Isca: </label>
                <input type="text" class="form-control" id="txtCidade" name="txtCidade"
                value="<?php echo $cidade?>">
            </div>

            <div class="input-field col s5">
                <label for="lblEstado">Informe o Peso (kg): </label>
                <input type="text" class="form-control" id="txtEstado" name="txtEstado"
                value="<?php echo $estado?>">
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
                onclick="JavaScript:location.href='ListarPeixe.php'">
               Voltar <i class="material-icons">arrow_back</i> 
               </button>

            </div>
        </form>   
     </div>
    </div>
</body>
</html>
