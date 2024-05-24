function generateCaptcha() {
  var num1 = Math.floor(Math.random() * 10);
  var num2 = Math.floor(Math.random() * 10);
  var solution = num1 + num2;
  document.getElementById(
    "captcha-label"
  ).textContent = `What is ${num1} + ${num2}?`;
  document.getElementById("captcha-solution").value = solution;
}

document
  .getElementById("reused_form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Validate CAPTCHA
    var userCaptcha = document.getElementById("captcha").value;
    var correctCaptcha = document.getElementById("captcha-solution").value;
    if (userCaptcha != correctCaptcha) {
      alert("Incorrect CAPTCHA answer. Please try again.");
      generateCaptcha(); // Regenerate CAPTCHA if incorrect
      return;
    }

    // If CAPTCHA is correct, proceed with sending email
    emailjs.sendForm("service_rjkj8zg", "template_6v3ohvp", this).then(
      function (response) {
        console.log("SUCCESS!", response.status, response.text);
        alert("Your message has been sent! We will contact you shortly!");
        // Reset the form and CAPTCHA
        document.getElementById("reused_form").reset();
        generateCaptcha();
      },
      function (error) {
        console.log("FAILED...", error);
        alert("Error sending your message. Please try again later.");
      }
    );
  });

// Generate CAPTCHA on page load
generateCaptcha();
