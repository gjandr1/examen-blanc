<?php require 'liste_stagiaires.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <ul>


    <?php
    $i=0;
    foreach ($stagiaires as $value){
        if ($value["sexe"]=="M"){
            echo '<li><a href="stagiaire.php?id='.$i.'" id"stag">Mr. '.strtoupper($value["nom"]).' '.ucfirst(strtolower($value["prenom"])).'</a></li>';
        }
        else{
            echo '<li><a href="stagiaire.php?id='.$i.'">Mme. '.strtoupper($value["nom"]).' '.ucfirst(strtolower($value["prenom"])).'</a></li>';
        }
        $i++;
    }
    ?>
    </ul>
</div>

</body>
</html>