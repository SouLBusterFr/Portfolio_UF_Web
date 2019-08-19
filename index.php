<?php $siteroot = '/'; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="CV, Projects, Blog, About, Contact, Hire, Share">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Alex Portfolio - 1.0</title>
  </head>

 <!-- Body & Main Content -->

  <body>


<!-- Navbar -->


<?php include './includes/navlink.php'; ?>


<!-- Carousel -->


  <section class="firstDiv">
  <div class="welcome-video">
    <video id="myVid" width="100%" height="1100px" autoplay muted loop>
      <source src="videoplayback.webm" type="video/webm">
    </video>
  </div>
</section>
    <section class="secondDiv">
    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img\banner.jpg" class="d-block w-100" alt="Picture of me">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="under-title">About Me</h5>
          <p class="short-text">Come to check what am I able to do</p>
          <a href="CV\CV.php"><button data-word="Discover Me !" class="button" type="button" href="CV\CV.html"></button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img\banner2.jpg" class="d-block w-100" alt="Projects's Reminder">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="under-title">My Projects</h5>
          <p class="short-text">Here you can see everything i could have done so far</p>
          <a href="Projects\Projects.html"><button data-word="Click Here !" class="button"></button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img\banner3.jpg" class="d-block w-100" alt="picture of me">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="under-title">Sharing My Life !</h5>
          <a href="Blog/Blog.html"><button data-word="Hire Me Now !" class="button"></button></a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</section>

<!-- Footer -->

<?php include './includes/footer.php'; ?>

  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
