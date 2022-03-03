<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
    <input type="text" name="n1">
    <input type="submit" value="enviar"> <br>
    <?php
    if(isset($_GET["n1"])){
        $n1 =$_GET["n1"];
    echo "<table border =1>";

    for($n=0;$n<=10;$n++) {
        $respuesta=$n*$n1;
        echo "<tr>";
        echo "<td> $n1 X $n </td>";
        echo "<td>$respuesta</td>";
        echo "</tr>";
    }

    echo "</table>";
    
}
    ?>
    
</body>
</html>
