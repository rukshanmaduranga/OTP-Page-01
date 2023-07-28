<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Step Verification</title>
    <link rel="stylesheet" href="assets/otp.css">

</head>
<body>

    <div class="main-box">
    <h2>Two Step Verification</h2>
    
    <form action="" class="otp-form">
    <div class="otp-input-container"></div>
   <input id="otp-f1" maxlength="1" class="otp-input" type="text" name="" autofocus  >
   <input id="otp-f2" maxlength="1" class="otp-input" type="text" name="" >
   <input id="otp-f3" maxlength="1" class="otp-input" type="text" name=""  >
   <input id="otp-f4" maxlength="1" class="otp-input" type="text" name=""  >
   <input id="otp-f5" maxlength="1" class="otp-input" type="text" name=""  >
   <input id="otp-f6" maxlength="1" class="otp-input" type="text" name=""  >
   <label  for="">Didn't receive a code? <a href="">Resend</a></label><br>
   <button id="sub-btn">Verify</button>
    </form>
    </div>
    <script>



function focusNextField() {
  var currentInput = document.activeElement;
  var nextInput = currentInput.nextElementSibling;

  if (nextInput) {
    nextInput.focus();
  }
}

document.addEventListener("input", focusNextField);


function preventLetters(event) {
  var keyCode = event.keyCode;

  if (keyCode >= 65 && keyCode <= 90) { // uppercase letters
    event.preventDefault();
  } else if (keyCode >= 97 && keyCode <= 122) { // lowercase letters
    event.preventDefault();
  }
}

document.getElementById("otp-f1").addEventListener("keypress", preventLetters);
document.getElementById("otp-f2").addEventListener("keypress", preventLetters);
document.getElementById("otp-f3").addEventListener("keypress", preventLetters);
document.getElementById("otp-f4").addEventListener("keypress", preventLetters);
document.getElementById("otp-f5").addEventListener("keypress", preventLetters);
document.getElementById("otp-f6").addEventListener("keypress", preventLetters);
    </script>
   
</body>
</html>