<?php
    $title = "Arrays and Printouts";
    include 'includes/header.php'; 
?>
    <h1><?php $title ?></h1>
    <?php
        //$num = 5;

        $numbers = array(1,2,3,4,5,6,7,8,9,10,20,30,40,50);

        echo $numbers[6];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);//cuenta el numero de elementos en un arreglo

        echo "<p>Array number is size: $size</p>"; //muestra la cantidad de elementos en el arreglo

        //$count vale 0 hasta que llega al valor de la cantidad de elementos en el arreglo
        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>"; //muestra los elementos de uno en uno hasta que <count> valga <size>
        }
    ?>
    
    <?php require 'includes/footer.php' ?>