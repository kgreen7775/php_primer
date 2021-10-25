<?php 

$title = 'STRING MANIPULATION';

include 'include/header.php'


?>
<body>

<h1>PHP String Manipulation</h1>

<?php

    $phraise1 = "Student A is in class";
    $phraise2 = "She is a big Girl";
    $name = 'james haylett';
    $combine='Student who came late should stand in class at the door';

    echo "<p>$phraise1</p>";
    echo "<p>$phraise2</p>";

    //concatination example below:


    echo $phraise1.",her name is tiffany. ".$phraise2;
    echo '<p></p>';

    echo '<hr/>';
    // string transformation below: 

        echo 'UPPERCASE first letter'.ucfirst($name).'<br/>';

        echo 'UPPERCASE first letter'.ucwords($name).'<br/>';
        
        echo ' Fully Upper case: '.strtoupper($name).'<br/>';
       
        echo ' Upper case: '.strtolower("THIS WAS ALL UPPER CASE").'<br/>';

        // String Repeat

        echo 'Repeat String: '.str_repeat('a',3).'<br/>';


        echo 'Repeat String: '.strtoupper(str_repeat('a',3)).'<br/>';

        //SubString
        echo 'Get a SubString:'.substr($name,3,6).'<br/>';

        //Return NULL
        //Get the position of the string

        echo 'Get Position of String:'.strpos($name,'a').'<br/>';

        echo 'Finding the length of a String:'.strlen($name).'<br/>';

        echo 'Feing the Character e:'.strchr($name, 'e').'<br/>';
        echo 'Feing the Character E:'.strchr($name, 'E').'<br/>';
        echo 'Feing the Character h:'.strchr($name, 'h').'<br/>';
        echo 'Feing the Character K:'.strchr($name, 'K').'<br/>';

        echo 'Without trim:'."A"." B C D "." E ".'<br/>';
        echo 'Trim with spaces on both sides:'."A".trim(" B C D ")." E ".'<br/>';
        echo 'Trim spaces to the left'."A".ltrim(' B C D ').' E '.'<br/>';
        echo 'Trim spaces to the right'."A".rtrim(' B C D ').' E '.'<br/>';

        echo 'Replace string with another:'.str_replace(" Stand "," sit ",$combine).'<br/>';


?>
    

    <?php 

require 'include/footer.php'
?>

