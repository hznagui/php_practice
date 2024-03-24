<?php
function printz($name ="mohamed", $age = 14)//this way we declare a function
{
    echo "my name is $name and my age is $age";
}
function printz2($taible)
{
    echo"my name is {$taible['name']} , and my price is ". ret($taible['price'])."<br>";//this way we can print assossiative taible content
}
function ret($age)
{
    $age+=1;
    return $age;//return b7alo b7al c++
}

// fn($item)=> $item * 2; // arrow function kay kon ma3andaxi ism and de9dar dkhadma gher f dik mota3 fa9at
$result=[
    ["price" => 90 , 'name' => 'produit'],
    ["price" => 100 , 'name' => 'chair'],
    ["price" => 5 , 'name' => 'micro'],
    ["price" => 600 , 'name' => 'monitor'],];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1><?php echo "salam";?></h1>
<?php
foreach ($result as $res)
    printz2($res);
printz("sa3id",67);//this way we call a fucntion it like c++
include('pages.php');

?>
</body>
</html>