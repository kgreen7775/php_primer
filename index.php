<?php 

$title = 'INDEX';
include 'include/header.php'


?>



    <?php //printing to html using echo
    echo ' Testing PHP text';
    echo '<br/>'; //next line command
    echo 'Second line in php';
    echo '<br/>';
    ?>
    
    <?php
        $name='ThatOneGuy';
        $age='21';
        echo $name;//the $ is used to ref a variable.
        echo '<br/>';
        echo '<br/>';
        echo '<h1>my name is: '.$name.' </h1>'; //Concatenation of text and variable in php


        echo '<h1> my age is '.$age.'</h1>';


        echo "<h1> my age is: $age </h1>"; // using double quote to print
/*    ?>

</body>
</html>
*/

echo '<button type="button" class="btn btn-info">For more Information</button>';

echo '<a class="btn btn-info" href="https://www.heroku.com"> Visit Heroku here </a>';

require 'include/footer.php'
?>




