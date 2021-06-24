<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $colocacao = trim($_POST['txtColocacao']);
   $pescador = trim($_POST['txtPescador']);
   $premio = trim($_POST['txtPremio']);

   if (!empty($nome)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO premiacao (colocacao, pescador, premio) VALUES (?, ?, ?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($colocacao, $pescador, $premio));
       Conexao::desconectar(); 
   }
   else echo "campo nome é vazio."; 
   header("location: ListarPremiacao.php")
?>