<?php session_start();
require_once('includes/config.php');

//Code for Registration 
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    // $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$password','$contact')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
}
}
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Signup | Registration and Login System</title>
        <link href="style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.confirmpassword.value)
{
alert(' Password and Confirm Password field does not match');
document.signup.confirmpassword.focus();
return false;
}
return true;
} 

</script>

    </head>

<body>
    

<div class="containers">
        <div class="boxe loginbox">
            <div class="details dtsignin">
            <div class="indeed " style="margin-top:-40px;">
        <a href="index.php" style="font-size: 2rem;">LOGO</a>
    </div>
            <form  method="POST" name="signup" onsubmit="return checkpass();">
                
                <h5 style="margin-top:-20px;color: #fff;
    font-size: 1.8rem;
    text-decoration: none!important;">Signup</h5>
                <div class="box-wrapper">
                    <input type="text" id="fname" name="fname" onkeydown="return/[a-z A-Z]/i.test(event.key)" class="form-control" required placeholder="Enter Your name">
                    <label for="inputFirstName">First name</label>
                </div>
                <div class="box-wrapper">
                    <input type="phone" id="contact" name="contact" onkeypress="return validateNumber(event)" maxlength="10" class="form-control" required placeholder="Enter Your Phone">
                    <label for="inputcontact">Contact Number</label>
                </div>
                <div class="box-wrapper">
                    <input type="email" id="email" name="email" class="form-control" required placeholder="Enter Your Email">
                    <label for="inputEmail">Email address</label>
                </div>
                <div class="box-wrapper">
                    <input type="password" id="password" name="password" class="form-control" required placeholder="Enter Password">
                    <label for="inputPassword">Password</label>
                </div>
                <div class="box-wrapper">
                    <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" required placeholder="Confirm Password">
                    <label for="inputPasswordConfirm">Confirm Password</label>
                </div>
                <div class="box-wrapper">
                    <button class="signbtn" type="submit" name="submit">SignUp</button>
                    <p>Already have account?<a href="login.php" id="lnk_lg">Login</a></p>
                </div>
                <br>
            </form>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>


