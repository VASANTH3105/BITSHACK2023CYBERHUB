<?php
require 'config.php';
if(!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}
?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href=".\index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous">
</head>
<body>
    <h1>Welcome <?php echo $row["name"]; ?> </h1>
    <a href="logout.php">Logout</a>
   
</body>
</html>
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberHub</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="./imgs/SHicon.png">

    <style>
        #logo{
            height: 20px;
            width: 30px;
        }
       
    </style>
    
</head>
<body>
    <!--nav bar--> 
    
    
        
        
        <nav class="navbar navbar-expand-lg" id="navbar">
            <img id="logo" class="img-fluid md-mx-3 mx-5" src="imgs\SHlogo.png" alt="">
            <b class="bold">CyberHub<small></small> </b>
            <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#menu" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg> 
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.html">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carreirguide.html">Career Guidance</a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="#paidcourses">Paid courses</a>
                    </li>
                    -->
                    <li class="nav-item">
                        <a class="nav-link" href="#services">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="home" id="home">
            <!-- 1-->
            
            <div class="slide active"
            
                style="background: url(https://cdnb.artstation.com/p/assets/images/images/020/954/119/original/alexey-kurbatov-hexagon-floor-1.gif?1569829764) no-repeat; background-size: cover; background-position: fixed; background-attachment: fixed;">
                <div class="content mx-lg-5 mx-sm-1">
                    <div class="row mt-3">

                        <div class="col-lg-6 clo-md-6 col-12 order-1 mt-5 pt-3 " >
                            <p class=" text-white">Hello, <?php echo $row["name"]; ?></p>
                            <h1 class="text-white">Welcome to <br> <span>CyberHub  </span></h1>
                            <p class="my-lg-2 my-3 text-white">Welcome to <strong>CyberHub</strong>, your go-to web app for up-to-date Cyber Pratices. Our app is designed to provide you with accurate and reliable data, no matter where you are in the world.</p>
                      
                            <button class="btn btn-primary my-lg-3 my-3 text-white" style="text-decoration: none;"><a class="text-white " style="text-decoration: none;" href=".\citydetails\myindex.html">Check status</a></button>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 py-lg-3 py-lg-3 order-sm-2 text-center">
                            <img src="./imgs/cybermanicon.png" class="img-fluid text-center" alt="" >
                        </div>

                    </div>
                </div>
            </div>
           
        </div>


        
        



       
<div class="container-fluid col-10">
        <!--Home-->
        <section id="home">
            <div class="row mt-5">
                <div class="col-lg-6 clo-md-6 col-12 order-1 mt-5 pt-3 ">
                    <h1>Welcome to <br> <span>CyberHub  </span></h1>
                    <p><?php echo $row["name"]; ?> are yout ready to be Cybersecurity Specialist</p>
                    <p class="my-lg-2 my-3">Welcome to <strong>CyberHub</strong>, your go-to web app for up-to-date Cyber Pratices. Our app is designed to provide you with accurate and reliable data, no matter where you are in the world.</p>
              
                    <button class="btn btn-primary my-lg-3 my-3 text-white" style="text-decoration: none;"><a class="text-white " style="text-decoration: none;" href=".\citydetails\myindex.html">Check status</a></button>
                </div>
                <div class="col-lg-6 col-md-6 col-12 py-lg-3 py-lg-3
                order-sm-2 text-center">
                    <img style="height: 350px; width: 400px;" src="./imgs/cybercardimgfigma.png" class="img-fluid text-center" alt="" >

                </div>
            </div>

        </section>



        <!--TEMP HOME NEXT SECTION-->
        <section id="home">
            <div class="row mt-2">
                
                <div class="col-lg-6 col-md-6 col-12 py-lg-3 py-lg-3 order-sm-2 text-center">
                    <img  src="https://irp-cdn.multiscreensite.com/34a95d4d/dms3rep/multi/26941-global-network.gif" class="img-fluid text-center" alt="" >

                </div>

                <div class="col-lg-6 clo-md-6 col-12 order-2 mt-5 pt-3 ">
                    <h6 style="font-size: 50px;">Forecast your Learning path</h6>
                    <h1 class="display-5"><span>Check weekly status</span> </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="btn btn-primary my-lg-3 my-3"><a style="color: #fff; text-decoration: none;" href="imgs\cyberlocksld.png">Weekly forecast</a></button>
                </div>
            </div>

        </section>



        <!---about-->
<!--
        <section id="weeklystatus">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 py-lg-3 py-lg-3">
                    <img class="text-center" src="https://img.freepik.com/free-vector/businessmen-climb-growth-column-graph-career-personality-development-careerbuilder-career-planning-progress-concept_335657-308.jpg" 
                    style="width: 60%;  "     
                    class="img-fluid" alt="">

                </div>

                <div class="col-lg-6 clo-md-6 col-12">
                    <h6 style="font-size: 50px;">Forecast your Learning path</h6>
                    <h1 class="display-5"><span>Check weekly status</span> </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="btn btn-primary my-lg-3 my-3"><a style="color: #fff; text-decoration: none;" href="imgs\cyberlocksld.png">Weekly forecast</a></button>
                </div>
            </div>
        </section>

        -->


        



        <!--dummy section 2  start-->
        <section id="paidcourses">
            <div class="row">
                <h2 class="text-center mt-5 mb-4">Essential for Cyber Hackers</h2>

                <div id="cardtrans" class="col-md-3 my-2">
                    <div class="card shadow" style=" background-repeat: no-repeat; background-size: cover; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDyGbx46rO9TaaFb-Jrzlj9_te3VekFKvIeZfyZ1UtkbkhnwAhIdHrDyRyfLKjz7KUDhc&usqp=CAU);">
                        <div class="inner" >
                            <img class="card-img-top p-3 px-5" src="https://static.thenounproject.com/png/3262491-200.png" alt="free courses">
                        </div>
                        <div class="card-body" >
                            <h4 class="card-title">CCNA</h4>
                            <p class="card-text">Introduction to networks</p>
                        </div>
                    </div>
                </div>

                <div id="cardtrans" class="col-md-3 my-2">
                    <div class="card shadow" style=" background-repeat: no-repeat; background-size: cover; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDyGbx46rO9TaaFb-Jrzlj9_te3VekFKvIeZfyZ1UtkbkhnwAhIdHrDyRyfLKjz7KUDhc&usqp=CAU);">
                        <div class="inner" >
                            <img class="card-img-top p-3 px-5" src="https://static.thenounproject.com/png/3262491-200.png" alt="free courses">
                        </div>
                        <div class="card-body" >
                            <h4 class="card-title">CCNA</h4>
                            <p class="card-text">Introduction to networks</p>
                        </div>
                    </div>
                </div>

                <div id="cardtrans" class="col-md-3 my-2">
                    <div class="card shadow" style=" background-repeat: no-repeat; background-size: cover; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDyGbx46rO9TaaFb-Jrzlj9_te3VekFKvIeZfyZ1UtkbkhnwAhIdHrDyRyfLKjz7KUDhc&usqp=CAU);">
                        <div class="inner" >
                            <img class="card-img-top p-3 px-5" src="https://static.thenounproject.com/png/3262491-200.png" alt="free courses">
                        </div>
                        <div class="card-body" >
                            <h4 class="card-title">CCNA</h4>
                            <p class="card-text">Introduction to networks</p>
                        </div>
                    </div>
                </div>

                <div id="cardtrans" class="col-md-3 my-2">
                    <div class="card shadow" style=" background-repeat: no-repeat; background-size: cover; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDyGbx46rO9TaaFb-Jrzlj9_te3VekFKvIeZfyZ1UtkbkhnwAhIdHrDyRyfLKjz7KUDhc&usqp=CAU);">
                        <div class="inner" >
                            <img class="card-img-top p-3 px-5" src="https://static.thenounproject.com/png/3262491-200.png" alt="free courses">
                        </div>
                        <div class="card-body" >
                            <h4 class="card-title">CCNA</h4>
                            <p class="card-text">Introduction to networks</p>
                        </div>
                    </div>
                </div>

              

            </div>
        </section>
        <!--dummy section 2 end-->



        <!--dummy section  start-->
        <section id="freecourses" class="mb-5">
            <div id="divfreecourse" class="row text-center">
                <h2 class="text-center mt-5 mb-4">Popular Free courses</h2>

                <div class="col-md-3 my-2">
                    <div class="card shadow" style=" background-repeat: no-repeat; background-size: cover; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRy36d95GCEJVlzAbMdepl_SyCKC0LMmRjAA&usqp=CAU);">
                        <div class="inner" >
                            <img class="card-img-top p-3 px-5" src="./imgs/html.png" alt="free courses">
                        </div>
                        <div class="card-body" >
                            <h4 class="card-title">Basics of HTML</h4>
                            <p class="card-text">Boost your career with better WEB skleton building</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 my-2">
                    <div class="card shadow" style=" background-repeat: no-repeat; background-size: cover; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRy36d95GCEJVlzAbMdepl_SyCKC0LMmRjAA&usqp=CAU);">
                        <div class="inner" >
                            <img class="card-img-top p-3 px-5" src="./imgs/css.png" alt="free courses">
                        </div>
                        <div class="card-body" >
                            <h4 class="card-title">Bacics of CSS</h4>
                            <p class="card-text">Make attractive responsive web pages with CSS.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 my-2">
                    <div class="card shadow" style=" background-repeat: no-repeat; background-size: cover; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRy36d95GCEJVlzAbMdepl_SyCKC0LMmRjAA&usqp=CAU);">
                        <div class="inner" >
                            <img class="card-img-top p-3 px-5" src="./imgs/js.png" alt="free courses">
                        </div>
                        <div class="card-body" >
                            <h4 class="card-title">Basics of JavaScript</h4>
                            <p class="card-text">Add functionality to your site using JS</p>
                        </div>
                    </div>
                </div>
            <!--
                <div class="col-md-3 my-2">
                    <div class="card shadow" style=" background-repeat: no-repeat; background-size: cover; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRy36d95GCEJVlzAbMdepl_SyCKC0LMmRjAA&usqp=CAU);">
                        <div class="inner" >
                            <img class="card-img-top p-3 px-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPyjGj7uiXyGJUmI7mGSqQw-zxFx4OhNxqEw&usqp=CAU" alt="free courses">
                        </div>
                        <div class="card-body" >
                            <h4 class="card-title">Basics of C++</h4>
                            <p class="card-text">Start from basics of C++ fundamentals</p>
                        </div>
                    </div>
                </div>
            -->

            </div>
        </section>
        <!--dummy section  end-->


        <div include-html="C:\xampp\htdocs\BITHACKS\timeline\timeline.html" id="timeline"></div>

 <!--
        collapse view section
        <div id="sparkle" class="container text-center">
           <div class="row justify-content-start">
              <div id="hashtags" class="col-4">
                #CyberSecurity
              </div>
              <div id="hashtags" class="col-4">
                #Hacking
              </div>
              
            </div>
            <div class="row justify-content-center">
              <div id="hashtags" class="col-4">
                #EthicalHacking
              </div>
              <div id="hashtags" class="col-4">
                #Linux
              </div>
              
            </div>
            <div class="row justify-content-end">
              <div id="hashtags" class="col-4">
                #DataSecirity
              </div>
              <div id="hashtags" class="col-4">
                #Internet
              </div>
            
              
            </div>
            <div class="row justify-content-around">
              <div id="hashtags" class="col-4">
                #DataBreach
              </div>
              <div id="hashtags" class="col-4">
                #Anonymous
              </div>
            </div>
            <div class="row justify-content-between">
              <div id="hashtags" class="col-4">
                #Internet
              </div>
              <div id="hashtags" class="col-4">
                #Ransomeware
              </div>
            </div>
            <div class="row justify-content-evenly">
              <div id="hashtags" class="col-4">
                #Pentesting
              </div>
              <div id="hashtags" class="col-4">
                #Infosec
              </div>
            </div>
          </div>


       -->
</div>


        



        

<div class="container-fluid col-10">

        <!----services-->

        <section id="services">
            <div class="row my-5">
                <h1 class="text-center mt-5">Our Services!</h1>
                <div class="col-md-4 my-2">
                    <div class="card shadow">
                        <div class="inner">
                            <img class="card-img-top " src="https://st3.depositphotos.com/10080544/35998/i/600/depositphotos_359988224-stock-photo-shield-icon-cyber-security-digital.jpg" alt="">
                        </div>            
                        <div class="card-body">
                            <h5 class="card-title">Add text here</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div> 
                </div>


                <div class="col-md-4 my-2">
                    <div class="card shadow">
                        <div class="inner">
                            <img id="servicesimg" class="card-img-top rounded" src="https://images.indianexpress.com/2018/06/hacking_111.jpg" alt="">
                        </div> 
                        <div class="card-body">
                            <h5 class="card-title">Add text here</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <!--<a href="#" type="button" class="btn btn-success my-2">Learn more</a>-->
                        </div>
                    </div> 
                </div>


                <div class="col-md-4 my-2">
                    <div class="card shadow">
                        <div class="inner">
                            <img class="card-img-top rounded" src="https://static8.depositphotos.com/1005669/1005/i/600/depositphotos_10052436-stock-photo-cyber-security.jpg" alt="">
                        </div> 
                        <div class="card-body">
                            <h5 class="card-title">Add text here</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                            </p>
                        </div>
                    </div> 
                </div>

            </div>

        </section>
</div>



        <!--table section
        <table class="table table-dark table-stripped mt-5">
            <tr class="table-primary">
                
                <td class="table-light">audi</td>
                <td class="table-light">benz</td>
                <td class="table-light">BMW</td>
                <td class="table-light">Lexus</td>
                
              </tr>

              <tr class="table-primary">
                <td class="table-light">Ford</td>
                <td class="table-light">Toyota</td>
                <td class="table-light">Hyundai</td>
                <td class="table-light">Nissan</td>
              </tr>

        </table>

        table section done-->


        

        


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <!--footer-->


    <footer id="contact" class="bg-dark text-white pt-5 pb-4">
        <div class="container  text-md-left">
            <div class="row  text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">about SKILLHUB</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Crafted by</h5>
                    <p>
                        <a href="https://www.linkedin.com/in/vasanth-s-88a73324a" target="_blank" class="text-white" style="text-decoration: none;">VASANTH S</a>
                    </p>
                    
                    

                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Developers</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Account</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;">Menu</a>
                    </p>
                    
                </div>


                <p class="text-center text-white">Powered by S.V group's</p>


            </div>

    </footer>
    

</body>
</html>
