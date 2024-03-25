<?php 
// $name= $_GET['name']; // had  $_GET taible kan kon mora dik ? kade9dar dakhalo variable
    // $age= $_GET['age'];
    $urname="";
    $uage = "";


?>
<?php include('./inc/header.php');?>


<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <h1> About page</h1>
            <p><?php echo $urname.' age: '.$uage;?></p>

            <form action="./confirmation.php" method="POST">
                <div class="form-group">
                    <label for="name">your name</label>
                    <input id="name" name="fullname" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="age">your age</label>
                    <input id="age" name="age" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-block btn-success">CREATE</button>
            </form>
        </div>
    </div>
</div>


<!-- <br><h1>about page</h1> -->
<!-- <p><?php echo "my name is ".$name. " and my age is ".$age;?></p> -->
<?php include("./inc/footer.php");?>
