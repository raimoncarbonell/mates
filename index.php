<?php require 'mates.php'; ?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Calculadora</title>
        <style>
            input{display: block;}
        </style>
    </head>
    
    <body>
        <form method="get" action="index.php">
            
             
            <?php 
    
            if(isset ($_GET['op']))
            {
            ?>   
                <label>La operacion es : </label>
            <input type="text" name="op" value ="<?php echo $_GET['op'];?> ">
            <br>
            <?php
                
            $res =calcular(($_GET['op']));

                ?>
            <p>El resuldado :<?php echo $res; ?></p>
            <?php
            }
            else
            {
                ?>
               <label>entra la expresion matematica de suma o resta</label><br>
            <input type="text" name="op"> 
        <?php
            }
            ?>
               
           <br>
            <input type="submit" value="calcular">
            
        </form>
        
       
    </body>
</html>