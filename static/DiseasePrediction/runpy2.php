<?php
$dis=$_POST['disease'];
$result=exec("python treat.py .$dis",$output);

if($result==0){
    echo "<h1> Treatment unavaiable. Kindly contact a Doctor.";
}
else
    header('Location: results.php');
?>