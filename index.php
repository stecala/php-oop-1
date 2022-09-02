<?php
    require_once './movieClass.php';

    $firstMovie = new Movie('Inception' , 'Azione' , 2.28);
    $secondMovie = new Movie('Nightmare Before Christmas','Animazione', 1.16);
    $movieList = [$firstMovie , $secondMovie];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Lista film
    </h1>
    <ul>
        <?php foreach($movieList as $movie){?>
        <li>
            <?php 
                echo $movie->getTitle();
            ?>
            <ol>
                <li>
                    <?php echo 'Genere: '. $movie->getGenre() ?>
                </li>
                <li>
                    <?php echo 'Durata: '. $movie->getLength().'H' ?>
                </li>
            </ol>
        </li>
        <?php }?>
    </ul>
    
</body>
</html>