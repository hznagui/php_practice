<?php 
require_once('./inc/config.php');
require_once('./app/task.php');
require_once('./inc/library.php');
session_start();
ensureUserisAuthenticated();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $read = new task();
    if ($_POST["search"]!="")
        $ret = $read->searchtask($_POST["search"]);
    else
        $ret = "data not found 404";    
}
else
    $ret = "data not found 404";

include ("./inc/header.php");
if ($ret == "data not found 404")
    echo '<div> data not found 404 </div>';
else
{
    foreach ($ret as $re) 
        echo '<div> name: '.$re['name'].' | addrese: '.$re['adresse']."\n".'</div>';
}
?>
<br>
<div class="text-center">
    
    <a class=" btn btn-danger" href="./admin.php"> to go back </a>
</div>