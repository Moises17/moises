<?php

    include "conecta_mysql.php";
?>

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
                                <span class="card-title"><h5 class="center-align">CONCEDER ACESSOS </h5></span>

                               <table>
                                   <tr>
                                       <th> NOME </th>
                                       <th> STATUS</th>
                                       <th> ACÃO</th>
                                   </tr>
                                   <?php
                                        include "conecta_mysql.php";
                                        $buscaNivel =0;
                                        $buscaNivel = mysqli_query($conexao,"SELECT * FROM easysales WHERE nivel='1'");
                                            if(mysqli_num_rows($buscaNivel) == 0){
                                                echo "Nenhum usuario encontrado";
                                            }else{
                                            while($linha = mysqli_fetch_array($buscaNivel)){       
                                    ?>
                                   <tr>
                                       <td><?php echo $linha["nome"]; ?></td>
                                       <td><?php echo $linha["status"]; ?></td>
                                       <td><?php $id=$linha['id']; if($linha["status"] == 0){ echo "<a href='controleAdmin.php?acao=aprovar&amp;id=$id'  > APROVAR";}else{ echo "<a href='controleAdmin.php?acao=bloquear&amp;id=$id'> BLOQUEAR ";} ?></td>
                                   </tr>
                                   <?php
                                            }} 
                                   ?>
                                </table>
                                  
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