<?php

$cantidad = 0;
$monedas = array(500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01); // Array of coins and bills.
$monedasDesglose = array(); // Array to store the number of coins and bills.
$monedasDesglose[500] = 0; // Initialize the array to 0.
$monedasDesglose[200] = 0;
$monedasDesglose[100] = 0;
$monedasDesglose[50] = 0;
$monedasDesglose[20] = 0;
$monedasDesglose[10] = 0;
$monedasDesglose[5] = 0;
$monedasDesglose[2] = 0;
$monedasDesglose[1] = 0;
$monedasDesglose[0.5] = 0;
$monedasDesglose[0.2] = 0;
$monedasDesglose[0.1] = 0;
$monedasDesglose[0.05] = 0;
$monedasDesglose[0.02] = 0;
$monedasDesglose[0.01] = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") // Check if the form was submitted.
{
if (isset($_POST['cantidad'])) {
    $cantidad = $_POST['cantidad'];
    if (is_numeric($cantidad) && $cantidad > 0) {
        foreach ($monedas as $moneda) {
            while ($cantidad >= $moneda) {
                $cantidad -= $moneda;
                $monedasDesglose[$moneda]++;
            }
        }
    }

    if ($cantidad > 0) {
        echo "No se puede desglosar la cantidad introducida.";
    } else {
        echo "<table border='1'>";
        echo "<tr><th>Moneda</th><th>Cantidad</th></tr>";
        foreach ($monedasDesglose as $moneda => $cantidad) {
            if ($cantidad > 0) {
                echo "<tr><td>$moneda</td><td>$cantidad</td></tr>";
            }
        }
        echo "</table>";
    }
}
}

?>