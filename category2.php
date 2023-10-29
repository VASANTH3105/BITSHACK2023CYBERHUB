<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberHub</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logochicon.png">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./assets/css/stylelite.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        #logo {
            height: 30px;
            width: 30px;
        }

        p {
            color: #070707;
        }

        h3 {
            margin-top: 15px;
        }

       
    </style>

</head>

<body>
    <!--
    cursor settings
  -->
    <div class="cursor-dot" data-cursor-dot></div>
    <div class="cursor_outline" data-cursor-outline></div>

    <?php require_once ("php/header.php"); ?>

    <!--nav bar-->

<!-- 
    <nav class="navbar navbar-expand-lg" id="navbar">
        <img id="logo" class="img-fluid md-mx-3 mx-5" src="./imgs/logochicon.png" alt="">
        <b class="bold">CyberHub<small></small> </b>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="carrierguide.html">Career Guidance</a>
                </li>
                
                
                <li class="nav-item">
                    <a class="nav-link" href="index.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav> -->



    <div class="containers">

        <h3 class="heading">
            Knowledge Check
        </h3>
        <div class="box_container">

            <div class="service-card">
                <img src="./imgs/level1.png"
                    alt="">
                <h3>QUIZ</h3>
                <p>Introduction to Security</p>
                <a href="quiz1.html" class="btn">Start Quiz  <span class="badge bg-secondary">15 ques</span></a>
            </div>

            <div class="service-card">
                <img src="./imgs/intermediatelevel.png"
                    alt="">
                <h3>QUIZ</h3>
                <p>Cyberattacks and its types</p>
                <a href="quiz2.html" class="btn">Start Quiz  <span class="badge bg-secondary">25 ques</span></a>
            </div>

            <div class="service-card">
                <img src="./imgs/advancelevel.png"
                    alt="">
                <h3>QUIZ</h3>
                <p>Advance CyberThreads</p>
                <a href="quiz3.html" class="btn">Start Quiz  <span class="badge bg-secondary">30 ques</span></a>
            </div>

            <div class="service-card">
                <img src="./imgs/expertlevel.png"
                    alt="">
                <h3>QUIZ</h3>
                <p>Cyberattack Prevention</p>
                <a href="quiz2.html" class="btn">Start Quiz  <span class="badge bg-secondary">45 ques</span></a>
            </div>



        </div>

        <h3 class="heading">
            Pratical Section
        </h3>
        <div class="box_container">

            <div class="service-card">
                <img src="./imgs/groupicon.png"
                    alt="">
                <h3>Phishing</h3>
                <p>Accessing user credentails</p>
                <a href="ilag.html" class="btn">Play <span class="badge bg-secondary">Smart learning</span></a>
            </div>

            <div class="service-card">
                <img src="./imgs/unknowncall.png"
                    alt="">
                <h3>CCNA</h3>
                <p>Social Engineering attack</p>
                <a href="cyberstory2.html" class="btn">Play <span class="badge bg-secondary">Smart learning</span></a>
            </div>

            <div class="service-card">
                <img src="./imgs/groupicon2.png"
                    alt="">
                <h3>CyberBOT</h3>
                <p>Learn with CYBERBOT</p>
                <a href="./cyberbot/cyberbot.php" class="btn">Play <span class="badge bg-secondary">Smart learning</span></a>
            </div>

            <div class="service-card">
                <img src="./imgs/groupicon.png"
                    alt="">
                <h3>CCNA</h3>
                <p>Introduction to networks</p>
                <a href="ilag.html" class="btn">Play <span class="badge bg-secondary">Smart learning</span></a>
            </div>
        </div>

        <h3 class="heading">
            Educational Games
        </h3>

        <div class="game-card m-5">
            <div class="card-icon">
                <!-- <ion-icon name="telescope-outline"></ion-icon> -->
                <img class="img-cover" src="./assets/imgs/cybermanicon.png" alt="">
            </div>
            <h3 class="h3 title">Play Instant CyberGames</h3>
            <p class="text">
                Play fun filled Cyber games get cybersecurity awarness by interactive hands-on gamefication zone...
            </p>
            <button class="card-btn" aria-label="Show More" onclick="window.location.href='game.html'">
                <ion-icon name="chevron-forward-outline"></ion-icon>

            </button>
        </div>

    </div>

   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script src=".\assets\js\script.js"></script>

</body>

</html>