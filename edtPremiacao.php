<?php  //edtPescador.php
    include 'menu.php';
    include 'conexao.php';  

   // recuperar campos do formulário usando método post
   $id = trim($_POST['id']); 
   $nome = trim($_POST['txtColocacao']);
   $cidade = trim($_POST['txtPescador']);
   $estado = trim($_POST['txtPremio']);

   if (!empty($nome)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE premiacao SET colocacao=?, pescador=?, premio=?, WHERE id=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($colocacao, $pescador, $premio));
       Conexao::desconectar(); 
   }
   else echo "campo nome vazio..."; 
   header("location: ListarPremiacao.php")
?>