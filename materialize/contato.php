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
                                <span class="card-title"><h5 class="center-align">Entre em contato com a EASY SALES</h5></span>
                                <div class="row">
                                    <div class="col s8">
                                    <iframe width="100%" height="400px" frameborder="0" scrolling="no" 
                marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068
                &amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
                                    </div>
                            </div>
                                
                                
                                <form action="" method="post">
                                    <p><br><label for="nome"><p>NOME :</p> </label>
                                        <input placeholder="Digite seu nome" type="text" name="nome" id="nome" size="20"></p>
                                    <p><label for="email"><p>E-MAIL : </p></label>
                                        <input placeholder="Digite seu email" type="email" name="email" id="email" size="30"></p>
                                    <p><label for="textarea1"><p>Comentarios</p></label>
                                    <textarea placeholder="Digite aqui seu Comentario" id="textarea1" class="materialize-textarea"></textarea></p> 
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
    </body>
</html>