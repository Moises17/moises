<?php
    $startaction = "";
    $acao = "";
    

    if(isset($_GET['acao'])){
        $acao = $_GET['acao'];
        $startaction = 1;
    }
       
       //METODO DE CADASTRO
       if($startaction == 1){
        if($acao == "cadastrar"){
            $nome = $_POST['nome']; 
            $email = $_POST['email'];
            $senha =$_POST['senha'];
            $confirma =$_POST['confirmacao'];
            $cpf = $_POST['cpf'];
            $nascimento = $_POST['nascimento'];
            
            if(strlen($senha) < 6){
                    header('Location: cadastro.php?acao=senha');
                }else{
                include "create.php";
                header('Location: home.php?acao=cadastrado');
                
            }
           
        }
       }


    //METODO DE LOGAR 

if(isset($_GET['acao'])){
        $acao = $_GET['acao'];
        $startaction = 1;
    }
    
    if($startaction == 1){
    if($acao == "logar"){ 
  $email = strip_tags($_POST['email']);
  $password =sha1(strip_tags($_POST['senha']));

    include "funcoes.php";
    $password_temp = buscaSenha($email);
        
   
    if (strcmp($password, $password_temp) == 0 ){
        
        $nomeUser = buscaUsuario($email);
        $status_temp = buscaStatus($email);
        $nivel_temp = buscaNivel($email);
        
        if($status_temp == 0 ){
            header('Location: home.php?acao=semAcesso');
        }else{

        session_start();
			$_SESSION['nome'] = $nomeUser;
			$_SESSION['senha'] = $password;
            $_SESSION['nivel'] = $nivel_temp;

			if(isset($_SESSION['nome'])&& isset($_SESSION['senha'])) {

			header('Location: home.php');
            
    }else{
                header('Location: login.php?acao=erro');
            }
        }
    }else{
         header('Location: login.php?acao=erro2');
        
    }
         
          
    }
        
       
         
    }
    
   


?>