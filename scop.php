<?php
global  $name;// global variable as  c++
include('./inc/calcule.php'); // this way we include file in php there is also a "require" it do the same job but she is insiste for the file to be created

function ss(&$nam, $age)// there is also a reffrence like c++
{
    $nam="sa3id";
    $age=15;
}
$nam="ana";
$age =12;
echo addition($age, $age);
echo "<br>my name is $nam and my age is $age";
include('pages.php');
?>