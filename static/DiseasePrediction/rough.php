<?php
print_r($_POST)
?>

<!DOCTYPE html>
<html>
    <head> 
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        
                <form action="#" method="POST">                    
                        <div class="row justify-content-center">
                                   <div class="col-sm-4" id="card_1">    
                                       <br>                                   
                                     <div class="card" >
                                            <div class="card-header">Select your symptom</div>
                                            <div class="card-body">
                                            <select name="opt_1">
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
                                               <option value="Insomnia">INSOMNIA</option>
                                             </select><br><br>
                                             <h5>Select severity</h5>
                                             <input type="radio" name='document.getElementsByTagName("option")[document.getElementById("opt_1").selectedIndex].value' value=1>VERY LOW<br>
                                             <input type="radio" name='document.getElementsByTagName("option")[document.getElementById("opt_1").selectedIndex].value' value=2>LOW<br>
                                             <input type="radio" name='document.getElementsByTagName("option")[document.getElementById("opt_1").selectedIndex].value' value=3>MEDIUM<br>
                                             <input type="radio" name='document.getElementsByTagName("option")[document.getElementById("opt_1").selectedIndex].value' value=4>HIGH<br>
                                             <input type="radio" name='document.getElementsByTagName("option")[document.getElementById("opt_1").selectedIndex].value' value=5>VERY HIGH<br>
                                             
                                             
                                             <button class="btn btn-primary" type="button" onclick="addCard(1)" id="b_1">ADD</button>
                                       </div>
                                     </div>
                                   </div>
                               </div>
                               <br>
                       <button style="margin-left: 46%" class="btn btn-primary" type="submit">Submit</button>
                   <!-- <input type="text"  name="card_count" id="card_count" value="1" hidden> -->
                </form>
            
        
    </body>

    <script>
            function addCard($i){
                document.getElementById("b_"+$i).style.display = "none";
                document.getElementById("card_"+$i).insertAdjacentHTML('afterend',"<div class='col-sm-4' id='card_"+($i+1)+"'><br> <div class='card'> <div class='card-header'>Select your symptom</div> <div class='card-body'><select name='opt_"+($i+1)+"'> <option value='Cough'>COUGH</option> <option value='Fever'>FEVER</option> <option value='Chills'>CHILLS</option> <option value='Diarrhea'>DIARRHEA</option> <option value='Constipation'>CONSTIPATION</option> <option value='Vertigo'>VERTIGO</option> <option value='Throat pain'>THROAT PAIN</option> <option value='Tired'>TIRED</option> <option value='Dementia'>DEMENTIA</option> <option value='Chest burning'>CHEST BURNING</option> <option value='Nasal congestion'>NASAL CNGESTION</option> <option value='Arm itching'>ARM ITCHING</option> <option value='Calf swellinG'>CALF SWELLING</option> <option value='Swollen gums'>SWOLLEN GUMS</option> <option value='Insomnia'>INSOMNIA</option> </select><br><br><h5>Select severity</h5> <input type='radio' name='document.getElementsByTagName('option')[document.getElementById('opt_"+($i+1)+"').selectedIndex].value' value=1>VERY LOW<br> <input type='radio' name=''document.getElementsByTagName('option')[document.getElementById('opt_"+($i+1)+"').selectedIndex].value'' value=2>LOW<br> <input type='radio' name=''document.getElementsByTagName('option')[document.getElementById('opt_"+($i+1)+"').selectedIndex].value'' value=3>MEDIUM<br> <input type='radio' name=''document.getElementsByTagName('option')[document.getElementById('opt_"+($i+1)+"').selectedIndex].value'' value=4>HIGH<br> <input type='radio' name=''document.getElementsByTagName('option')[document.getElementById('opt_"+($i+1)+"').selectedIndex].value'' value=5>VERY HIGH<br><button class='btn btn-primary' type='button' onclick='addCard("+($i+1)+")' id='b_"+($i+1)+"'>ADD</button> </div></div></div>");
                document.getElementById("card_count").value = (parseInt(document.getElementById("card_count").value)+1);
            }
    </script>
</html>