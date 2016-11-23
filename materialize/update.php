<?php

    include "conecta_mysql.php";

$nome = strip_tags($_POST['nome']); 
$email = strip_tags($_POST['email']);
$senha = sha1(strip_tags($_POST['senha']));
$confirma = sha1(strip_tags($_POST['confirmacao']));
$cpf = strip_tags($_POST['cpf']);
$nascimento = strip_tags($_POST['nascimento']);

    $resultado = mysqli_query($conexao, "UPDATE easysales SET nome='$nome' WHERE email='$email', senha='$senha', cpf='$cpf', nascimento='$nascimento'") or die  ("Não foi possivel executar a SQL:".mysqli_error($conexao));
if($resultado == TRUE){
    echo "<br> Usuario alterado com sucesso!";
}else{
    echo "<br>Erro na inserção";
}

mysqli_close($conexao);

?>