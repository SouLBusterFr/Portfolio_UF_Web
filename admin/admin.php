<?php
$siteroot = '/portfolio';
if (!isset($_SESSION['id'])) {
    ?>
    <meta http-equiv="refresh" content="0:connexion/connexion.php">
<?php } ?>


<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="admin-style.css">
    <title>Admin Dashboard</title>
</head>
<body>

<!-- includes -->

<?php include '../includes/navlink.php';
?>

<!-- adding skills -->

<div class="card">
    <form action="../CV/CV.php" method="post">
        Skills: <input style="margin-left: 19px;" required type="text" name="skills"></br>
        Niveau : <input required type="text" name="niveau_skills">
        <input type="submit">
    </form>


    <?php
    include '../connexion/includes/connexion.php';

    $reponse = $db->query('SELECT * FROM `skills`');
    while ($donnees = $reponse->fetch()) {
        ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <p>
                <strong><?php echo $donnees['skills'] . ":"; ?><?php echo " " . $donnees['niveau_skills']; ?><input
                            style="margin-left: 7px;" type="submit" name="delete"
                            value="<?php echo $donnees['id']; ?>"></strong>
            </p>
        </form>
        <?php
    }
    ?>

    <?php

    if (isset($_POST['delete'])) {
        $sql = "DELETE FROM skills WHERE id = :id";
        $result = $db->prepare($sql);

        $id = $_POST['delete'];

        $result->bindParam(':id', $id, PDO::PARAM_INT);


        $result->execute();


        unset($result);
    }

    include ('../connexion/includes/connexion.php');

    if (isset($_POST['processing'])) {
        if ($_POST['title'] == "") {
            $_POST['title'] = NULL;
        }
        if ($_POST['content'] == "") {
            $_POST['content'] = NULL;
        }
        $bTitle = htmlspecialchars($_POST['title']);
        $bDesc = htmlspecialchars($_POST['content']);
    if (isset($bDesc) && isset($bTitle)) {

        $rqt = $db->prepare('INSERT INTO blog(title, content) VALUES (?, ?)');
        $rqt->execute(array($bTitle, $bDesc));
    } else {
        echo "L'envoie à la db à échouer";
    }

?>
<?php } ?>
        <form action="admin.php" method="get">
            <input type="hidden" name="action" value="ajouter">
            <input type="submit" name="" value="Ajouter une compétence">
        </form>
        <?php

    if(isset($_GET['action'])) { ?>

        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" name="title" placeholder="Titre de l'article">
            <textarea name="content" placeholder="Contenu de l'article"></textarea>
            <input type="submit" name="processing" value="ajouter">
        </form>
    <?php  }?>

</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script>
</script>
</html>
