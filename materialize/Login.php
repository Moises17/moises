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
        
        
        
            
        <section>
            <article>
                <div class="row">
                    <div class="col s10 offset-s1">
                        <div class="card blue-grey darken-1 card-panel hoverable">
                            <div class="card-content white-text">
                                <span class="card-title"><h5 class="center-align">LOGIN</h5></span>
                                <form action="controle.php?acao=logar" method="post">
                                    <p><label for="email"><p>E-MAIL : </p></label>
                                        <input placeholder="Digite seu Email" type="email" name="email" id="email" size="30"></p>
                                    <p><label for="senha"><p>SENHA : </p></label>
                                        <input placeholder="Digite sua senha" type="password" name="senha" id="senha" size="30"></p>
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Entrar </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            
            <article>
                <div class="row">
                    <div class="col s10 offset-s1">
                        <div class="card blue-grey darken-1 card-panel hoverable">
                            <div class="card-content white-text">
                                <span><a href="cadastro.php"><h5 class="center-align orange-text darken-2 ">CADASTRE-SE</h5></a></span>
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
                <?php
                if(isset($_GET['acao'])){
                    $acao = $_GET['acao'];}
                    if($acao == 'erro2'){ ?>
                    
            Materialize.toast('Usuario ou senha incorreto. Digite novamente!', 3000, 'rounded');
            <?php }
            ?>
            
        </script>
    </body>
</html>