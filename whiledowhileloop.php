<?php
    $title = "Do While";
    include 'includes/header.php';
?>
    <h1><?php $title ?></h1>
    <?php 
        $grade = 0;
       //while($grade < 10){ 
       //  echo '<p>I am less than 10!</p>';
        //}
        while($grade < 10){
            echo '<p>I am less than 10!</p>';
            $grade++;
        }
        echo 'END LOOP';
    ?>

    <h1>Do-While Loop</h1>
    <?php
    $grade = 0;
        do{
            echo '<p>I am do-while loop</p>';
            $grade++;
        } while($grade < 10);
        echo 'END LOOP';
    ?>
    <?php require 'includes/footer.php' ?>