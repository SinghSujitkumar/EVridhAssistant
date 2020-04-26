<?php
// Database Structure
$host="localhost";
$username="root";
$password="";
$databasename="te";

$connect=mysqli_connect($host,$username,$password,$databasename);

$searchTerm = $_GET['term'];
$q="SELECT * FROM symptom WHERE symptom LIKE '%".$searchTerm."%'";
$select =mysqli_query($connect,$q);

while ($row=mysqli_fetch_array($select)) 
{
 $data[] = $row['symptom'];
}
//return json data
echo json_encode($data);
?>