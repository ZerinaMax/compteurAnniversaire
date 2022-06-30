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
    <title>Compteur Anniversaire</title>
</head>
<body>
    <h1> Calcul d'anniversaire </h1>
    <form action='displayAnniv.php' method='POST'>
        <h3> Pourriez-vous nous indiquer votre prénom </h3> <input type='text' name='prenom'> <br> <br>
        <fieldset>
            <legend> Veuillez compléter les champs ci-après </legend> <br>
            <div> 
                <span> Jour de naissance </span>   <input type='text' name='jourAnniv'> <span> (en chiffres)</span> <br> <br>
            </div>
            <div> 
                <span> Mois de naissance </span>   <input type='text' name='moisAnniv'> <span> (en chiffres)</span> 
            </div>
            <input type='hidden' name='form_submitted' value='1' />
            <input type='submit' name='calcul' value='Calculer'>
        </fieldset>
    </form>
</body>
</html>