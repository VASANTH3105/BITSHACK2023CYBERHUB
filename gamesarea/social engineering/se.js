
  $(document).ready(function() {
    $('#threat-list li').click(function() {
      var description = $(this).data('description');
      $('#threat-description').text(description);
    });
  });
/*phishing*/
const phishingLinkButton = document.getElementById("phishingLink");
const ignoreEmailButton = document.getElementById("ignoreEmail");
const phishingResponse = document.getElementById("phishingResponse");

phishingLinkButton.addEventListener("click", () => {
    const userResponse = confirm("This link is suspicious. Are you sure you want to proceed?");
    if (userResponse) {
        phishingResponse.textContent = "You clicked the link and were redirected to a fake website. This is a phishing attack!";
        phishingResponse.style.color = "red";
        phishingResponse.style.display = "block";
        disablePhishingButtons();
    } else {
        phishingResponse.textContent = "You wisely decided not to click the link. It could have been a phishing attempt.";
        phishingResponse.style.color = "green";
        phishingResponse.style.display = "block";
        disablePhishingButtons();
    }
});

ignoreEmailButton.addEventListener("click", () => {
    phishingResponse.textContent = "You ignored the email. This is the correct action to take when faced with suspicious emails.";
    phishingResponse.style.color = "green";
    phishingResponse.style.display = "block";
    disablePhishingButtons();
});

function disablePhishingButtons() {
    phishingLinkButton.disabled = true;
    ignoreEmailButton.disabled = true;
}


/*baiting*/

    const downloadButton = document.getElementById("download");
    const dontDownloadButton = document.getElementById("dontDownload");
    const resultMessage = document.getElementById("result");

    downloadButton.addEventListener("click", () => {
        resultMessage.textContent = "You've downloaded the file and your system has been infected with malware.";
        resultMessage.style.color = "red";
        resultMessage.style.display = "block";
        disableButtons();
    });

    dontDownloadButton.addEventListener("click", () => {
        resultMessage.textContent = "Good decision! You've avoided a potential malware attack.";
        resultMessage.style.color = "green";
        resultMessage.style.display = "block";
        disableButtons();
    });

    function disableButtons() {
        downloadButton.disabled = true;
        dontDownloadButton.disabled = true;
    }


/*piggy script*/

    const correctPassword = "securewifi"; // Replace with the actual Wi-Fi password

    const passwordInput = document.getElementById("password");
    const connectButton = document.getElementById("connect");
    const denyButton = document.getElementById("deny");
    const successResponse = document.getElementById("successResponse");
    const failureResponse = document.getElementById("failureResponse");

    connectButton.addEventListener("click", () => {
        const enteredPassword = passwordInput.value;
        if (enteredPassword === correctPassword) {
            successResponse.style.display = "block";
            failureResponse.style.display = "none";
        } else {
            failureResponse.style.display = "block";
            successResponse.style.display = "none";
        }
    });

    denyButton.addEventListener("click", () => {
        successResponse.style.display = "block";
        failureResponse.style.display = "none";
    });
/*honey trap*/
const sendGiftButton = document.getElementById("sendGift");
const ignoreRequestButton = document.getElementById("ignoreRequest");
const honeyTrapResponse = document.getElementById("honeyTrapResponse");

sendGiftButton.addEventListener("click", () => {
    const userResponse = confirm("Sending gifts or money to someone you've only met online can be risky. Are you sure you want to proceed?");
    if (userResponse) {
        honeyTrapResponse.textContent = "You sent a gift or money to the person you met online. Be cautious, as this could be a honey trap or a romance scam.";
        honeyTrapResponse.style.color = "red";
        honeyTrapResponse.style.display = "block";
        disableHoneyTrapButtons();
    } else {
        honeyTrapResponse.textContent = "You wisely decided not to send a gift or money to the person you met online. Always be cautious with online relationships.";
        honeyTrapResponse.style.color = "green";
        honeyTrapResponse.style.display = "block";
        disableHoneyTrapButtons();
    }
});

ignoreRequestButton.addEventListener("click", () => {
    honeyTrapResponse.textContent = "You ignored the request. This is the correct action to take when faced with requests for gifts or money from someone you've only met online.";
    honeyTrapResponse.style.color = "green";
    honeyTrapResponse.style.display = "block";
    disableHoneyTrapButtons();
});

function disableHoneyTrapButtons() {
    sendGiftButton.disabled = true;
    ignoreRequestButton.disabled = true;
}
 /*watering hole*/
 const enterPassportButton = document.getElementById("enterPassport");
const seekWisdomButton = document.getElementById("seekWisdom");
const innovativeWateringHoleResponse = document.getElementById("innovativeWateringHoleResponse");

enterPassportButton.addEventListener("click", () => {
    const userResponse = confirm("To access the scrolls, you need to enter your Cyberia Passport. Are you sure you want to proceed?");
    if (userResponse) {
        innovativeWateringHoleResponse.textContent = "You entered your Cyberia Passport, but it was a trap! The gate was a phishing attempt, and your passport is now compromised.";
        innovativeWateringHoleResponse.style.color = "red";
        innovativeWateringHoleResponse.style.display = "block";
        disableWateringHoleButtons();
    } else {
        innovativeWateringHoleResponse.textContent = "You wisely decided not to enter your passport. It's essential to be cautious in the Kingdom of Cyberia.";
        innovativeWateringHoleResponse.style.color = "green";
        innovativeWateringHoleResponse.style.display = "block";
        disableWateringHoleButtons();
    }
});

seekWisdomButton.addEventListener("click", () => {
    innovativeWateringHoleResponse.textContent = "You chose to seek wisdom and avoid the gate. Remember, in the Kingdom of Cyberia, wisdom is your best defense against online traps.";
    innovativeWateringHoleResponse.style.color = "green";
    innovativeWateringHoleResponse.style.display = "block";
    disableWateringHoleButtons();
});

function disableWateringHoleButtons() {
    enterPassportButton.disabled = true;
    seekWisdomButton.disabled = true;
}


/*smishing script*/

const clickLinkButton = document.getElementById("clickLink");
const ignoreMessageButton = document.getElementById("ignoreMessage");
const smishingResponse = document.getElementById("smishingResponse");

clickLinkButton.addEventListener("click", () => {
    const userResponse = confirm("The message claims your bank account is compromised. Are you sure you want to click the link?");
    if (userResponse) {
        smishingResponse.textContent = "You clicked the link, but it was a smishing attempt. Your device may now be compromised.";
        smishingResponse.style.color = "red";
        smishingResponse.style.display = "block";
        disableSmishingButtons();
    } else {
        smishingResponse.textContent = "You wisely decided not to click the link. It's crucial to be cautious with unsolicited SMS messages.";
        smishingResponse.style.color = "green";
        smishingResponse.style.display = "block";
        disableSmishingButtons();
    }
});

ignoreMessageButton.addEventListener("click", () => {
    smishingResponse.textContent = "You ignored the message. This is the correct action to take when faced with suspicious SMS messages.";
    smishingResponse.style.color = "green";
    smishingResponse.style.display = "block";
    disableSmishingButtons();
});

function disableSmishingButtons() {
    clickLinkButton.disabled = true;
    ignoreMessageButton.disabled = true;
}

/*pretexting*/
const provideCredentialsButton = document.getElementById("provideCredentials");
const verifyIdentityButton = document.getElementById("verifyIdentity");
const pretextingResponse = document.getElementById("pretextingResponse");

provideCredentialsButton.addEventListener("click", () => {
    const userResponse = confirm("The caller claims to be from IT Support and requests your username and password. Are you sure you want to provide this information?");
    if (userResponse) {
        pretextingResponse.textContent = "You provided your credentials, but it was a pretexting attempt. Be cautious about sharing sensitive information over the phone.";
        pretextingResponse.style.color = "red";
        pretextingResponse.style.display = "block";
        disablePretextingButtons();
    } else {
        pretextingResponse.textContent = "You wisely decided not to provide your credentials. It's crucial to verify the identity of callers in such situations.";
        pretextingResponse.style.color = "green";
        pretextingResponse.style.display = "block";
        disablePretextingButtons();
    }
});

verifyIdentityButton.addEventListener("click", () => {
    pretextingResponse.textContent = "You asked the caller to verify their identity before providing any information. This is the correct action to take when faced with such requests.";
    pretextingResponse.style.color = "green";
    pretextingResponse.style.display = "block";
    disablePretextingButtons();
});

