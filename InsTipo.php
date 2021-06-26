<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $descricao = trim($_POST['txtDescricao']);
   $especie = trim($_POST['txtEspecie']);
   $outros = trim($_POST['txtOutros']);

   if (!empty($nome)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO tipo (descricao, especie, outros) VALUES (?, ?, ?, ?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($descricao, $especie, $outros));
       Conexao::desconectar(); 
   }
   else echo "campo nome é vazio."; 
   header("location: listarTipo.php")
?>