<?php

$mailSent = false;

// on verifie que le formulaire ne contient aucun code malicieux
$suspect = false;
// expression régulière dans lesquelles cherchers les phrases suspectes
$pattern = '/Content-type:|Bcc:|Cc:/i';

//fonction recursive qui parcours le tableau pour vérifier les entrées du formulaires
//le troisième argument est passé par référence
function isSuspect($value, $pattern, &$suspect) {
  if (is_array($value)) {
    foreach ($value as $item) {
      isSuspect($item, $pattern, $suspect);
    }
  } else {
    if (preg_match($pattern, $value)) {
      $suspect = true;
    }
  }
}

//On verifie le tableau en $_POST
isSuspect($_POST, $pattern, $suspect);

// Envoie le formulaire seulement si il n'y a rien de suspect
if (!$suspect) :
  foreach ($_POST as $key => $value) {
    // Verifie si les entrées on ne sont pas vides
    // réassigne les éléments saisies qui sont valides
    $value = is_array($value) ? $value : trim($value);
    if (empty($value) && in_array($key, $required)) {
      $missing[] = $key;
      $$key = '';
    } elseif (in_array($key, $expected)) {
      $$key = $value;
    }
  }
  // Valide le mail de l'utilisateur
  if (!$missing && !empty($mail)) :
      $validemail = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
      if ($validemail) {
          $headers[] = "Reply-to: $validemail";
      } else {
          $errors['mail'] = true;
      }
  endif;
  // s'il n'y a pas d'erreur, on crée l'en-tête de l'Email
  if (!$errors && !$missing) :
    $headers = implode("\r\n", $headers);
    //initialisation du message
    $message = '';
    foreach ($expected as $field) :
      if (isset($$field) && !empty($$field)) {
        $val = $$field;
      } else {
        $val = 'Not selected';
        }
        //vérifie si un tableau s'étend à une phrase contenant des virgules
        if (is_array($val)) {
          $val = implode(', ', $val);
        }
        //Remplace les "_" dans le champ 'name' par des espaces
        $field = str_replace('_', ' ', $field);
        $message .= ucfirst($field) . ": $val\r\n\r\n";
    endforeach;
    $message = wordwrap($message, 70);
    $mailSent = mail($to, $subject, $message, $headers, $authorized);
    if (!$mailSent) {
      $errors['mailfail'] = true;
    }
  endif;
endif;


 ?>
