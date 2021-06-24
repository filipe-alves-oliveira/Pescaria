<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $nome = trim($_POST['txtNome']);
   $isca = trim($_POST['txtIsca']);
   $peso = trim($_POST['txtPeso']);

   if (!empty($nome)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO peixe (nome, isca, peso) VALUES (?, ?, ?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($nome, $isca, $peso,));
       Conexao::desconectar(); 
   }
   else echo "campo nome é vazio."; 
   header("location: ListarPeixe.php")
?>

