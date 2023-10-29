<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
    header("Location: index.php");
}
if (isset($_POST["lsubmit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) { 
          if($usernameemail==$row["username"] || $usernameemail==$row["email"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
          } else {
           echo
              "<script> alert('username or email does not match'); </script>";
          }
        } else {
            echo
                "<script> alert('Password does not match'); </script>";
        }
    } else {
        echo
            "<script> alert('User not Registered'); </script>";
    }
}
if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if (mysqli_num_rows($duplicate) > 0) {
      echo
          "<script> alert('Username or Email has Already taken');</script>";
  } else {
      if ($password == $confirmpassword) {
          $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
          mysqli_query($conn, $query);
          echo
              "<script> alert('Registration Successful');</script>";
      } else {
          echo
              "<script> alert('Password doesnot match');</script>";
      }


  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CyberHub</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  </head>
  <!--css -->
 <link rel="stylesheet" href="./cascades/auth.css">
<style>
   

  </style>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="" method="post" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="./imgs/logochicon.png" alt="easyclass" />
                <h4>CyberHub</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    name="usernameemail" 
                    id="usernameemail" 
                    class="input-field"
                    
                    required
                  />
                  <label>Name/ Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="password"
                    id="password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                  <div class="hide">
                    <span id="log-pass" class="hide-view" onclick="togglePasswordVisibility()"><i class="fa-regular fa-eye-slash"></i></span>
                  </div>  


                </div>

                <input type="submit" name="lsubmit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

<!--New account section-->
            <form action="" method="post" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="./imgs/logochicon.png" alt="easyclass" />
                <h4>CyberHub</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    name="name" 
                    id="name" 
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="text"
                    name="username" 
                    id="username"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    name="email" 
                    id="email"
                    class="input-field"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="password" 
                    id="password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                  
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    name="confirmpassword" 
                    id="confirmpassword"
                    id="password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Confirm Password</label>
                  
                </div>

                <input type="submit" name="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./imgs/image1.png" class="image img-1 show" alt="" />
              <img src="./imgs/image2.png" class="image img-2" alt="" />
              <img src="./imgs/image3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Become CyberSecurity Expert</h2>
                  <h2>Master Yourself</h2>
                  <h2>Invite students CyberHub</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script>
      const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

inputs.forEach((inp) => {
  inp.addEventListener("focus", () => {
    inp.classList.add("active");
  });
  inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
  });
});

toggle_btn.forEach((btn) => {
  btn.addEventListener("click", () => {
    main.classList.toggle("sign-up-mode");
  });
});

function moveSlider() {
  let index = this.dataset.value;

  let currentImage = document.querySelector(`.img-${index}`);
  images.forEach((img) => img.classList.remove("show"));
  currentImage.classList.add("show");

  const textSlider = document.querySelector(".text-group");
  textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

  bullets.forEach((bull) => bull.classList.remove("active"));
  this.classList.add("active");
}

bullets.forEach((bullet) => {
  bullet.addEventListener("click", moveSlider);
});


function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const passicon = document.getElementById('log-pass');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passicon.innerHTML = `<i class="fa-regular fa-eye"></i>`;

            } else {
                passwordInput.type = 'password';
                if (passwordInput.value.length > 0) {
                    passicon.innerHTML = `<i class="fa-regular fa-eye-slash"></i>`;
                } else {
                    passicon.innerHTML = `<i class="fa-regular fa-eye"></i>`;
                }
            }
        }

    </script>
    <script src="https://kit.fontawesome.com/4563a7c603.js" crossorigin="anonymous"></script>
  </body>
</html>
