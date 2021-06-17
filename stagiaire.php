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

<Section class="container-fluid">
    <div class="container">
        <?php
            $value = $stagiaires[$_GET["id"]];
            $hob = $value["hobbies"];
            //var_dump($value) ;
            //var_dump($hobbies);
            //var_dump($value["hobbies"]);

            /*--Nom--*/
            echo '<div class="form-group">';
                echo '<label for="nom" >Nom :</label>';
                echo '<input type="text" class="form-control" id="nom" name="nom" value="'.$value["nom"].'">';
            echo '</div>';

            /*--Prenom--*/
            echo '<div class="form-group">';
                echo '<label for="prenom" >Prenom :</label>';
                echo '<input type="text" class="form-control" id="prenom" name="prenom" value="'.$value["prenom"].'">';
            echo '</div>';

            /*--DDN--*/
            echo '<div class="form-group">';
                echo '<label for="ddn" >DDN :</label>';
                $date = explode('/', $value["ddn"]);
                $month = $date[0];
                $day   = $date[1];
                $year  = $date[2];
                echo '<div class="input-group mt-3 mb-3">';
                    echo '<input type="text" class="form-control" placeholder="Jour" value="'.$day.'"  id="ddn" name="ddn">';
                    echo '<div class="form-group">';
                        echo '<select name="" id="" class="form-control">';
                            echo '<option value="" >Janvier</option>';
                            echo '<option value="" >Fevrier</option>';
                            echo '<option value="" >Mars</option>';
                            echo '<option value="" >Avril</option>';
                            echo '<option value="" >Mai</option>';
                            echo '<option value="" >Juin</option>';
                            echo '<option value="" >Juillet</option>';
                            echo '<option value="" >Aout</option>';
                            echo '<option value="" >Septembre</option>';
                            echo '<option value="" >Octobre</option>';
                            echo '<option value="" >Novembre</option>';
                            echo '<option value="" >Decembre</option>';
                        echo '</select>';
                    echo '</div>';
                    echo '<input type="text" class="form-control" placeholder="Annee" value="'.$year.'"  id="ddn" name="ddn">';
                echo '</div>';
            echo '</div>';

            /*--Sexe--*/
            echo '<div class="form-group">';
                echo '<label for="sexe" >Sexe :</label>';
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
            echo '</div>';

            /*--Enfant--*/
            echo '<div class="form-group">';
                echo '<label for="enfants" >Enfant :</label>';
                echo '<input type="text" class="form-control" id="enfants" name="enfants" value="'.$value["enfants"].'">';

            echo '</div>';

            /*--Hobbie--*/
            foreach ($hobbies as $valueHob){
                //var_dump($valueHob) ;
                echo '<div class="form-check">';
                    echo '<label class="form-check-label">';
                        echo '<input type="checkbox" class="form-check-input" value="">'.$valueHob.'';
                        foreach ($hob as $valhob){
                            if ($valueHob==$hobbies[$valhob]){
                                //echo $hobbies[$valhob];
                                echo '<input type="checkbox" class="form-check-input" value="" checked>';
                            }
                        }
                    echo '</label>';
                echo '</div>';
            }
        ?>
    </div>
</Section>

</body>
</html>