<?php 
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        echo "<script>window.location.href = 'index.php'</script>";
    }
    
    $nome = $_POST['nome'];
    $segmento = $_POST['segmento'];
    $sobreProjeto = $_POST['projeto'];
    $id = $_GET['id'];
    
    include "conexao.php";
    $stmt = $db->prepare('UPDATE projetos SET nome = :nome, segmento = :segmento, projeto = :sobreProjeto WHERE id = :id');
    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':segmento',$segmento);
    $stmt->bindParam(':sobreProjeto',$sobreProjeto);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location:index.php");
    
?>