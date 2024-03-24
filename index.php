
<?php 
    $age=50;//this is how can we declare a variable in php
    $firstname='tamago';//this is how can we declare a string in php
    $lastname="znagui";//another way
    define('NAME',"houdaifa znagui")//this way we can creat a const 
    ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>php site</title>
        <link rel="icon" href="">
        <meta name="author" content=<?php echo $firstname.$lastname;?>>
    </head>
    <body>
        <?php
        echo("<h1>hello in php</h1>\n");
        echo NAME;
        echo "\n $firstname $lastname\n";
        ?>
        <hr>
        <?php
        echo "<p>waw zahya<p>";
            ?>
        <a href="numbers.php"> to numbers page </a>
        <br><a href="arrays.php"> to arrays page </a>
        <br><a href="loops.php"> to loops page </a>
        
    </body>
</html>