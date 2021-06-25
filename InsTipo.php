<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $cidade = trim($_POST['txtDescrição']);

   if (!empty($nome)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO tipo (descricao) VALUES (?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($descricao));
       Conexao::desconectar(); 
   }
   else echo "campo nome é vazio."; 
   header("location: listarTipo.php")
?>