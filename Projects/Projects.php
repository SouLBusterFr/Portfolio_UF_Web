<?php $siteroot = '/'; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="projects">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Projects-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900&display=swap" rel="stylesheet">
    <title>Projects</title>
  </head>
  <body>
<?php include '../includes/navlink.php'; ?>
    <!-- Div Avec Cards -->

    <h1 class="head-title">My Projects !</h1>

    <div class="cardHolder">

      <!-- Cards -->
          <div class="card">
            <div class="upper-part"></div>
            <img src="img/Project1.jpg" alt="My First Project" class="card-img-top img-fluid">
            <div class="card-body">
              <h3 class="card-title">Project #1</h3>
                <a href="1st/1st.php" class="btn btn1">Hover Me !</a>
            </div>
          </div>
          <div class="card">
            <div class="upper-part"></div>
            <img src="img/Project2.jpg" alt="My First Project" class="card-img-top img-fluid">
            <div class="card-body">
              <h3 class="card-title">Project #2</h3>
              <a href="#" class="btn btn2">Click Here!</a>
            </div>
          </div>
          <div class="card">
            <div class="upper-part"></div>
            <img src="img/Project3.jpg" alt="My First Project" class="card-img-top img-fluid">
            <div class="card-body">
              <h3 class="card-title">Project #3</h3>
              <span data-toggle="popover" data-content="Upcoming Soon !" data-placement="top">
              <a href="#" class="btn btn3" style="pointer-events: none;" disabled>Check It Now!</a>
            </span>
            </div>
          </div>

    </div>


    <!-- Footer -->

<?php include '../includes/footer.php' ?>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
</html>
