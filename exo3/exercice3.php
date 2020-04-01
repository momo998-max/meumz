
<html>
    <head>
        <?php
            include "fonction_exo3[1].php";
        ?>
        <?php
        
            $formvalide=false;
            $nombre="";
        
            $msg="";
            $result="";
            $errors="";
            $mots="";
                if(isset($_POST['envoyer']))
                {
                    if(!empty($_POST['nombre'])){
                        if(!is_number($_POST['nombre']))
                        {
                            $msg= "veuillez saisir un nombre entier positif";
                        }
                        else
                        {   
                            $nombre=$_POST['nombre'];

                                for ($i=1; $i <= $nombre; $i++) 
                               {
                                
                                 
                                //Recuperation du Mot
                                    if(!empty($_POST['nombre'.$i])){
                                        $mot=$_POST['nombre'.$i];
                                        var_dump($mot) ;
                                    } 
                                   
                               }

                          
                            
                            
                            $formvalide=true;
                        }
                  }else{
                          $msg= "veuillez saisir un nombre ";
                  }

                }
            

                if($msg!=""){
                    echo $msg;
                }
        ?>
        <meta charset="utf-8" />
        <title>Exo3</title>
    </head>
    <body>



            <h1>Exo3</h1>

            <form action="exercice3.php" method ="POST">
                <label form="num1">Ecrivez le texte :</label><br>
                <input name="nombre" type="text" value="<?php echo $nombre;?>"/><br>
                <?php
                    if($formvalide)
                    {
                        for ($i=1; $i <= $nombre; $i++) 
                        { 
                ?>
                       <input type="text" name="nombre<?php echo $i;?>" value=""> <br>
                       
                <?php  
                        }
                    }
                ?>
                <input type="submit" style="background-color:red" name="envoyer" value="envoyer" />
            </form>


    <?php
    ?>
       <style type="text/css"
         body{
            position: relative;
			left: 10%;
			width: 80%;	
			text-align:center;
         }

    </body>
</html>
