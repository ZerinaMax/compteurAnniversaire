<?php
require_once('calculDate.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Anniversaire dans..</title>
</head>
<body>
    <?php
    echo "
    <span id='resultat'> 
        $name $resultat
    </span>"
    ?>
    <br>
    <form action='index.php'>
    <input type='submit' name='retour' value='retour'>
    </form>
</body>
</html>