<!DOCTYPE html>
<?php 
require_once('./inc/config.php');
require_once('./inc/library.php');
session_start();
ensureUserisAuthenticated();
include('./inc/header.php');?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <H1>Admin panel <?php echo $_SESSION['email'];?></H1>
        </div>
    </div>
</div>
<a href="./logout.php"> logout </a>

<?php include('./inc/footer.php');?>
