<?php

  if (isset($_POST['ok']))
  {
    if (!empty($_POST['inputNom']))
    {
      echo "Salut " . ucfirst(strtolower($_POST['inputNom']));
    }
    else
    {
      echo "Champs vide";
    }

  }

  require '../view/v_accueil.php';
?>
