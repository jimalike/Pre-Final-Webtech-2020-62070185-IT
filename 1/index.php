<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <title>1EzQuiz</title>
</head>

<body>
    <?php
    $string = file_get_contents("https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json");
    $result = json_decode($string);
    ?>

    <div class="container">
        <div class="row">
           
                
                    <?php
                    foreach ($result->tracks->items as $key) {
                        echo  '<div class="col-md-4">';
                        echo '<div class="card">';
                        echo '<img class="card-img-top" src="'.$key->album->images[0]->url.'" alt="Card image cap">';
                        echo '<div class="card-body">';
                        echo '<b>'.$key->album->name.'</b><br>';
                        echo '<p> Artists : '.$key->album->artists[0]->name.'</p>';
                        echo '<p> Release date : '.$key->album->release_date.'</p>';
                        $arr = $key->album->available_markets;
                        echo '<p> Available'.sizeof($arr).'</p>';

                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                
        </div>

    </div>

</body>

</html>