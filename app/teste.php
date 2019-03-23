<?php
include_once "./config/tratament.php";
?>
<table>
<caption>Mail users</caption>
<tr>
    <th>Mail</th>
    <th>Region</th>
    <th>Domain Error</th>
    <th>Domain Similar</th>
</tr>
<?php
foreach($mail_obj as $value):
?>
<tr> 
    <td><?php echo $value->getMail();?></td>
    <td><?php echo($value->getRegion()); ?></td>
    <td><?php echo($value->getErrorDomain()); ?></td>
    <td><?php echo($value->getSimilarDomain()); ?></td>

</tr>
<?php
endforeach;
?>
</table>