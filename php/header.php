<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberHub</title>
    <link rel="stylesheet" href="index.css">
    <style>
        #logo {
            height: 20px;
            width: 30px;
        }

        body {
            background: linear-gradient(180deg, #ffffff, #ffffff);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        nav {
            padding: 10px;
        }
    </style>
</head>
<body>
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
                    <a class="nav-link" href="enrollment.php">Category</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="./carrierguide.php">Career Guidance</a>
                </li>
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="#paidcourses">Paid courses</a>
                </li>
                -->
                <li class="nav-item">
                    <a class="nav-link" href="cart.php ">My learning path</a>
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
    
</body>
</html>