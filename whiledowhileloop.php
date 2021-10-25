<?php 

$title = 'WHILE AND DO WHILE LOOPS';
include 'include/header.php'


?>
<body>
    <h1>While Loop </h1>

    <?php


    $grade=0;
    while($grade<10)
    {
        echo "<p>Counting up</p>";
       $grade++;
        echo "<p>grade is at $grade </p>";

    } 
    echo '<p>Exits the loop</p>';
    
    
    
    
    ?>

<h1> Do While Loop </h1>

<?php 

$grade=0;
do
{

echo '<p> I am counting</p>';
echo "<p> grade is $grade</p>";
$grade++;
}while($grade<10);


?> 


    

<?php 

require 'include/footer.php'
?>
