<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FUNZIONE COLORE</title>
    </head>
    <body>
        <?php

            function scegliColore ($lettera) {
                switch ($lettera) {
                    case "r":
                        return "red";
                    case "y":
                        return "yellow";
                    case "b":
                        return "blue";
                    default:
                        return "black";
                }
            }

            $colore1 = scegliColore("b");
            $colore2 = scegliColore("r");

            echo "<p style='color: $colore1'>Questo paragrafo ha la proprietà color con valore $colore1</p>";
            echo "<p style='color: $colore2'>Questo paragrafo ha la proprietà color con valore $colore2</p>";
            
        ?>
        
    </body>
</html>