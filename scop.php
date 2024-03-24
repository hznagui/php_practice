<?php
global  $name;// global variable as  c++


function addition(&$nam, $age)// there is also a reffrence like c++
{
    $nam="sa3id";
    $age=15;
}
$nam="ana";
$age =12;
addition($nam, $age);
echo "my name is $nam and my age is $age";
?>