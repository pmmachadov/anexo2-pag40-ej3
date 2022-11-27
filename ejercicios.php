<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>anexo2-pag40-ej3</title>
</head>
<body>
    <h2>DESGLOSE DE MONEDAS</h2>
    <?php require_once './funlib.php'; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); // The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script. So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form.
    "funlib.php" ?>">
    <fieldset>
        <label for="cantidad">Cantidad a desglosar:</label>
        <input type="text" name="cantidad" id="cantidad">
        <input type="submit" value="Ejecutar desglose">
        </fieldset>
    </form>
    
</body>
</html>