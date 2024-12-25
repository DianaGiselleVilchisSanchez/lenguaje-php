<html>
    <head>
        <title>Problema</title>
    </head>
    
    <body>
        <?php
        ## Mostramos numeros de los dias del 1 a la fecha actual
        $dia =date("d");
        $inicio = 1;
        while ($inicio <= $dia){
            echo $inicio."<br>";
            $inicio++;
        }
        ?>
</body>
</html>