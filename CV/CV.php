<?php $siteroot = '/'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="skills, hacking, cybersecurity, experience, education, profil">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="CV-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Alex Portfolio - 1.0</title>
</head>

<!-- Navbar -->


<?php include '../includes/navlink.php'; ?>

  <h1 class="head-title">Sillani<br>Alexandre</h1>

  <p class="description">IT student from Ynov School <br>I'm passionate about everything that involve hacking and cybersecurity !</p>


<div class="experience">
    <p class="experience-top">Experiences</p>
    <div class="cv-layout">
    <div class="cv-item long">
      <p class="year">2018</p>
    </div>
    <div class="cv-item long">
      <p class="year">2017</p>
    </div>
    <div class="cv-item long">
      <p class="year">2016</p>
    </div>

    </div>
</div>

<div class="education">
  <p>Here are the schools that forged me !</p>
  <div class="container">
  <img class="schools" src="img/Ynov-logo.png" alt="Ynov Aix-en-Provence School">
  <img class="schools" src="img/lycee-climatique-altitude-briancon.png" alt="Briançon high school">
</div>
  </div>

  <div class="profil">
    <p class="head-profil">Profil</p>
    <div class="blog-layout">
      <p class="blog-item small">Polite</p>
      <p class="blog-item small">Ambitious</p>
      <p class="blog-item small">Flexible</p>
      <p class="blog-item small">Autonomous</p>
    </div>
  </div>

<h2 class="top-level">My skills</h2>
<p class="description">Now you can see what are my strength</p>

<div class="level-layout">

<?php
    include '../connexion/includes/connexion.php';
    if(isset($_POST['skills']) && isset($_POST['niveau_skills'])){
      $skills = $_POST['skills'];
      $nv_skills = $_POST['niveau_skills'];

      $sql = 'INSERT INTO `skills` (`skills`, `niveau_skills`) VALUES ("'.$skills.'", "'.$nv_skills.'")';
      $donnees = $db->query($sql);
      ?>
      <div id="message" class="alert alert-success alert-dismissible fade show" role="alert">
        Votre skill à bien été mis à jour
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </div>
  <?php }?>
<?php
    $reponse = $db->prepare('SELECT * FROM skills');
    $reponse->execute();
    while ($donnees = $reponse->fetch())
    {
    ?>
        <div class="level-item">
        <?php echo $donnees['skills']." :"; ?><?php echo " ".$donnees['niveau_skills']; ?><br />
      </div>
    <?php
    }
?>
</div>

<?php include '../includes/footer.php' ?>


  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
