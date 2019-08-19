<?php
$siteroot = '/';

$errors = [];
$missing = [];

if (isset($_POST['submit'])) {
    $expected = ['name', 'mail', 'message'];
    $required = ['name', 'message'];
    $to = 'alexandre.sillani@ynov.com';
    $subject = 'Feedback from Portfolio';
    $headers = [];
    $headers[] = 'From: webmaster@example.com';
    $headers[] = 'Content-type: text/plain; charset=utf-8';
    $authorized = '-falex@example.com';
    require './includes/process_mail.php';
    if ($mailSent) {
      header('Location : thanks.php');
      exit;
    }
}

?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="Contact, mail, name, description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="contact-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Alex Portfolio - 1.0</title>
</head>

<!-- Body & Main Content -->
<body>
<!-- Navbar -->


<?php include '../includes/navlink.php'; ?>


<!-- Contact Form -->

<form method="post" class="text-center border border-light p-5" action="<?= $_SERVER['PHP_SELF']; ?>">

  <p class="h4 mb-4">Contact us</p>
  <?php if($_POST && ($suspect || isset($errors['mailfail']))) : ?>
    <p class="warning">Sorry, your mail couldn't be sent.</p>
  <?php elseif ($errors || $missing) : ?>
    <p class="check">Please check the incorrect field(s)</p>
  <?php endif; ?>
  <!-- Name -->


  <?php if ($missing && in_array('name', $missing)) : ?>
      <span class="warning">Please enter your name</span>
  <?php endif; ?>
  <input type="text" id="defaultContactFormName" name="name" class="form-control mb-4" placeholder="Full Name"
    <?php
      if ($errors ||$missing) {
        echo 'value="' . htmlentities($name) .'"';
      }
     ?>
     >



  <!-- Email -->
  <?php if ($missing && in_array('mail', $missing)) : ?>
      <span class="warning">Please enter your mail</span>
    <?php elseif (isset($errors['mail'])) : ?>
      <span class="warning">Invalid mail address</span>
  <?php endif; ?>
  <input type="email" id="defaultContactFormEmail" name="mail" class="form-control mb-4" placeholder="E-mail"
  <?php
    if ($errors ||$missing) {
      echo 'value="' . htmlentities($mail) .'"';
    }
   ?>
   >

  <!-- Subject -->
  <label>Subject</label>
  <select class="browser-default custom-select mb-4" name="subject">
      <option value="" disabled>Choose option</option>
      <option value="1" selected>Feedback</option>
      <option value="2">Report a bug</option>
      <option value="3">Hiring</option>
      <option value="4">Other</option>
  </select>

  <!-- Message -->
    <?php if ($missing && in_array('message', $missing)) : ?>
        <span class="warning">Why are you contacting me for ?</span>
    <?php endif; ?>
  <div class="form-group">
      <textarea class="form-control rounded-0" name="message" id="exampleFormControlTextarea2" rows="3" placeholder="Message"><?php

      if ($errors || $missing) {
        echo htmlentities($message);
      }

       ?></textarea>
  </div>


  <!-- Send button -->
  <button class="btn btn-info btn-block" name='submit' type="submit">Send</button>

</form>
<!-- Default form contact -->

</body>
</html>
