<?php
    $var=0;
    $op=array("Fever"=>1,'Cough'=>2,'Sneezing'=>3,'Congestion in chest or lungs'=>3,'Fever of Unknown Origin'=>1,'Diarrhea'=>2);
?>
<form action=op2.php method=GET>
Enter Symptoms: 
<input type=text name=<?php echo "sym".$var ?> id=<?php echo $var; $var++;?>>
<input type=hidden id=st name=array value=<?php echo $op ?> >
<input type=hidden name=ip value= <?php echo base64_encode(serialize($op)) ; ?> >
<input type=button value=Add id="add">
<input type=submit>
<
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
<script type=text/javascript >
        i=$('#st').val();
        j=i-1; 
        p='#'+j;
        $('#add').click(function(){
            $('<input>').attr({
                     type:'text',
                     name:"sym"+i,
                     id:i
                 }).appendTo('');
             
             //$('#st').val(i+1);
        }); 

    
</script>

