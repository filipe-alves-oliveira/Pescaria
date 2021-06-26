<?php 
    include 'conexao.php'; 
    $colocacao= trim($_POST['txtColocacao']); 
    $pescador = trim($_POST['txtPescador']); 
    $premio = trim($_POST['txtPremio']);

    
    if (!empty($colocacao)  && !empty($pescador) && !empty($premio) ){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO premiacao (colocacao, pescador, premio) VALUES(?, ?, ?);";
        $query = $pdo->prepare($sql); 
        $query->execute(array($colocacao, $pescador, $premio));
        Conexao::desconectar(); 
    }
    header("location:listarPremiacao.php"); 

?>