<?php
    $arr=$_POST;
    array_shift($arr);
    if(isset($_POST['next']) and !empty($arr)){
        
        
        #$arr=unserialize(base64_decode($_POST['ip'])) ;
        $k1=json_encode($arr);
        $k= str_replace( '_', ' ', $k1);
        ///echo $k;
        $file='rem.json';
        $handle=fopen($file,'w');
        fwrite($handle,$k);
        $cmd='python "te_svd.py" ';
        $p=exec($cmd,$output); 
        //print_r($output);
        session_start();
        $_SESSION['opt']=$output;
        if($output)
            header('Location: symp.php');
        else
            echo "Error";
            exit;
        
    }
    else{
        header('Location: output.php');
        exit;
    }
    
    ?>




