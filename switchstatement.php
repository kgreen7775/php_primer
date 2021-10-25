<?php 

$title = 'SWITCH STATEMENTS';
include 'include/header.php'


?>
<body>

<h1> Switch Statements Page</h1>

<?php

$grade = 'A';

switch($grade)
{
    case 'A':
        echo '<h2 style="color:green">Good Work</h2>';
        break;

    case 'B':
        echo '<h2 style="color:Blue">Nice work</h2>';
        break;

    default:
        echo '<h2 style="color:red"> Needs work </h2>';
}

?>
    

    <?php 

require 'include/footer.php'
?>
