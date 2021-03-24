<?php
    $title = "For Loop";
    include 'includes/header.php';
?>
    <h1><?php $title ?></h1>

    <?php
        for($count = 0; $count < 10; $count++){
            echo '<p>Hello World</p>';
        }
        echo '</br>';
        for($count = 0; $count < 10; $count++){
            echo "<p>The count is: $count</p>";
        }
    ?>
    <?php require 'includes/footer.php' ?>