<!DOCTYPE html>
<html>

<head>
    <title>Image Map with Auto-Hiding Popup</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .popup {
            border: 1px solid #fff;
            border-radius: 5px;
            display: none;
            position: fixed;
            bottom: 0; /* Place the popup at the bottom */
            left: 50%;
            transform: translateX(-50%); /* Center horizontally */
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            max-height: 60%; /* Limit the height of the popup */
            overflow-y: auto; /* Enable vertical scrolling when content exceeds height */
        }

        .fromto {
            border: 0.1px solid #bababa;
            border-radius: 4px;
            background-color: rgb(245, 251, 255);
            padding: 6px;
        }

        .msgbox {
            border: 0.1px solid #bababa;
            border-radius: 4px;
            background-color: rgb(245, 251, 255);
            padding: 6px;
            font-size: large;

        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="p-lg-5 m-lg-5">
        <?php require_once("aabot.php"); ?>
        <button class="btn btn-primary px-5" onclick="showPopup('popup1')" style="z-index: 9999;">
    Click me
</button>
    </div>
    <!-- Rest of your HTML content here -->

    <!-- Popup div for displaying content -->
    <div id="popup1" class="popup">
        <div class="msgbox">
            Msg: Hey! Lily come let's hack Alex's device and let us pull his username and Password without his
            permission.
        </div>
    </div>
<!-- 
    <div id="popup2" class="popup">
        <h4>From: Employee </h4>
        <h4>To: Cyberbot </h4>
        <p class="msgbox">
            Msg: Hi, I have sent a link to you. Click and login to Instagram and follow my new account...
        </p>
    </div> -->





    <!-- Your existing HTML here -->

    <script>
        // Define conversations for each popup
        const conversations = {
    popup1: [
        { message: "Always keep your passwords secure and never share them with anyone." },
        { message: "Be cautious of unsolicited requests for sensitive information, especially usernames and passwords." },
        { message: "Regularly update your software and systems to protect against security vulnerabilities." },
        { message: "Use strong and unique passwords for each of your accounts." },
        { message: "Be aware of phishing attempts and don't click on suspicious links or download unknown attachments." },
        { message: "If you suspect a security threat, report it to your IT department or a trusted authority." },
        { message: "Stay informed about the latest cybersecurity threats and best practices." }
    ]
};

        // Keep track of current conversation index
        const currentConversation = {};

        function speakText(text) {
            const utterance = new SpeechSynthesisUtterance(text);
            speechSynthesis.speak(utterance);
        }

        // Function to show the popup
function showPopup(popupId) {
    var popup = document.getElementById(popupId);
    popup.style.display = "block";

    const conversationContainer = popup.querySelector('.msgbox');

    // Get the conversation for this popup
    const conversation = conversations[popupId];

    if (currentConversation[popupId] === undefined) {
        currentConversation[popupId] = 0;
    } else {
        currentConversation[popupId]++;
    }

    // Render the conversation
    if (conversation && currentConversation[popupId] < conversation.length) {
        const msg = conversation[currentConversation[popupId]];
        conversationContainer.innerHTML = `<p><strong>CyberBot:</strong> ${msg.message}</p>`;

        // Speak the message text
        speakText(msg.message, function() {
            // Hide the popup when speech is completed
            hidePopup(popupId);
        });
    } else {
        conversationContainer.innerHTML = "<p>No more conversation.</p>";
    }
}

// Function to speak text and execute a callback when speech is completed
function speakText(text, callback) {
    const utterance = new SpeechSynthesisUtterance(text);
    utterance.onend = callback; // Set the callback function
    speechSynthesis.speak(utterance);
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>