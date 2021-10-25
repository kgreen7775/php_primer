<?php 
$title = 'DATE TIME MANIPULATION';
include 'include/header.php'


?>
<body>

<h1>Date and Time Manipulation</h1>

<?php

$datenow=getdate();
echo "today's date:<br/>";

echo  $datenow['mday'].'<br/>' ;
echo  $datenow['mon'].'<br/>' ;
echo  $datenow['year'].'<br/>' ;

echo "today's date is the ". $datenow['mday'].'/'.  $datenow['mon'].'/'.$datenow['year'].'<br/>';

echo '<br/.>'.time();

echo '<br/>'.print date("d-m-y G.i:s<br/>",time());
echo '<br/>'.print"today is";
echo '<br/>'.print date("j of F Y, \a\\t g.i a",time());

?>
<?php 

require 'include/footer.php'
?>
