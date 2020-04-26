<?php
if(isset($_POST['sub'])){
    $l=(int)$_POST['length'];
    $output=unserialize(base64_decode($_POST['op'])) ;

    $rem=[];
    $acc=[];

    for($i=0; $i<$l; $i++){
        if(isset($_POST["$i"])){
            array_push($acc,$output[$i]); 
        }
        else{
            array_push($rem,$output[$i]); 
        }

    }
    print_r($rem) ;

}
?>