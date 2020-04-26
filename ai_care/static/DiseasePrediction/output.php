<?php
$result=exec('python "optimization.py" ',$output);
$res=$output;
//print_r($output);
$x=count($output)-1;
$x1=count($output)-2;
$x2=count($output)-3;
$x3=count($output)-4;
$x4=count($output)-5;
$x5=count($output)-6;
function output()
{
  $oc=$GLOBALS['res'];
    #print_r($oc);
    
    $x=count($oc)-1;
    echo  $oc[$x];
}
 
$dataPoints = array(
	array("label"=> "$output[$x1]", "y"=> 750),
	array("label"=> "$output[$x2]", "y"=> 500),
	array("label"=> "$output[$x3]", "y"=> 250),
	array("label"=> "$output[$x4]", "y"=> 250),
	array("label"=> "$output[$x5]", "y"=> 100),
	
);
/*
$dataPoints = array(
	array("label"=> "$output[0]", "y"=> 750),
	array("label"=> "$output[1]", "y"=> 500),
	array("label"=> "$output[2]", "y"=> 250),
	array("label"=> "$output[3]", "y"=> 250),
	array("label"=> "$output[4]", "y"=> 100),
	
);*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prediction</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


 
<div class="container">
  
  <div class="card">
    <center><div class="card-header"><h2>Predicted Diseases</h2></div></center>
    <center><div class="card-body"><h4><?php output() ?></h4></div>
   
  </div>
</div>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Symptoms"
	},
	
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label}  #percent%",
		yValueFormatString: "",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1">Summary</span>
</nav>
<br>
<center><div id="chartContainer" style="height: 370px; width: 1000px;"></div></center>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br>
<br>
<form action="runpy2.php" method="post">
<input type='hidden' name=disease value="<?php output() ?>" >
<center><button type="submit" class="btn btn-info">View Treatment</button></center>
</form>




</body> 
</html>

