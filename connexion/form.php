<?php $siteroot = '../../portfolio';

 $errors = [];
 $missing = [];

 if (isset($_POST['submit'])) {
   $expected = ['name', 'password'];
   $required = ['name', 'password'];
   require './includes/process_log.php';
}

 ?>

<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="form-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Alex Portfolio - 1.0</title>
  </head>
  <body>

    <!-- navbar -->
    <?php include '../includes/navlink.php'; ?>

    <h1 class="head-title">Connexion</h1>

<div class="back-card p-5">

      <form class="connect text-center p-3" action="<?= $_SERVER['PHP_SELF'];?>" method="post">
        <?php if($_POST && ($suspect || isset($errors['logfail']))) : ?>
          <p class="warning">Sorry, couldn't log you in.</p>
        <?php elseif ($errors || $missing) : ?>
          <p class="check">Please check the incorrect field(s)</p>
        <?php endif; ?>

        <p class="info">Username :</p>
        <?php if ($missing && in_array('name', $missing)) : ?>
          <span class="warning">Please enter your name</span><br>
        <?php endif; ?>
        <input type="text" name="name"
        <?php

        if ($errors || $missing) {
          echo 'value="' . htmlentities($name) . '"';
        }
         ?>
         ><br>

        <p class="info">Password :</p>
        <?php if ($missing && in_array('password', $missing)) : ?>
          <span class="warning">Please enter your password</span><br>
        <?php endif; ?>
        <input type="password" name="password"
        ><br>
        <button class="btn btn-primary" name='submit' type="submit">Submit</button>
      </form>
</div>



    <!-- footer -->
    <?php include '../includes/footer.php'; ?>

  </body>
</html>
