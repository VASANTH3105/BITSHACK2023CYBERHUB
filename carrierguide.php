<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Content Loader</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
    </style>
</head>

<body>

<?php require_once ("php/header.php"); ?>
    <!-- <nav class="navbar navbar-expand-lg" id="navbar">
        <img id="logo" class="img-fluid md-mx-3 mx-5" src="imgs\SHlogo.png" alt="">
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
                    <a class="nav-link" href="category.html">Category</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href=".\carrierguide\index.html">Career Guidance</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#paidcourses">Paid courses</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="index.php ">About</a>
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

    <div class="container mt-5">
        <h1 class="text-center">Experience ultimate career guidance with <br>CyberHub</h1>
        <div class="d-flex justify-content-center mt-4">
            <button id="loadContentButton1" class="btn btn-outline-success mx-2">Beginner level</button>
            <button id="loadContentButton2" class="btn btn-outline-warning mx-2">Intermediate level</button>
            <button id="loadContentButton3" class="btn btn-outline-danger mx-2">Advanced level</button>
        </div>

        <!-- Close button to hide the loaded content -->
        <div class="text-center mt-3">
            <button id="closeContentButton" class="btn btn-light" style="display: none;">Back</button>
        </div>

        <!-- Container for loaded content -->
        <div id="loadedContent" class="my-4"></div>
    </div>


    <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Contact CyberHub support 24/7</h5>
          <p class="card-text">With supporting and mentoring CyberHub team comes into leash</p>
          <a href="#" class="btn btn-primary">Contact now</a>
        </div>
       
        <div class="card-footer text-muted">
          anytime | anywhere
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <script>
        const loadContentButton1 = document.getElementById("loadContentButton1");
        const loadContentButton2 = document.getElementById("loadContentButton2");
        const loadContentButton3 = document.getElementById("loadContentButton3");
        const closeContentButton = document.getElementById("closeContentButton");
        const loadedContent = document.getElementById("loadedContent");

        const loadContent = (url) => {
            // Fetch the dynamic content HTML file
            fetch(url)
                .then(response => response.text())
                .then(content => {
                    // Insert the fetched content into the loadedContent div
                    loadedContent.innerHTML = content;
                    // Show the loaded content and close button, hide the load buttons
                    loadedContent.style.display = "block";
                    closeContentButton.style.display = "block";
                    loadContentButton1.style.display = "none";
                    loadContentButton2.style.display = "none";
                    loadContentButton3.style.display = "none";
                })
                .catch(error => {
                    console.error("Error fetching dynamic content:", error);
                });
        };

        loadContentButton1.addEventListener("click", () => {
            loadContent("./carrierguide/content4.html"); // Replace with the actual URL
        });

        loadContentButton2.addEventListener("click", () => {
            loadContent("./carrierguide/content5.html"); // Replace with the actual URL
        });

        loadContentButton3.addEventListener("click", () => {
            loadContent("./carrierguide/content6.html"); // Replace with the actual URL
        });

        closeContentButton.addEventListener("click", () => {
            // Hide the loaded content and close button, show the load buttons
            loadedContent.style.display = "none";
            closeContentButton.style.display = "none";
            loadContentButton1.style.display = "block";
            loadContentButton2.style.display = "block";
            loadContentButton3.style.display = "block";
            // Clear the loaded content
            loadedContent.innerHTML = "";
        });
    </script>
</body>

</html>