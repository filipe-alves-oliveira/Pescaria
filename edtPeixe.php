<?php  //edtPescador.php
    include 'menu.php';
    include 'conexao.php';  

   // recuperar campos do formulário usando método post
   $id = trim($_POST['id']); 
   $nome = trim($_POST['txtNome']);
   $isca = trim($_POST['txtIsca']);
   $peso = trim($_POST['txtPeso']);

   if (!empty($nome) && !empty($nota)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE peixe SET nome=?, isca=?, peso=?, WHERE id=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($nome, $cidade, $estado, $idade, $id));
       Conexao::desconectar(); 
   }
   else echo "campo nome ou nota são vazios..."; 
   header("location: ListarPeixe.php")
?>