<?php
    $title = "Switch";
    include 'includes/header.php';
?>
    <h1><?php $title ?></h1>
    <?php
        $grade = 'A';

        switch($grade){
            case 'A':
                echo "<h2>Tu calificación es: $grade</h2>";
                echo '<h1 style="color: green">SIUUUUUUU</h1>';
                break;
            case 'B':
                echo '<h3 style="color: blue">VAS BIEN UWU</h3>';
                break;
            case 'C':
                echo '<h3 style="color: red">ECHELE GANAS MIJO UnU</h3>';
                break;
            default:
                echo '<h3 style="color: gray">VALES VERGA MIJO</h3>';        

        }
    ?>
    <?php require 'includes/footer.php' ?>