<?php
   
    function buscaSenha($email){

        //1. Cria conexão
        include "conecta_mysql.php";

        //2. Cria query
        $sql = "SELECT senha FROM easysales WHERE email='$email'";
        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

        //3. Mostra os resultados
        $senha = "";
        if($resultado){
        
            while($row = mysqli_fetch_array($resultado)){
                $senha = $row['senha'];
                              }
        } else {
            echo "nenhum usuário encontrado";   
        }

        //4. Fecha a conexão
        mysqli_close($conexao);
        
        return $senha;
        
    }

     function buscaUsuario($email){

        //1. Cria conexão
        include "conecta_mysql.php";

        //2. Cria query
        $sql = "SELECT nome FROM easysales WHERE email='$email'";
        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

        //3. Mostra os resultados
        $nome = "";
        if($resultado)
        {
            while($row = mysqli_fetch_array($resultado)){
                $nome = $row['nome'];
            }
        } else {
            echo "nenhum usuário encontrado";   
        }

        //4. Fecha a conexão
        mysqli_close($conexao);
        
        return $nome;
        
    }

   function buscaNivel($email){

        //1. Cria conexão
        include "conecta_mysql.php";

        //2. Cria query
        $sql = "SELECT nivel FROM easysales WHERE email='$email'";
        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

        //3. Mostra os resultados
        $nivel = "";
        if($resultado)
        {
            while($row = mysqli_fetch_array($resultado)){
                $nivel = $row['nivel'];
            }
        } else {
            echo "nenhum usuário encontrado";   
        }

        //4. Fecha a conexão
        mysqli_close($conexao);
        
        return $nivel;
        
    }

    
       function buscaStatus($email){

        //1. Cria conexão
        include "conecta_mysql.php";

        //2. Cria query
        $sql = "SELECT status FROM easysales WHERE email='$email'";
        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));

        //3. Mostra os resultados
        $status = "";
        if($resultado)
        {
            while($row = mysqli_fetch_array($resultado)){
                $status = $row['status'];
            }
        } else {
            echo "nenhum usuário encontrado";   
        }

        //4. Fecha a conexão
        mysqli_close($conexao);
        
        return $status;
        
    }


            
            
            
        
?>