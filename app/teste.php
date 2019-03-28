<?php
include_once "./config/tratament.php";
require_once "./database/_sql_connect.php";

    // exemplo de uso
    $cx = cx_bench("mysql","localhost","3306","root","vfbr1101","mailtool");
    $querryTables = "SHOW TABLES;";
    $stmt = $cx->prepare($querryTables);
    $stmt->execute();
    while($listTable = $stmt->fetch(PDO::FETCH_ASSOC)):
        echo $listTable["Tables_in_mailtool"]."<br>";
    endwhile;
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
