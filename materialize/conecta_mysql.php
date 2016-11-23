<?php
    $conexao = mysqli_connect("127.0.0.1:3308","root","","crude");

    if(mysqli_connect_errno()){
        echo "Não foi possivel conectar BD :". mysqli_connect_error();
    }
     
?>