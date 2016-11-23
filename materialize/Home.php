<!Doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <title> New Sales</title>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>   
    </head>
    
    <body>
    <?php
        include ("nav.php");
    ?>
        <div class="slider  ">
            <ul class="slides">
                <li>
                    <img src="imagens/negocios.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Negociar seus produtos nunca foi tão Facil e Rapido!!!</h3>
                        
                    </div>
                </li>
                <li>
                    <img src="imagens/imoveis.png"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Imóveis</h3>
                        
                    </div>
                </li>
                <li>
                    <img src="imagens/veiculos.jpeg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Veiculos</h3>
                        
                    </div>
                </li>
                <li>
                    <img src="imagens/Roupa.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Roupas e calçados</h3>
                        
                    </div>
                </li>
                <li>
                    <img src="imagens/luz.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Entre outros</h3>
                        <h4>Cadastre-se já, e confira todas as vantagens da EASY SALES</h4>
                        
                    </div>
                </li>
            </ul>
        </div>


        <section>
    <div class="row">
        <div class="col s12  center-align "><span class="flow-text"><h3>OQUE DESEJA FAZER ?</h3></span></div>
        
  
    </div>
            
            <article class="container center-align">
                <div class="row ">
                    <div class="col s10 m4 hoverable ">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                             
                                 
                                <!--TRATAMENTO DE ANUNCIOS, SE ESTA OU NÃO LOGADO NO SISTEMA-->
                                
                                 <?php if (isset($_SESSION["nome"])&& isset($_SESSION['senha'])) {
                                    $usuario = $_SESSION["nome"];
                                    $senha = $_SESSION['senha'];
                                    $NIVEL = $_SESSION['nivel'];
                                ?>
                                    
                                
                                 <span class="card-title"><a href="Login.php" class="orange-text darken-2" > COMPRAR </a> </span>
                                
                                 <?php } else{ ?>
                                
                                 <span class="card-title"><a href="cadastro.php" class="orange-text darken-2" > COMPRAR </a> </span>
                                
                                 <?php } ?>
                                
                                <p> O seu imovel esta muito mais facil e simples do que imagina, confira as melhores opções!!! </p>
                            </div>
                            
                            <div class="card-action "><i class="large material-icons">shopping_cart</i>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col s10 m4 hoverable">
                        <div class="card blue-grey darken-1 ">
                            <div class="card-content white-text">
                                
                            <?php if (isset($_SESSION["nome"])&& isset($_SESSION['senha'])) {
                                    $usuario = $_SESSION["nome"];
                                    $senha = $_SESSION['senha'];?>
                                
                             <span class="card-title"><a href="Login.php" class="orange-text darken-2" > VENDER </a> </span>
                                
                                <?php } else{ ?>
                                
                                <span class="card-title"><a href="cadastro.php" class="orange-text darken-2" > VENDER </a> </span>
                                <?php } ?>
                                
                                <!--TRATAMENTO DE ANUNCIOS, SE ESTA OU NÃO LOGADO NO SISTEMA ATE AQUI-->
                                
                                
                                <p> Seu automovel com ofertas tentadoras, confira os melhores anuncios!!! </p>
                            </div>
                            <div class="card-action">
                                <i class="large material-icons">shopping_basket</i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col s10 m4 hoverable">
                        <div class="card blue-grey darken-1 ">
                            <div class="card-content white-text">
                             <span class="card-title"><a href="Anuncios.php" class="orange-text darken-2" > VISUALIZAR </a> </span>
                                <p> Celulares, Som, TVs e diversos aparelhos eletronicos,  confira os melhores anuncios!!! </p>
                            </div>
                            <div class="card-action">
                                <i class="large material-icons"> visibility</i>
                                
                            </div>
                        </div>
                    </div>
                    

                    

                    

                    
                    
                </div>
            </article>
            
            
        </section>
        
        <?php
        include ("footer.php");
        ?>
      
        
        
        
        <!--Import jQuery before materialize.js--> 
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        
            <script>
                $(document).ready(function(){
                    $('.slider').slider({full_width: true});
                });
           </script>
        
         <script>
                <?php
                if(isset($_GET['acao'])){
                    $acao = $_GET['acao'];}
                    if($acao == 'cadastrado'){ ?>
                    
            Materialize.toast('Usuario CADASTRADO, Aguarde aprovação do ADMINISTRADOR!', 3000, 'rounded');
            <?php }
            ?>
             
             
            <?php
                if(isset($_GET['acao'])){
                    $acao = $_GET['acao'];}
                    if($acao == 'semAcesso'){ ?>
                    
            Materialize.toast('Aguarde aprovação do ADMINISTRADOR!', 3000, 'rounded');
            <?php }
            ?>
            
        </script>
    </body>
</html>