<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $b = $_POST["base"];
        $h = $_POST["altezza"];

        $perimetro = ($b * 2) + ($h *2);
        $area = $b*$h;
        $diag = round(sqrt(pow($b, 2) + pow($h, 2)), 2);


        echo "<h1>";
            echo "perimetro = ";
            echo $perimetro;
        echo "</h1>";

        echo "<br>";
        
        echo "<h1>";
            echo "area = ";
            echo $area;
        echo "</h1>";

        echo "<br>";

        echo "<h1>";
            echo "Diagonale Principale = ";
            echo $diag;
        echo "</h1>";
    ?>
</body>
</html>