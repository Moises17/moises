<?php
    include "conecta_mysql.php";

$acao = $_GET['acao'];
$id = $_GET['id'];

    if($acao == "aprovar"){
        $query=mysqli_query($conexao,"UPDATE easysales SET status='1' WHERE ID='$id'");
        header('Location: aprovar.php');
    }elseif ($acao == "bloquear"){
         $query=mysqli_query($conexao,"UPDATE easysales SET status='0' WHERE ID='$id'");
        header('Location: aprovar.php');
        
    }

    if($acao == "deletar"){
        $resultado = mysqli_query($conexao,"DELETE FROM easysales WHERE id='$id'") or die ("Não foi possivel retornar a SQL: ".mysqli_error($conexao));
        if($resultado){
            header('Location: aprovar.php?acao=deletado');
            
        }
    }

    
        
  

?>