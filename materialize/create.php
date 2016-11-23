<?php
//conectando ao BD
include "conecta_mysql.php";

$nome = strip_tags($_POST['nome']); 
$email = strip_tags($_POST['email']);
$senha = sha1(strip_tags($_POST['senha']));
$confirma = sha1(strip_tags($_POST['confirmacao']));
$cpf = strip_tags($_POST['cpf']);
$nascimento = strip_tags($_POST['nascimento']);

    if($senha == $confirma){

    $validaemail = mysqli_query($conexao,"SELECT * from easysales WHERE email='$email'");
    $contar = mysqli_num_rows($validaemail);

    if($contar == 0){

    $resultado = mysqli_query($conexao, "INSERT INTO easysales(nome,email,senha,cpf,nascimento,nivel,status)
    VALUES('".$nome."','".$email."','".$senha."','".$cpf."','".$nascimento."',1,0)") or die ("Não foi possivel executar a SQL:".mysqli_error($conexao));
if(isset($resultado)){
    echo "<br> Usuario inserido com sucesso, aguarde a nossa aprovação!";
    header('Location: home.php?acao=criado');
}else{
    echo "<br>Erro na inserção";
}
    }else{
        echo "Desculpe, mas já existe usuario cadastrado com esse email. Favor criar um novo!!!";
    }
    }else
    {
        echo "Confirmação de senha incorreta. Digite novamente!!!";
    }


mysqli_close($conexao);


?>
