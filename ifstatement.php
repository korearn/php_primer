<?php
    $title = "If - Else";
    include 'includes/header.php';
?>
    <h1><?php $title ?></h1>
    <h3 style="color: red"></h3>
    <?php
        echo '<h2>If Statement</h2>';

        $grade = 70;

        if($grade >= 50){
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }

        $grade = 'A';

        if($grade == 'A'){
            echo '<h3 style="color: green">YOU ARE A CRACK</h3>';
        }
        elseif($grade == 'B'){
            echo '<h3 style="color: blue">YOU DID IT GREAT</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED MASTER</h3>';
        }
    ?>
    <?php require 'includes/footer.php' ?>