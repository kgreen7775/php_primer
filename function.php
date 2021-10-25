<?php 

$title = 'SIMPLE FUNCTIONS';
include 'include/header.php'


?>
<body>
    <h1>Functions</h1>

    <?php 
    
    // Defining a Function

    function writemsg()
    {
        echo '<p>Thanks for your support</p>';
    }
    
    //Calling a function

    writemsg(); 



    function addition($num1,$num2)
    {
        $sum=$num1+$num2;
        echo "The sum of $num1 and $num2 is $sum <br/>";

    }

    addition(12,15);
    $num=124;
    addition($num,88);

//pass by reference

function changenum(&$num)
{
    $num=$num+100;
    //$num+=10;
}


changenum($num);
echo $num.'<br/>';



//returning varibale

function returnproduct($num1,$num2)
{
    $product=$num1*$num2;

    return $product;
}

$returning_value=returnproduct(11,5);
echo $returning_value.'<br/>';




//here's what happens if the return statement is not used 
//at the end of that function


function returnproduct1($num1,$num2)
{
    $product=$num1*$num2;

    //return $product;
}

$returning_value1=returnproduct1(11,5);
echo $returning_value1.'<br/>';

//without the return product statement the function
// cannot echo a value to the screen.




?>

<?php 

require 'include/footer.php'
?>
