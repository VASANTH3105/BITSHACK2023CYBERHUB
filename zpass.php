<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Checker</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #f2f2f2;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .result-container {
            text-align: center;
        }

        .btn-primary {
            color: white;
            background-color: green;
            padding: 10px 20px;
            font-size: 18px;
        }

        label {
            font-size: 18px;
        }

        .form-control {
            font-size: 18px;
            padding: 10px;
        }

        /* Password strength indicators below the password input */
        .strength-indicator {
            margin-top: 10px;
        }

        .strength-weak {
            color: red;
        }

        .strength-moderate {
            color: yellow;
        }

        .strength-strong {
            color: green;
        }

        /* Reasons container */
        .reasons-container {
            margin-top: 20px;
            text-align: left;
            color: green;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Password Checker</h1>
    <div class="form-group">
        <label for="password">Enter Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
        <br>
        <br>
        <button class="btn btn-primary" id="checkPassword">Check Password</button><br>
        <!-- Password strength indicators below the password input -->
        <div class="strength-indicator" id="strengthLength"></div><br>
        <div class="strength-indicator" id="strengthUppercase"></div><br>
        <div class="strength-indicator" id="strengthLowercase"></div><br>
        <div class="strength-indicator" id="strengthDigits"></div><br>
    </div>
    
    
    <!-- Reasons container -->
    <div class="reasons-container" id="reasonsContainer"></div>
    
    <div class="result-container">
        <div id="result" class="mt-3"></div>
    </div>
</div>
<br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
<script>
    document.getElementById("password").addEventListener("input", function() {
        const userInput = document.getElementById("password").value;
        // Display separate indicators for different aspects of the password
        displayPasswordIndicators(userInput);
    });

    document.getElementById("checkPassword").addEventListener("click", function() {
        const userInput = document.getElementById("password").value;
        // Assume you have retrieved user data from your database
        const name = "vasanth";
        const dob = "31/05/2004";
        const email = "vasanth.it21@bitsathy.ac.in";
        const phoneNumber = "8825907237";

        // Check if the password contains any of the input data
        const containsUserData = checkIfContainsUserData(userInput, [name, dob, email, phoneNumber]);

        // Check password strength
        const passwordStrength = checkPasswordStrength(userInput, containsUserData);

        // Display the result
        let result = "Password Strength: " + passwordStrength.level;
        if (containsUserData) {
            result += "<br>Reasons: Contains personal information.";
        } else {
            result += "<br>Reasons: " + passwordStrength.reasons.join("<br>");
        }
        result += "<br>Estimated Time to Crack: " + passwordStrength.crackTimeDisplay;
        document.getElementById("result").innerHTML = result;
        
        // Display reasons in the reasons container
        document.getElementById("reasonsContainer").innerHTML = passwordStrength.reasons.join("<br>");
    });

    function checkIfContainsUserData(password, userDataArray) {
        for (const userData of userDataArray) {
            if (password.toLowerCase().includes(userData.toLowerCase())) {
                return true;
            }
        }
        return false;
    }

    function checkPasswordStrength(password, containsUserData) {
        
        const passwordInfo = zxcvbn(password);
        const strengthLevels = ["Weak", "Weak", "Moderate", "Strong", "Strong"];
        const strength = strengthLevels[passwordInfo.score];

        
        const reasons = passwordInfo.feedback.suggestions;

        return {
            level: strength,
            reasons: reasons,
            crackTimeDisplay: passwordInfo.crack_times_display.offline_slow_hashing_1e4_per_second,
        };
    }

    function displayPasswordIndicators(password) {
    
        const lengthIndicator = document.getElementById("strengthLength");
        const uppercaseIndicator = document.getElementById("strengthUppercase");
        const lowercaseIndicator = document.getElementById("strengthLowercase");
        const digitsIndicator = document.getElementById("strengthDigits");

    
        lengthIndicator.textContent = `Length: ${password.length >= 8 ? "Good" : "Weak"}`;
        lengthIndicator.className = password.length >= 8 ? "strength-strong" : "strength-weak";

        
        uppercaseIndicator.textContent = `Uppercase: ${/[A-Z]/.test(password) ? "Good" : "Weak"}`;
        uppercaseIndicator.className = /[A-Z]/.test(password) ? "strength-strong" : "strength-weak";

    
        lowercaseIndicator.textContent = `Lowercase: ${/[a-z]/.test(password) ? "Good" : "Weak"}`;
        lowercaseIndicator.className = /[a-z]/.test(password) ? "strength-strong" : "strength-weak";

        
        digitsIndicator.textContent = `Digits: ${/\d/.test(password) ? "Good" : "Weak"}`;
        digitsIndicator.className = /\d/.test(password) ? "strength-strong" : "strength-weak";
    }
</script>
</body>
</html>