<?php
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*
*/
// on inclut la méthode de dialogue avec la BD
// code concernant l'appel de la requête SQL
    require_once '../modele/modele.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Liste des adhérents</title>
</head>
<body>
    <?php
    if (isset($msgErreur)) {
    echo "Erreur : $msgErreur";
    }
    ?>
    <h1>Liste des adhérents</h1>
    <ul>
    <?php
    $nbadherents=0;
    // Itération sur les résultats de la requête SQL
    foreach ($mesAdherents as $ligne) {
    $id = $ligne['id'];
    $customerid = $ligne['customer_id'];
    $user = $ligne['username'];
    $mdp = $ligne['password'];
    echo "<li>$id $customerid $user $mdp</li>";
    $nbadherents++;
    }
    ?>
    </ul>
    <?php echo "Total : $nbadherents adhérent(s)"; ?>
</body>
</html>