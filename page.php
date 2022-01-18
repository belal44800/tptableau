<?php 

session_start();
// etape 1
$tab = [];

$tab = range(0,41);

print_r($tab) ;
// etape 2

shuffle($tab);
print_r($tab);

//etape 3 

array_splice($tab,0, 16);
var_dump($tab);

//etape 4

$tab = array_splice($tab,0,16);

$tab = array_merge($tab,$tab);

var_dump($tab);

// etape 5
shuffle($tab);


?>

<table>
 <?php foreach($tab as $indice => $item){     ?>
    
    <tr>
    
        <td><?=$item?></td>
        <td>
            <img src="./images/<?=$item?>.jpg">
        </td>
    </tr>   
    <?php } ?>
 </table>