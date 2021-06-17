<?php require 'liste_stagiaires.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <?php
    $i=0;
    foreach ($stagiaires as $value){
        //var_dump($value) ;
        echo $i;
        if ($value["sexe"]=="M"){
            echo '<a href="stagiaire.php?id='.$i.'" id"stag">Mr. '.strtoupper($value["nom"]).' '.ucfirst($value["prenom"]).'</a><br>';
        }
        else{
            echo '<a href="stagiaire.php?id='.$i.'">Mme. '.strtoupper($value["nom"]).' '.ucfirst($value["prenom"]).'</a><br>';
        }
        $i++;


    }
    ?>

</div>

</body>
</html>