<?php
    $title = "Strings";
    include 'includes/header.php';
?>
    <h1><?php $title ?></h1>
        <?php
        //concatenacion de Strings
        $word1 = "hello";
        $word2 = "world";
        $name = "el pepe";
        echo $word1 ." :) ".$word2;

        echo '<br/>';
        echo '<hr/>';
        //transformacion de strings
        echo 'Uppercase first letter: '.ucfirst($name).'<br/>';
        echo 'Uppercase first letter of ecach word: '.ucwords($name).'<br/>';
        echo 'Upper case: '.strtoupper($name).'<br/>';
        echo 'Lower case: '.strtolower('MAYUSCULAS').'<br/>';
        echo '<hr/>';
        echo 'Repeat String: '.str_repeat('a',10).'<br/>';
        echo 'repeat String - Nested Function: '.strtoupper(str_repeat('a',10)).'<br/>';
        '<br/>';
        echo 'Get a Substring: '.substr($name, 3, 4).'<br/>';
        echo 'Get position string: '.strpos($name, 'e').'<br/>';
        //returns null
        echo 'Find character "l": '.strchr($name, 'l').'<br/>';
        
        echo 'Find length of string: '.strlen($name).'<br/>';

        echo 'Without trim: '."A"." B C D "."E".'<br/>';
        echo 'Trim spaces on both sides: '."A".trim(" B C D ")."E".'<br/>'; //AB C DE
        echo 'Trim spaces to the left: '."A".ltrim(" B C D ")."E".'<br/>'; //AB C D E
        echo 'Trim spaces to the right: '."A".rtrim(" B C D ")."E".'<br/>'; //A B C DE
        
        echo 'Replace string with another:  '.str_replace("world", "mundo", $word2); //cambia world por mundo
        ?>
    <?php require 'includes/footer.php' ?>