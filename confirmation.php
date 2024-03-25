<?php include('./inc/header.php');?>
<?php
// print_r($_SERVER);
// die();//can wa9fo biha execution
// $_POST['fullname'];//post request is like get request but it more privite than get 

// $_SERVER['REQUEST_METHOD']//$_server howa taible li kan 3erfo meno xi information
    $urname = $_REQUEST['fullname'] ?? "";//coalescing operator it's like condition operator if true it return the first wone value
    $uage = $_REQUEST['age'] ?? "";//had request jat en general b7al get o post request
    echo $urname ? "<h1>confirmation</h1>" : "<h1>go back!</h1>";
    echo "ur name is ".$urname." and ur age is ".$uage;
    
?>

    <br>
<a href="./about.php">back</a>
<?php include("./inc/footer.php");?>

