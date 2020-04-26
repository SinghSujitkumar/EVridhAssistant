<style>
    table, th, td{
        border: 1px solid black;
    }
    </style>
<?php
$a=[$_GET["sym"]];
$ip=unserialize(base64_decode($_POST['ip'])) ;
#echo  $a[0];
$cmd='python "C:/Users/Stevert Lobo/Desktop/TE Project/te_svd.py"';
$p=exec($cmd,$output); ?>
<form method=POST action=rep.php>
<table>
<tr>
    <th>Symptoms</th>
    <th>Occurence</th>
</tr>
<?php
$i=0;
foreach($output as $oo){
    //foreach($oo as $o)
        //echo var_dump($oo) ."\n";
    
     ?>
        <tr>
            <td><?php echo trim($oo) ;?></td>
            <td><input type="checkbox" name=<?php echo $i ;?> value=<?php echo rand(0,5) ;?>  /></td>
        </tr>
            
    
    <?php $i++; } ?>
</table>
<input type=sumbit name=sub />
<input type=hidden name=length value= <?php echo $i; ?> >
<input type=hidden name=op value= <?php echo base64_encode(serialize($output)) ; ?> >

</form>

    


