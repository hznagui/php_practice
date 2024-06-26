<?php  
session_start();
require_once('./inc/config.php');
require_once('./inc/library.php');
if(isAthenticated())
{
    redirect('admin');
    die();
}
$bool = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = htmlspecialchars( $_POST['email']) ?? "";
    if (empty($email))
        $bool = "Email is empty <br>";
    $password = htmlspecialchars($_POST['password']) ?? "";
    if (empty($password))
        $bool .= "Password is empty <br>";
    
    if (empty($bool))
    {
        if (author($email, $password))
            {
            $_SESSION['email'] = $email;
            redirect('admin');
            die();
        }
        else 
            $bool = "the provided credentials didn't not work!";
    }
}
include ('./inc/header.php');
// echo "<br> $email - $password";
?>
<!DOCTYPE html>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            <?php if ($bool != "") { ?>
            <div class="alert alert-danger"><?php echo $bool; ?></div>
            <?php } ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">email</label>
                    <input name="email" id="email" type="text" class="form-control" placeholder="emai...">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input name="password" id="password" type="password" class="form-control" placeholder="password">
                </div>
                <br>
                <input type="submit" value="login" class="w-100 btn btn-lg btn-outline-danger">
            </form>
        </div>
    </div>
</div>
<?php   include ('./inc/footer.php');?>