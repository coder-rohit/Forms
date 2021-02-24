<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <style>

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    input,
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    #submit {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 500px;
      margin: 20px 10px;
    }

    #err{
      color: red;
    }
  </style>
</head>

<body>

  <div class="container">
    <h3>Contact Form</h3>
    <p id="err"></p>
    <form method="POST" id="form" action="index.php">
      <label for="fname">Full Name <span style="color: red;">*</span></label>
      <input type="text" id="fname" name="fname" placeholder="Your name..">

      <label for="tel">Contact Number <span style="color: red;">*</span></label>
      <input type="tel" id="tel" name="tel" placeholder="Contact Number...">

      <label for="Email">Email <span style="color: red;">*</span></label>
      <input type="text" id="email" name="email" placeholder="Email...">


      <label for="subject">Subject</label>
      <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

      <button type="submit" id="submit" name="submit">Submit</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="script.js"></script>

</body>

</html>

<?php
    if(isset($_POST['submit'])) {
      $to = "rohit.panchal.737@gmail.com";
      $subject = "Contact Us";
      $name = $_POST['fname'];
      $email = $_POST['email'];
      $message = $_POST['message'];
    

    $body = "From: $name\n Email: $email\n Message:\n $message";
    mail($to, $subject, $body);
    echo "<script> alert('email sent successfully...');</script>";  
    }
?>