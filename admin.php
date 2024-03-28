<!DOCTYPE html>
<?php 
require_once('./inc/config.php');
require_once('./app/task.php');
require_once('./inc/library.php');
session_start();
ensureUserisAuthenticated();
include('./inc/header.php');
function SendToDB()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (!isset($_POST['name']) && !isset($_POST['adresse']))
            return null;
        $adding = new task();
        return $adding->addTask($_POST['name'], $_POST['adresse']);
        // $adding = null;
        // echo $adding;
    }
    return 1;
}

$ret = SendToDB();
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <H1>welcome <?php echo $_SESSION['email'];?></H1>
        </div>
        <div>
            <form action="admin.php" method="POST">
            <?php if ($ret == null) { ?>
            <div class="alert alert-danger"><?php echo "can't adding to database"; ?></div>
            <?php } ?>
                <div class="form-group">
                    <label class="text-capitalize" for="name">name</label>
                    <input name="name" id="name" type="text" class="form-control" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="adresse">adresse</label>
                    <input name="adresse" id="adresse" type="text" class="form-control" placeholder="adresse">
                </div>
                <br>
                <input type="submit" value="add info" class="w-100 btn btn-lg btn-outline-danger">
                  
            </form>
        </div>
    </div>
</div>
<br>
<div class="text-center">
    <a class="btn btn-danger" href="./logout.php"> logout </a>
    <a class="btn btn-success" href="./inc/upload/index.php"> uploading </a>
    <a class="btn btn-warning" href="./inc/upload/indexmulti.php"> for multi uploading </a>
    <a class="btn btn-warning" href="./readDB.php">so see what is in DB </a>
</div>
    
<?php include('./inc/footer.php');?>
