<?php
    function result($firstNumber,$secondNumber,$age) : string 
    {
        return "Bonjour $firstNumber $secondNumber, tu as $age ans.";
    }?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4.6</title>
</head>
<body>
    <h1>Exercice 6 Partie 4 : Les fonctions PHP</h1>
    <p><?=result("Bilbo","Baggins",111);?></p>  
</body>
</html>