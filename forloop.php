<?php 

$title = 'FOR LOOP';
include 'include/header.php'


?>
<body>
<h1> For Loop Statements Page</h1>

<?php

for($count=0; $count<10; $count++)
{
    echo '<p>we are counting</P>';
    
}
for($count=0; $count<10; $count++)
{
    echo "<p>let count. $count</p>";
    
}

?>

</body>
</html>