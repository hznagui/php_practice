<!DOCTYPE html>
<?php   include ('./inc/header.php');
require_once('./inc/config.php');
require_once('./inc/library.php');

$email=$_POST['email'] ?? ""; 
$password=$_POST['password'] ?? "";
echo "<br> $email - $password";
if (author($email, $password))
{   
    // redirect('http://127.0.0.1/php_practice/admin.php');
    header("Location: http://127.0.0.1/php_practice/admin.php");
    // header("Location: $page");
    die();
}
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