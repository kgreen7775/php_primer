<?php 

$title = 'SIMPLE ARRAYS and PRINT OUT';
include 'include/header.php'


?>
<body>

<h1>Array Construct</h1>

<?php  

$num=15;

$nums=array(1,2,3,4,5,6,7,8,9,10,57,95,35,25,85,92);

echo $nums[5];

echo"<p>$nums[9]</p>";

$size=count($nums);
echo "<p> array numers is size: $size</p>";


for($count=0;$count<$size;$count++)
{
    echo"<p>$nums[$count]</p>";

}


?>

<?php 

require 'include/footer.php'
?>
