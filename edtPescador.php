<?php  //edtPescador.php
   //abrir a conexão 
   include 'conexao.php';  

   // recuperar campos do formulário usando método post
   $id = trim($_POST['id']); 
   $nome = trim($_POST['txtNome']);
   $cidade = trim($_POST['txtCidade']);
   $estado = trim($_POST['txtEstado']);
   $idade = trim($_POST['txtIdade']);
   $nota = trim($_POST['txtNota']);

   if (!empty($nome) && !empty($nota)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE pescador SET nome=?, cidade=?, estado=?, idade=?, WHERE id=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($nome, $cidade, $estado, $idade, $id));
       Conexao::desconectar(); 
   }
   else echo "campo nome ou nota são vazios..."; 
   header("location: ListarPescador.php")
?>