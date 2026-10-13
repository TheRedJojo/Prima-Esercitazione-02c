<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capasso While</title>
</head>
<body>
    <?php 
        $numero = $_POST["num"];
        $vApp = $numero;
        $sommaPari = 0;

         if ($numero %2 == 0){
            while($vApp > 0){
                $sommaPari += $vApp;
                $vApp -= 2;
            }
            
         } else{
            $vApp -= 1;
            while($vApp > 0){
                $sommaPari += $vApp;
                $vApp -= 2;
            }
         }
        echo "Somma dei numeri pari prima di " . $numero . " = " . $sommaPari;
    ?>
</body>
</html>