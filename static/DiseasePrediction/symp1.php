<?php
   #session_start();
   #$arr=$_SESSION['arr']
   //$arr=array("Lower abdominal pain"=>0,"Shortness of breath"=>3,"Congestion in chest or lungs"=>1,"Fever"=>3,"Alcohol abuse"=>4);
?>
<?php
if(file_exists('test.csv'))
  unlink('test.csv');
if(file_exists('remove.csv'))  
  unlink('remove.csv');
if(file_exists('res.csv'))  
  unlink('res.csv');
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Symptoms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1">Symptoms</span>
</nav>
<div class="container">
<form method="post" action="runpython.php"><br>
<div class="col-12 text-center"> 
<input name=next type="submit" value=Next class="btn btn-warning col-2">
</div> <br>
<div class=row>
<div class="card-group " style="{display: flex;}">   
<div class="col-sm-4" id="card_1">    
                                       <br>                                   
                                     <div class="card" >
                                            <div class="card-header">Select your symptom</div>
                                            <div class="card-body">
                                            <select id="opt_1"> 
                                               <option value="Cough">COUGH</option>
                                               <option value="Fever">FEVER</option>
                                               <option value="Chills">CHILLS</option>
                                               <option value="Diarrhea">DIARRHEA</option>
                                               <option value="Constipation">CONSTIPATION</option>
                                               <option value="Vertigo">VERTIGO</option>
                                               <option value="Throat pain">THROAT PAIN</option>
                                               <option value="Tired">TIRED</option>
                                               <option value="Dementia">DEMENTIA</option>
                                               <option value="Chest burning">CHEST BURNING</option>
                                               <option value="Nasal congestion">NASAL CNGESTION</option>
                                               <option value="Arm itching">ARM ITCHING</option>
                                               <option value="Calf swellinG">CALF SWELLING</option>
                                               <option value="Swollen gums">SWOLLEN GUMS</option>
                                               <option value="Insomnia - difficulty sleeping">INSOMNIA</option>
                                             </select><br><br>
                                             <h5>Select severity</h5>
                                             <input type="radio" name="r1" onclick="change1(this.name)" value=0>Low<br>
                                             <input type="radio" name="r1" onclick="change1(this.name)" value=1>Mild<br>
                                             <input type="radio" name="r1" onclick="change1(this.name)"  value=2>Moderate<br>
                                             <input type="radio" name="r1" onclick="change1(this.name)"  value=3>High<br>
                                       </div>
                                     </div>
                                   </div>
                                   <script>  
function change1(x)  {      
  document.getElementsByName(x)[0].name=document.getElementById("opt_1").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_1").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_1").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_1").value;
 }
</script>

<div class="col-sm-4" id="card_2">    
                                       <br>                                   
                                     <div class="card" >
                                            <div class="card-header">Select your symptom</div>
                                            <div class="card-body">
                                            <select id="opt_2"> 
                                               <option value="Cough">COUGH</option>
                                               <option value="Fever">FEVER</option>
                                               <option value="Chills">CHILLS</option>
                                               <option value="Diarrhea">DIARRHEA</option>
                                               <option value="Constipation">CONSTIPATION</option>
                                               <option value="Vertigo">VERTIGO</option>
                                               <option value="Throat pain">THROAT PAIN</option>
                                               <option value="Tired">TIRED</option>
                                               <option value="Dementia">DEMENTIA</option>
                                               <option value="Chest burning">CHEST BURNING</option>
                                               <option value="Nasal congestion">NASAL CNGESTION</option>
                                               <option value="Arm itching">ARM ITCHING</option>
                                               <option value="Calf swellinG">CALF SWELLING</option>
                                               <option value="Swollen gums">SWOLLEN GUMS</option>
                                               <option value="Insomnia - difficulty sleeping">INSOMNIA</option>
                                             </select><br><br>
                                             <h5>Select severity</h5>
                                             <input type="radio" name="r2" onclick="change2(this.name)" value=0>Low<br>
                                             <input type="radio" name="r2" onclick="change2(this.name)" value=1>Mild<br>
                                             <input type="radio" name="r2" onclick="change2(this.name)"  value=2>Moderate<br>
                                             <input type="radio" name="r2" onclick="change2(this.name)"  value=3>High<br>
                                       </div>
                                     </div>
                                   </div>
                                   <script>  
function change2(x)  {      
  document.getElementsByName(x)[0].name=document.getElementById("opt_2").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_2").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_2").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_2").value;
 }
</script>

<div class="col-sm-4" id="card_3">    
                                       <br>                                   
                                     <div class="card" >
                                            <div class="card-header">Select your symptom</div>
                                            <div class="card-body">
                                            <select id="opt_3"> 
                                               <option value="Cough">COUGH</option>
                                               <option value="Fever">FEVER</option>
                                               <option value="Chills">CHILLS</option>
                                               <option value="Diarrhea">DIARRHEA</option>
                                               <option value="Constipation">CONSTIPATION</option>
                                               <option value="Vertigo">VERTIGO</option>
                                               <option value="Throat pain">THROAT PAIN</option>
                                               <option value="Tired">TIRED</option>
                                               <option value="Dementia">DEMENTIA</option>
                                               <option value="Chest burning">CHEST BURNING</option>
                                               <option value="Nasal congestion">NASAL CONGESTION</option>
                                               <option value="Arm itching">ARM ITCHING</option>
                                               <option value="Calf swellinG">CALF SWELLING</option>
                                               <option value="Swollen gums">SWOLLEN GUMS</option>
                                               <option value="Insomnia - difficulty sleeping">INSOMNIA</option>
                                             </select><br><br>
                                             <h5>Select severity</h5>
                                             <input type="radio" name="r3" onclick="change3(this.name)" value=0>Low<br>
                                             <input type="radio" name="r3" onclick="change3(this.name)" value=1>Mild<br>
                                             <input type="radio" name="r3" onclick="change3(this.name)"  value=2>Moderate<br>
                                             <input type="radio" name="r3" onclick="change3(this.name)"  value=3>High<br>
                                       </div>
                                     </div>
                                   </div>
                                   <script>  
function change3(x)  {      
  document.getElementsByName(x)[0].name=document.getElementById("opt_3").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_3").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_3").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_3").value;
 }
</script>

<div class="col-sm-4" id="card_4">    
                                       <br>                                   
                                     <div class="card" >
                                            <div class="card-header">Select your symptom</div>
                                            <div class="card-body">
                                            <select id="opt_4"> 
                                               <option value="Cough">COUGH</option>
                                               <option value="Fever">FEVER</option>
                                               <option value="Chills">CHILLS</option>
                                               <option value="Diarrhea">DIARRHEA</option>
                                               <option value="Constipation">CONSTIPATION</option>
                                               <option value="Vertigo">VERTIGO</option>
                                               <option value="Throat pain">THROAT PAIN</option>
                                               <option value="Tired">TIRED</option>
                                               <option value="Dementia">DEMENTIA</option>
                                               <option value="Chest burning">CHEST BURNING</option>
                                               <option value="Nasal congestion">NASAL CNGESTION</option>
                                               <option value="Arm itching">ARM ITCHING</option>
                                               <option value="Calf swellinG">CALF SWELLING</option>
                                               <option value="Swollen gums">SWOLLEN GUMS</option>
                                               <option value="Insomnia - difficulty sleeping">INSOMNIA</option>
                                             </select><br><br>
                                             <h5>Select severity</h5>
                                             <input type="radio" name="r4" onclick="change4(this.name)" value=0>Low<br>
                                             <input type="radio" name="r4" onclick="change4(this.name)" value=1>Mild<br>
                                             <input type="radio" name="r4" onclick="change4(this.name)"  value=2>Moderate<br>
                                             <input type="radio" name="r4" onclick="change4(this.name)"  value=3>High<br>
                                       </div>
                                     </div>
                                   </div>
                                   <script>  
function change4(x)  {      
  document.getElementsByName(x)[0].name=document.getElementById("opt_4").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_4").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_4").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_4").value;
 }
</script>

<div class="col-sm-4" id="card_5">    
                                       <br>                                   
                                     <div class="card" >
                                            <div class="card-header">Select your symptom</div>
                                            <div class="card-body">
                                            <select id="opt_5"> 
                                               <option value="Cough">COUGH</option>
                                               <option value="Fever">FEVER</option>
                                               <option value="Chills">CHILLS</option>
                                               <option value="Diarrhea">DIARRHEA</option>
                                               <option value="Constipation">CONSTIPATION</option>
                                               <option value="Vertigo">VERTIGO</option>
                                               <option value="Throat pain">THROAT PAIN</option>
                                               <option value="Tired">TIRED</option>
                                               <option value="Dementia">DEMENTIA</option>
                                               <option value="Chest burning">CHEST BURNING</option>
                                               <option value="Nasal congestion">NASAL CNGESTION</option>
                                               <option value="Arm itching">ARM ITCHING</option>
                                               <option value="Calf swellinG">CALF SWELLING</option>
                                               <option value="Swollen gums">SWOLLEN GUMS</option>
                                               <option value="Insomnia - difficulty sleeping">INSOMNIA</option>
                                             </select><br><br>
                                             <h5>Select severity</h5>
                                             <input type="radio" name="r5" onclick="change5(this.name)" value=0>Low<br>
                                             <input type="radio" name="r5" onclick="change5(this.name)" value=1>Mild<br>
                                             <input type="radio" name="r5" onclick="change5(this.name)"  value=2>Moderate<br>
                                             <input type="radio" name="r5" onclick="change5(this.name)"  value=3>High<br>
                                       </div>
                                     </div>
                                   </div>
                                   <script>  
function change5(x)  {      
  document.getElementsByName(x)[0].name=document.getElementById("opt_5").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_5").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_5").value;
  document.getElementsByName(x)[0].name=document.getElementById("opt_5").value;
 }
</script>
</div>
</div><br>

<!-- <input type=hidden name=ip value= <?php #echo base64_encode(serialize($arr)) ; ?> >  -->

<!-- <?php
    //foreach ($arr as $x=>$value){?>

    
      <input type="hidden" name="<?php //echo $x;?>" value=<?php //echo $value;?>>
      
   
<?php    //}
?> -->
</form>
</div>
<?php
print_r($_POST);
?>    
</body>
</html>