<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Page</title>
</head>
<body style=" background-color: blue;
            color: white; " >
    <?php include("header.php")?>
    <main >
        <h1>Bienvenue</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Quidem provident delectus ea, dolorum cupiditate corrupti
            a sed molestiae eaque porro deserunt reiciendis explicabo vel dolore magnam quae aperiam ex officiis!</p>
            <?php 
                $info ="h2";

                echo "<".$info."> sous titre </".$info.">";
            ?>
    </main>
    <?php include("footer.php")?> 
    <!-- ////////////////////////////////////////// -->
     <!-- Exo1 -->
    <h3> Reponse Exo1</h3>
      <?php
        for ($i= 0;$i<=25 ;$i++) 
        {
            echo $i. "<br>" ;
        }
        ?>
          <!-- ////////////////////////////////////////// -->
     <!-- Exo2 -->
     <h3> Reponse Exo2</h3>
     <?php
        $i= 25;
        echo "l'ordre décroissant les 25 premiers entiers:<br> ";
        while ($i>=1 ) 
        {
            echo $i . "<br>" ;
            $i--;

        }
        echo"fin !";
        ?>
        <!-- ////////////////////////////////////////// -->
     <!-- Exo3 -->
     <h3> Reponse Exo3</h3>
     <?php
        
        $y = 25;
        for ($y = 1; $y <= 25; $y++){
            for( $x=1; $x <= $y;$x++){
                echo $x ;
            }
            
         
            echo"<br>";

        }

     ?>
      <!-- ////////////////////////////////////////// -->
     <!-- Exo4 -->
     <h3> Reponse Exo4</h3>
     <?php
    $somme = 0;
    
    // Ajouter les nombres de 1 à 30
    for ( $i = 1; $i <= 30; $i++) {
        $somme += $i;
    }

    echo "La somme totale des nombres de 1 à 30 est : $somme";
?>
 <!-- ////////////////////////////////////////// -->
     <!-- Exo5 -->
     <h3> Reponse Exo5</h3>
     <?php
     $nombre=5;
function EstPair($nombre) {
    if ($nombre % 2 == 0) {
       echo"le numbre". $nombre . "est pair"; 
    } else {
       echo" nombre " . $nombre . "est impai";
    }
    
}
EstPair($nombre);

?>
<!-- ////////////////////////////////////////// -->
     <!-- Exo6 -->
     <h3> Reponse Exo6</h3>
     <?php
function EstPair2($nombre) {
    if ($nombre % 2 == 0) {
       return true ;
    } else {
        return false;
    }
}
for($i=1; $i <=20 ; $i++){

 if(EstPair2($i)){
 echo$i;

 };
}


?>
<!-- ////////////////////////////////////////// -->
     <!-- Exo7 -->
     <h3> Reponse Exo7</h3>
<?php

$c=12;
$b=11;
function Pythagore($c, $b) {
    $a = sqrt(pow($c, 2) + pow($b, 2));
    return $a;
}
$a = Pythagore($c, $b); 
echo "L'hypoténuse du triangle avec les côtés". $c ."et". $b." est :" .$a."";


?>
<!-- ////////////////////////////////////////// -->
     <!-- Exo8 -->
     <h3> Reponse Exo8</h3>
<?php



 $h=14;
 if ($h <= 12) {
    echo "Le Matin";
} elseif ($h > 12 && $h <= 18) {
    echo "L'après-midi";
} else {
    echo "Le Soir";
}

?>

<!-- ////////////////////////////////////////// -->
     <!-- Exo9 -->
     <h3> Reponse Exo9</h3>
<?php
$n=10;


    if(EstPair($n)){
    echo$i;
   
    };
   
?>
<!-- ////////////////////////////////////////// -->
     <!-- Exo10 -->
     <h3> Reponse Exo 10</h3>

    <?php
for ($x = 1; $x <= 100; $x++) {
    if ($x % 3 == 0 && $x % 5 == 0) {
        echo "foobar<br>";
    } elseif ($x % 3 == 0) {
        echo "foo<br>";
    } elseif ($x % 5 == 0) {
        echo "bar<br>";
    } else {
        echo $x . "<br>"; 
    }
}
?>
<!-- ////////////////////////////////////////// -->
     <!-- Exo11 -->
     <h3> Reponse Exo 11</h3>

    <?php


    ?>

</body>
</html>
