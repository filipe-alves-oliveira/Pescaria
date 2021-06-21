<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $nome = trim($_POST['txtNome']);
   $cidade = trim($_POST['txtCidade']);
   $estado = trim($_POST['txtEstado']);
   $idade = trim($_POST['txtIdade']);

   if (!empty($nome)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO pescador (nome, cidade, estado, idade) VALUES (?, ?, ?, ?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($nome, $cidade, $estado, $idade));
       Conexao::desconectar(); 
   }
   else echo "campo nome é vazio."; 
   header("location: listarPescador.php")
?>