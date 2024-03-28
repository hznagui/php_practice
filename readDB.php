<?php
require_once('./inc/config.php');
require_once('./app/task.php');
require_once('./inc/library.php');
session_start();
ensureUserisAuthenticated();
function readDB()
{
        $read = new task();
        return $read->get_task();
}
include ("./inc/header.php");
print_r(readDB());?>
<br>
<div class="text-center">
    
    <a class=" btn btn-danger" href="./admin.php"> to go back </a>
</div>
