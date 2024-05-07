<?php
session_start();
session_unset();
session_destroy();
if(isset($_SESSION['auth']))
{
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    $_SESSION['message']='logged out successfully';

}
header('Location:index.php')
?>