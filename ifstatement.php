<?php 

$title = 'IF STATEMENTS';
include 'include/header.php'


?>
<body>

<h1> If Statements Page</h1>
    <?php 
     
    echo '<h2> If Statement </h2>';

    $grade=50;

    if($grade >= 50) // simple if state based on value of variable
    // ==, ===. >, <, <=, >=, 
    {
        echo "<h3 style='color:green'> You have Passed</h3>";
    }
    else
    {
        echo "<h3 style='color:red'> You have Failed</h3>";
    }

    $grade='A';

    if($grade == 'A')
    {
        echo '<h2 style="color:green"> Good work</h2>';
    }
    elseif($grade=='B')
    {
        echo '<h2 style="color:blue"> nice work</h2>';
    }
    elseif($grade=='c')
    {
        echo '<h2 style="color:red">Needs worh there</h2>';
    }

    ?>

<?php 

require 'include/footer.php'
?>
