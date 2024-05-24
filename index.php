<?php
// directory del file function, richiesta una sola volta
require_once __DIR__ . "/partials/function.php";
// inizio della sessione e verifica della presenza di una sessione
session_start();
if (isset($_GET["email"])) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MAIL SUBSCRIPTION</title>
</head>

<body>
    <form action="" method="GET">
        <label for="email">inserisci la tua email</label>
        <input id="email" type="text" name="email" value="<?php isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>">
        <button type="submit">invia</button>
    </form>

    <?php echo $value; ?>

</body>

</html>