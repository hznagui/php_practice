<!DOCTYPE html>
<?php  
require_once('./inc/config.php');
require_once('./inc/library.php');

$email=$_POST['email'] ?? ""; 
$password=$_POST['password'] ?? "";
if (author($email, $password))
{   
    redirect('admin');
    // header("Location: /admin.php");
    // header("Location: $page");
    die();
}
include ('./inc/header.php');
echo "<br> $email - $password";
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">email</label>
                    <input name="email" id="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input name="password" id="password" type="password" class="form-control">
                </div>
                <input type="submit" value="login" class="btn btn-danger btn-block">
            </form>
        </div>
    </div>
</div>
<?php   include ('./inc/footer.php');?>