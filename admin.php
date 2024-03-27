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
        $adding = new task();
        $adding->addTask($_POST['name'], $_POST['adresse']);
    }
}
SendToDB();
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <H1>Admin panel <?php echo $_SESSION['email'];?></H1>
        </div>
        <div>
            <form action="admin.php" method="POST">
                <div class="form-group">
                    <label for="name">name</label>
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

<a href="./logout.php"> logout </a>
<br>
<a href="./inc/upload/index.php"> for uploading </a>
<a href="./inc/upload/indexmulti.php"> for multi uploading </a>

<?php include('./inc/footer.php');?>
