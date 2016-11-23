
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
                                <span class="card-title"><h5 class="center-align">CADASTRE-SE</h5></span>
                                <form action="controle.php?acao=cadastrar" method="post">
                                    <p><br><label for="nome"><p>NOME :</p> </label>
                                        <input placeholder="Nome completo" type="text" name="nome" required id="nome" size="20" required></p>
                                    <p><label for="email"><p>E-MAIL : </p></label>
                                        <input placeholder="Crie um email" type="email" name="email" required id="email" size="30" required></p>
                                    <p><label for="senha"><p>SENHA : </p></label>
                                        <input placeholder="Crie uma senha" type="password" name="senha" required id="senha" size="30" required></p>
                                    <p><label for="confirmacao"><p>CONFIRME SENHA : </p></label>
                                        <input placeholder="Confirme sua senha" type="password" name="confirmacao" required id="confirmacao" size="30" required></p>    
                                    <p><label for="cpf"><p>CPF : </p></label>
                                        <input placeholder="Digite seu CPF " type="text" name="cpf" required id="cpf" size="11" required></p>                                    
                                    <p><label for="dtnascimento"><p>DATA DE NASCIMENTO</p></label>
                                        <input placeholder="Selecione a data do seu Nascimento" type="date" class="datepicker" name="nascimento" id="nascimento" required></p>
                                    
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar </button>
                                </form>
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
            $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
        </script>
        
        <script>
                <?php
                if(isset($_GET['acao'])){
                    $acao = $_GET['acao'];}
                    if($acao == 'senha'){ ?>
                    
            Materialize.toast('A senha deve ser maior que 6 caracteres!', 3000, 'rounded');
            <?php }
            ?>
            
        </script>
    </body>
</html>