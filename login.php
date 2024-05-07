<?php session_start(); 
include_once('includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['email'];
$ret= mysqli_query($con,"SELECT id,fname FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['auth']='true';
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$_SESSION['auth_user']=[
    'id'=> $id,
    'fname'=>$fname
];
header("location:index.php");

}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Login</title>
        <link href="style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
<body>
<div class="containers">
        <div class="boxe">       
            <div class="details dtsignin">
            <div class="indeed " >
        <a href="index.php" style="font-size: 2rem;">LOGO</a>
    </div>
            <form  method="POST" name="form" >
                <h4 style="margin-top:-10px;color: #fff;
    font-size: 1.5rem;
    text-decoration: none!important;text-align:center;">Login</h4>
                <br>               
                <div class="box-wrapper">
                    <input type="email" name="email"   class="form-control" placeholder="Email">
                    <label for=""></label>
                </div>
                <div class="box-wrapper">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <label for=""></label>
                </div>
                <br>
                <div class="box-wrapper">
                    <button type="submit" class="signbtn" name="login">Login</button>
                    <p>Don't have account?<a href="register.php" id="lnk_rg">SignUp</a></p>                    
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>























<!-- 

<?php
session_start();
include("connection.php");
 
if(isset($_POST['logbtn']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $login_query = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
    $login_query_run = mysqli_query($con , $login_query);
    if(mysqli_num_rows($login_query_run)>0)
    {
        $_SESSION['auth']='true';
        $userdata= mysqli_fetch_array($login_query_run);
        $username=$userdata['username'];
        $useremail=$userdata['email'];
        $userId = 
        $_SESSION['auth_user']=[
            'username'=> $username,
            'email'=>$useremail
        ];

        $_SESSION['message']="logged in successfully";
        header('Location:index.php');
    }
    else{
        $_SESSION['message'] = "Invalid Credentials";
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistic</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300|Nunito:400,700&display=swap"
        rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/b596566aca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>


            
    <div class="containers">
        <div class="boxe loginbox">
        
            <div class="details dtsignin">
            <form  method="POST" name="form" action="login.php">
                <h2>LogIn</h2>
                <br>
                
                <div class="box-wrapper">
                    <input type="email" name="email"   class="form-control" placeholder="Email">
                    <label for=""></label>
                </div>
                <div class="box-wrapper">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <label for=""></label>
                </div>
                <br>
                <div class="box-wrapper">
                    <button type="submit" id="logbtn" class="form-control" name="logbtn">LogIn</button>
                    <p>Don't have account?<a href="register.php" id="lnk_rg">SignUp</a></p>
                    <?php
                    if(isset($_SESSION['message']))
                    {           
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey! </strong> <?php echo $_SESSION['message']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                
                    unset($_SESSION['message']);
                    }
                    ?>
                </div>
            </form>
            </div>
        
    </div>

    <script>
        let detlg = document.querySelector(".dtsignin")
        let detrg = document.querySelector(".dtsignout")


        let linkrg = document.querySelector("#lnk_rg" );
        let linklg = document.querySelector("#lnk_lg");


        function callsign(){
            detlg.classList.toggle("callreg");
            detrg.classList.toggle("setreg");

        }


        linklg.addEventListener("click",callsign)
        linkrg.addEventListener("click",callsign)

    </script>




    <script src="js/main.js"></script>
    <script>
        $(document).ready(function () {
            $(window).bind("scroll", function () {
                if ($(window).scrollTop() > 500) {
                    $('header').addClass('active');
                } else {
                    $('header').removeClass('active');
                }
            })
        })
    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery/jquery-migrate.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/easing/easing.min.js"></script>
    <script src="vendor/superfish/hoverIntent.js"></script>
    <script src="vendor/superfish/superfish.min.js"></script>
    <script src="vendor/waypoints/waypoints.min.js"></script>
    <script src="vendor/touchSwipe/jquery.touchSwipe.min.js"></script>
    <script src="vendor/counterup/counterup.min.js"></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/lightbox/js/lightbox.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html> -->





