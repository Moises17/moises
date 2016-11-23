<?php
    $usuario = "";
   

    session_start();
    if (isset($_SESSION['nome'])&& isset($_SESSION['senha'])) {
        $usuario = $_SESSION['nome'];
        $senha = $_SESSION['senha'];
        $nivel = $_SESSION['nivel'];
        
        
        
        
    	}

        ?>

<!Doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <title> Easy Sales</title>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
    </head>
    
    <body>
        
        
        <nav class="navbar-fixed">
            
            <div class="nav-wrapper blue darken-3">
                
                <a href="#!" class="brand-logo  "> <i class="material-icons">shopping_cart</i> <h4 class="orange-text darken-2">Easy Sales</h4></a>
                
                    
            
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><h5 class="orange-text darken-2"><?php echo $usuario ?></h5></li>
                                       <?php   
                    if (isset($_SESSION["nivel"])&& ($_SESSION['nivel'] == 2) ) {
                        
                       ?>
                            <li><a class="dropdown-button"href="aprovar.php" data-activates="dropdown1">Administrar Site<i class="material-icons right">arrow_drop_down</i></a></li>
                            <ul id="dropdown1" class="dropdown-content">
                                <li><a href="aprovar.php">Aprovar Usuarios</a></li>
                                <li><a href="#!">visualizar comentarios</a></li>                                
                            </ul>
                    <?php } 
                    
                    ?>
                    <li><a href="home.php">Home</a></li>
                    
                    <?php   
                    if (isset($_SESSION["nome"])&& isset($_SESSION['senha'])) {
                       ?>
                    
                    <li><a class="dropdown-button"href="Anuncios.php" data-activates="dropdown2">Anuncios<i class="material-icons right">arrow_drop_down</i></a></li>
                            <ul id="dropdown2" class="dropdown-content">
                                <li><a href="Anuncios.php">Anuncios</a></li>
                                <li><a href="#!">Meus anuncios</a></li>
                                <li><a href="#!">Minhas compras</a></li>
                                <li class="divider"></li>
                                <li><a href="#!">Dinheiro em caixa</a></li>
                            </ul>
                    <?php } 
                    
                    ?>
                    
                    <li><a href="Sobre.php">Sobre Nós</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="login.php">Entre</a></li>
                    
                    
                    <?php   
                    if (empty($_SESSION["nome"])&& empty($_SESSION['senha'])) {
                       ?>
                    
                    <li><a href="cadastro.php">Cadastre-se </a></li>
                    
                    <?php } 
                    
                    ?>
                    
                    
                     <?php   
                    if (isset($_SESSION["nome"])&& isset($_SESSION['senha'])) {
                       ?>
                    
                    <li><a href="atualizar_dados.php">Atualizar Dados </a></li>
                    
                    <?php } 
                    
                    ?>
                    
                    <?php   
                    if (isset($_SESSION["nome"])&& isset($_SESSION['senha'])) {
                       ?>
                    <li><a href="logout.php">Logout </a></li>
                    <?php } 
                    
                    ?>
                    
                    
                </ul>
                
                
            </div>
                  
        </nav>
                
    </body>
</html>