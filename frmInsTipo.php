
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
            
    <title>Inserir Tipo</title>
</head>
<body>

<body bgcolor="add8e6"> 

<nav class="light-blue darken-4">
    <div class="nav-wrapper">
      <a href="menu.php" class="brand-logo right"><img src="imagens/img9.jpg" width="60" class="circle responsive-img"></a>
       </div>
  </nav>

    <div class="container white lighten-4 col s12">
    <div class="blue lighten-5 col s12">
            <h3>Adicionar Novo Tipo</h3>
          </div>

          <div class="row">
          <form action="insTipo.php" method="POST" id="frmInsTipo" class="col s12">
           <div class="input-field col s8">
                <label for="lblNome">Informe a Descrição: </label>
                <input type="text" class="form-control" id="txtNome" name="txtNome">
            </div>

            <br>
            <div class="input-field col s8">
               <button class="btn waves-effect waves-light green" type="submit" name="btnSalvar">
               Salvar <i class="material-icons">save</i>
               </button>

               <button class="btn waves-effect waves-light orange" type="reset" name="btnLimpar">
               Limpar <i class="material-icons">brush</i> 
               </button>

               <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar"
                onclick="JavaScript:location.href='listarTipo.php'">
               <i class="material-icons">arrow_back</i> Voltar
               </button>

            </div>
            </form>
          </div>
    </div>
</body>
</html>