<?php
session_start();
$suspect = false;


function isSuspect($value, &$suspect) {
  if (is_array($value)) {
    foreach($value as $item) {
      isSuspect($item, $suspect);
    }
  }
}

isSuspect($_POST, $suspect);

if (!$suspect) :
  foreach ($_POST as $key => $value) {
    $value = is_array($value)? $value : trim($value);
    if(empty($value) && in_array($key, $required)) {
      $missing[] = $key;
      $$key = '';
    } elseif (in_array($key, $expected)) {
      $$key = $value;
  }
}

  include 'connexion.php';

  $login = ($_POST['name']);
  $password = ($_POST['password']);
  $password = hash("sha256", $password);

  $rqt = $db->prepare("SELECT * FROM login WHERE login = ? AND password = ?");
  $rqt->execute(array($login, $password));
  $usernb = $rqt->rowCount();
  $var = $rqt->fetch();

  if($usernb == 1) {
    $userinfo = $rqt->fetch();
    $_SESSION['id'] = $userinfo['id'];
    header("Location: ../admin/admin.php");
}

  elseif ($usernb != 1) {
  }

endif;?>
