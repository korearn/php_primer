<?php 
    $title = "Index";
    include 'includes/header.php'; 
?>

    <!-- ctrl + k + c -->
    <h1><?php $title ?></h1>
    <br/>
    <?php 
        echo 'hello PHP';
        echo '<br/>';
        echo 'Second line';
        echo '<br/>';

        //declare variable
        $name = 'Maki Sora';
        $age = 21;
        //print variable
        echo $name;
        echo '<h1>My name is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';

        echo "<h1>My name is: $name </h1>";
   ?>
   <button type="button" class="btn btn-dark">CLICK ME</button>

   <?php
        require 'includes/footer.php' 
   ?>