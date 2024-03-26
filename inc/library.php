<?php

function author($email, $password)
{
    if ($email === EMAIL && $password == PASSWORD)
        return true;
    return false;
}

function redirect($page) {
    header("Location: $page.php");
}
function isAthenticated()
{
    return isset($_SESSION['email']);
}
function ensureUserisAuthenticated()
{
    if(!isAthenticated())
    {
        redirect('login');
        die();
    }
}

?>