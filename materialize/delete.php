<?php

    include "conecta_mysql.php";

$email = strip_tags($_POST['email']);

    $resultado = mysqli_query($conexao,"DELETE FROM easysales WHERE email='$email'") or die ("Não foi possivel retornar a SQL: ".mysqli_error($conexao));
if($resultado){
   echo "<br> Usuario Removido com sucesso!";
}else{
    echo "<br>Erro na inserção";
}


mysqli_close($conexao);

?>