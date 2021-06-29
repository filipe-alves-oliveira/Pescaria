<?php
include 'conexao.php';
$id = trim($_POST['id']);
$nome = trim($_POST['txtNome']);
$cidade = trim($_POST['txtCidade']);
$estado = trim($_POST['txtEstado']);
$idade = trim($_POST['txtIdade']);

$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE pescador set nome=?, cidade=?, estado=?, idade=? WHERE id=?";
$query = $pdo->prepare($sql);
$query->execute(array($nome, $cidade, $estado, $idade, $id));
Conexao::desconectar();

header("location:listarPescador.php");

?>
