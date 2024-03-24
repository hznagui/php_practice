<?php
$names = ["houdaifa","khalid","teste"]; //this way we declar the index taible
$hoho = array("houdaifa1","khalid1","teste1"); //another way
echo $names[2];
$names[2]="sa3id";//change the value in taible
echo "<br>";
echo $names[2];
echo "<br>";
$names[]="hamid";//adding a new element
echo $names[3];
array_push($names,"hasna");//another way 
echo "<br>";
echo $names[4];
$contact=["ana" => "0645343423", "mom" => "423044240329"];//this taible assossiative have no index like map in C++
echo "<br>";
echo $contact["ana"];
$contact["hoho"]="12324234534";
echo "<br>";
echo $contact["hoho"];//adding a new element
echo "<br>";
$paah = [ ...$names, ...$hoho];// dik ... ismom spread operator kayetkhamo bach matalan ncopiw 
print_r($paah);
echo "<br>";
$result=[
    ["price" => 90 , 'name' => 'produit'],
    ["price" => 100 , 'name' => 'chair'],
    ["price" => 5 , 'name' => 'micro'],
    ["price" => 600 , 'name' => 'monitor'],];//example of taible of two dimension
echo $result[1]['name'];
echo "<br> <a href=index.php> to back to begining</a>";
echo "<br> <a href=numbers.php> to numbers</a>";
echo '<br><a href="loops.php"> loops</a>';
echo "<br> <a href=function.php> to function   </a>";
echo "<br> <a href=condition.php> to condition</a>";


?>