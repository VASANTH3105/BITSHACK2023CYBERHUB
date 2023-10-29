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
            loadContent("./carrierguide/content1.html"); // Replace with the actual URL
        });

        loadContentButton2.addEventListener("click", () => {
            loadContent("./carrierguide/content2.html"); // Replace with the actual URL
        });

        loadContentButton3.addEventListener("click", () => {
            loadContent("./carrierguide/content3.html"); // Replace with the actual URL
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