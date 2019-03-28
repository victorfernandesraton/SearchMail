<?php
include_once "./config/tratament.php";
require_once "./database/_sql_connect.php";
?>    

<br>
<hr>
<table>
<caption>Region more error</caption>
<tr>
    <th>Region</th>
    <th>Error quant</th>
</tr>
<?php
foreach($region as $value):
?>
<tr> 
    <td><?php echo $value->getRegion();?></td>
    <td><?php echo($value->getErrorCount()); ?></td>
</tr>
<?php
endforeach;
?>
</table>
<br>
<hr>
<table>
<caption>Region more error</caption>
<tr>
    <th>Region</th>
    <th>Error quant</th>
</tr>
<?php
foreach($domain_obj as $value):
?>
<tr> 
    <td><?php echo $value->getDomain();?></td>
    <td><?php echo($value->getErrorQuant()); ?></td>
</tr>
<?php
endforeach;
?>
</table>
<br>
<hr>
<table>
<caption>Cases more error</caption>
<tr>
    <th>Cases</th>
    <th>Error quant</th>
</tr>
<?php
foreach($error_list as $value):
?>
<tr> 
    <td><?php echo $value->getCase();?></td>
    <td><?php echo($value->getErrorCount()); ?></td>
</tr>
<?php
endforeach;
?>
