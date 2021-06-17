<?php require 'liste_stagiaires.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div>
    <?php
    $value = $stagiaires[$_GET["id"]];
    var_dump($value) ;
    if ($value["sexe"]=="M"){
        echo '<p>Mr. '.strtoupper($value["nom"]).' '.ucfirst($value["prenom"]).'</p>';
    }
    else{
        echo '<p>Mme. '.strtoupper($value["nom"]).' '.ucfirst($value["prenom"]).'</p>';
    }
    echo '<input type="text" class="form-control" id="nom" name="nom" value="'.$value["nom"].'">';
    echo '<input type="text" class="form-control" id="prenom" name="prenom" value="'.$value["prenom"].'">';
    echo '<input type="text" class="form-control" id="ddn" name="ddn" value="'.$value["ddn"].'">';

    echo '<div class="input-group mt-3 mb-3">';
        echo '<input type="text" class="form-control" placeholder="Jour">';
        echo '<div class="input-group-prepend">';
            echo '<button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Mois</button>';
            echo '<div class="dropdown-menu">';
                echo '<a class="dropdown-item" href="#">Janvier</a>';
                echo '<a class="dropdown-item" href="#">Fevrier</a>';
                echo '<a class="dropdown-item" href="#">Mars</a>';
            echo '</div>';
        echo '</div>';
        echo '<input type="text" class="form-control" placeholder="Annee">';
    echo '</div>';

    echo '<div class="form-check">';
      echo '<label class="form-check-label">';
        if ($value["sexe"]=='M'){
            echo '<input type="radio" class="form-check-input" name="optradio" checked>Mr';
        }
        else{
            echo '<input type="radio" class="form-check-input" name="optradio" >Mr';
        }
      echo '</label>';
    echo '</div>';
    echo '<div class="form-check">';
        echo '<label class="form-check-label">';
        if ($value["sexe"]=='F'){
            echo '<input type="radio" class="form-check-input" name="optradio" checked>Mme';
        }
        else{
            echo '<input type="radio" class="form-check-input" name="optradio" >Mme';
        }

        echo '</label>';
    echo '</div>';
    echo '<input type="text" class="form-control" id="ddn" name="ddn" value="'.$value["enfants"].'">';


    ?>
</div>

</body>
</html>