<?php

    include "conecta_mysql.php";

    $resultado = mysqli_query($conexao,"SELECT * from easysales") or die ("Não foi possivel retornar a SQL: ".mysqli_error($conexao));
if($resultado){
    while ($row = mysqli_fetch_array($resultado)){
        echo "NOME: ".$row["nome"]." - "."email: ".$row["email"]." - "."senha:".$row["senha"]." - "."cpf: ".$row["cpf"]." - "."nascimento: ".$row["nascimento"]."<br/>";
    }
}

mysqli_close($conexao);

?>