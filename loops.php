<?php
echo "<h1>welcome to loops page</h1>";
$taible = ["barca","madrid","man untd", "bayern"];
for($i = 0; $i< sizeof($taible); $i++)//as c++
{
    echo $taible[$i]."<br>";
}
$i=0;
while ($i<sizeof($taible))//as c++
{
    echo $taible[$i]."<br>";
    $i++;
}
foreach($taible as $t)//this is new for me it work by setting the second parametere and start bookling about him
     echo $t."<br>";


     include('pages.php');

?>