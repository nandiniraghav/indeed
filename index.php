<?php
session_start();
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
<header>
<nav>
<div class="container logo-new">
   <a class="menu-button" onclick=showSidebar()><img src="img/image.png" alt=""></a>
    <div class="logistics ">
        <a href="index.php">LOGO</a>
        
    </div>
    <div class="nav-content">
    <ul class="sidebar">
        <li onclick=hideSidebar()><a href=""><i class="fa-solid fa-xmark"></i></a></li>       
        <li><a href="#">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#service">SERVICES</a></li>
        <li><a href="#contact">CONTACT</a></li>
        
    </ul>   
    <ul class="navbar">
        <li class="hideOnMobile size"><a href="#">HOME</a></li>
        <li class="hideOnMobile size"><a href="#about">ABOUT</a></li>
        <li class="hideOnMobile size"><a href="#service">SERVICES</a></li>
        <li class="hideOnMobile size"><a href="#contact">CONTACT</a></li>   
     <?php
                    if(isset($_SESSION['auth']))
                    {
                        ?>
  <li class=" size menu-item nav-item"><a href="#" class="nav-item nav-link btn_lg"><i
                            class="ri-arrow-drop-down-fill"></i><i class="fa-regular fa-user"></i><?php echo $_SESSION['name'] ?></a>
  <ul class="drop-menu">
                        <li class="drop-menu-item"><a href="#">MY PROFILE</a></li>
                        
                        <li class="drop-menu-item"><a href="logout.php">LOGOUT</a></li>                       
    </ul>
                    </div>
                    <?php
                    }
                    else{
                        ?>
                        <li class="nav-item">
                        <a href="login.php" class="nav-link btn_lg">LOGIN</a>
                        </li>
                        <?php
                    }
                    ?>                   
                    </li>         
    </ul>   
    </div>    
</div> 
</nav>
</header>


    <section class="slider">
        <div class="slider-container">
            <div id="carousel" class="carousel  slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="carousel-background "><img src="img/slider-1.jpg" alt="" width="100%" height="100%"  >
                        </div>
                        <div class="carousel-container">
                            <div class="carousel-content mt-lg-5">
                                <h3 style="color: white; font-size: 3rem;font-weight:bold;">Connect Your Business</h3>
                                <h3 style="color: white; font-size: 3rem;font-weight:bold;">to the world</h3>
                                <p style="font-size:1.2rem;">
                                Expand your reach and connect your business to the world with seamless logistic solutions tailored to your needs. Unlock global opportunities and streamline operations with our comprehensive logistics platform.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
        </div>
    </section>
    <div class="about" id="about">
        <h2> About Us</h2>
    </div>
    <section class="container">
        <div class="row container4">
            <div class="col-lg-6 col-md-12 part5" >
                <img src="img/about-vision.jpg" alt="" width="90%" height="380vh"
                    style="filter: drop-shadow(2px 2px 5px black);">
            </div>
            <div class=" col-lg-6 col-md-12 part4">
                <h3>What we stand for</h3>
                <p>At our logistics company, we stand for reliability, efficiency, and excellence in service. We understand the critical role logistics play in your business operations, which is why we are committed to providing you with seamless and cost-effective solutions tailored to your needs. Our team of logistics experts is dedicated to ensuring that your goods are transported and delivered safely and on time, every time. We leverage advanced technology and strategic partnerships to optimize every aspect of the supply chain, from warehousing to transportation. Whether you are a small business or a large enterprise, you can rely on us to handle your logistics needs with professionalism and care. Partner with us for a logistics experience that exceeds your expectations.
                </p>
            </div>
        </div>
    </section>

    <br>
    <br>
    <h2 style="text-align: center;
    color:rgb(14, 76, 100) ;
    font-weight: bold;
    font-size: 2rem;">Why Choose Us ? </h2>
    <br>
    <div class="container2">
        <section class="container">
            
                <div class=" row whyus">
                    <div class="col-lg-4 col-md-12 part">
                        <img src="img/portfolio-1.jpg" alt="" width="80%" height="200vh" >
                        <h2>Experience and Expertise</h2>
                        <p>Highlight the years of experience and expertise your company has in the IT industry.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-12 part">
                        <img src="img/portfolio-2.jpg" alt="" width="80%" height="200vh"
                            style="align-items: center;">
                        <h2>Client Success Stories</h2>
                        <p >Share success stories or case studies of how your IT solutions have helped clients achieve their goals.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-12 part">
                        <img src="img/portfolio-3.jpg" alt="" width="80%" height="200vh"
                            style="align-items: center; ">
                        <h2>24/7 Support</h2>
                        <p>If applicable, mention your 24/7 customer support service to ensure clients' needs are always met. 
                        </p>
                    </div>

                </div>

            
        </section>
    </div>
    <br>
    <br>

    <section class="container" id="service">
        <h2 style="text-align: center;color:rgb(14, 76, 100) ;
    font-weight: bold;
    font-size: 2rem;"><b>Services</b></h2>
        <br>
        <div class="wrapper1">
            <div class="card">
                <img src="img/software.jpg" alt="">

                <div class="info">
                    <h4>Software Development</h4>
                    <p>Creating innovative and efficient software solutions to solve complex problems.</p>
                    <a href="#" class="card-button">Read More</a>
                </div>
                <h3>Software Development</h3>

            </div>
            <div class="card">
                <img src="img/app.jpg" alt="">
                <div class="info">
                    <h4>App Development</h4>
                    <p>Transforming ideas into innovative mobile applications that enhance user experiences</p>
                    <a href="#" class="card-button">Read More</a>
                </div>
                <h3>App Development</h3>

            </div>
            <div class="card">
                <img src="img/mobile.jpg" alt="">
                <div class="info">
                    <h4>Game Development</h4>
                    <p>Creating immersive worlds and engaging experiences through interactive digital entertainment</p>
                    <a href="#" class="card-button">Read More</a>
                </div>
                <h3>Game Development</h3>

            </div>
        </div>
        <br>
        <br>
    </section>


    <br>
    <section class="container" id="contact">
        <div class="row get_in">
            <div class="col-lg-4 col-md-6 col-sm-12 get-in-img">
                <img src="img/call.jpg" alt="" height="300px" width="100%">
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 get-in-txt">
                <h3>Welcome to our IT solutions hub</h3>
                <br>
                <p> Have a question or need assistance? Get in touch with our expert team for tailored IT solutions and responsive support. Reach out today!</p>
                <br>
                <a href="#" class="get-btn">Get in touch</a>

            </div>
        </div>
        <br>
        <br>
        </div>
    </section>
    <footer class="footer">
        <br>
        <br>
        <br>
        <section class="container">
            <div class="row box-container">
                <div class="col-lg-3 col-md-12 box">
                    <div class="logo pull-left">
                    <div class="indeed ">
                        <a href="#">LOGO</a>
                        
                    </div>
                       
                        <br>
                    
                    <p>Welcome to our IT solutions hub! Explore cutting-edge technologies, innovative software, and secure systems designed to optimize logistics, enhance operations, and propel businesses forward.</p>
                    </div>
                    <div class="share">
                        <a href="https://www.facebook.com/login/" target="_block" class="fab fa-facebook-f"></a>
                        <a href="https://twitter.com/i/flow/login" target="_block" class="fab fa-twitter"></a>
                        <a href="https://www.instagram.com/accounts/login/" target="_block" class="fab fa-instagram"></a>
                        <a href="https://www.linkedin.com/login" target="_block" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 box">
                    <h3><b>QUICK LINKS</b></h3>
                    <a href="#" class="links"> <i class="fa-solid fa-chevron-right"></i>HOME</a>
                    <a href="#" class="links"> <i class="fa-solid fa-chevron-right"></i>ABOUT US</a>
                
                    <a href="#" class="links"> <i class="fa-solid fa-chevron-right"></i>SERVICES</a>
                    <a href="#" class="links"> <i class="fa-solid fa-chevron-right"></i>CONTACT</a>
                </div>
                <div class="col-lg-3 col-md-12 box">
                    <h3><b>SERVICES</b></h3>
                    <a href="#" class="links"> <i class="fa-solid fa-chevron-right"></i>SOFTWARE DEVELOPMENT</a>
                    <a href="#" class="links"> <i class="fa-solid fa-chevron-right"></i>APP DEVELOPMENT</a>
                    <a href="#" class="links"> <i class="fa-solid fa-chevron-right"></i>GAME DEVELOPMENT</a>
                    <a href="#" class="links"> <i class="fa-solid fa-chevron-right"></i>DIGITAL MARKETING</a>
                    
                </div>
                <div class="col-lg-3 col-md-12 box">
                    <h3><b>CONTACT</b></h3>
                    <p><li><i class="fa-solid fa-location-dot"></i>&nbsp;ABC Building , X-Block</li> <li>&nbsp; &nbsp;Laxmi Nagar, DELHI</li></span></p>
                    <p><li><i class="fas fa-phone"></i>&nbsp;+91 9999999999</li></p>
                    <p><li><i class="fa-solid fa-envelope"></i>&nbsp;indeed@gmail.com</li></p>

                </div>
            </div>
            <hr>
            <div class="Copyright">&copy; Copyright indeed. All Rights Reserved</div>
        </section>
    </footer>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function () {
            $(window).bind("scroll", function () {
                if ($(window).scrollTop() > 200) {
                    $('header').addClass('active');
                } else {
                    $('header').removeClass('active');
                }
            })
        })
    </script>
   
</body>

</html>