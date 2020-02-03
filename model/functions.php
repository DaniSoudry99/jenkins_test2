<?php

  /**
   *
   */
  class fonctionsUtils
  {
    static function changeFormatBdd($d)
    {
      $jour = $d[0].$d[1];
      $mois = $d[3].$d[4];
      $annee = $d[6].$d[7].$d[8].$d[9];

      $dateBdd = $annee."-".$mois."-".$jour;

      return $dateBdd;
    }

    static function changeFormatFr($d)
    {
        $jour = $d[8].$d[9];
        $mois = $d[5].$d[6];
        $annee = $d[0].$d[1].$d[2].$d[3];

        $dateFr = $jour."/".$mois."/".$annee;

        return $dateFr;
    }

    //fonction pour sauvegarder un text / number / date
    static function saveValue($input)
    {
      if (isset($_POST[$input]))
      {
        return $_POST[$input];
      }
    }

    //fonction pour sauvegarder un select
    static function saveSelect($select, $id)
    {
      if (isset($_POST[$select]) AND $_POST[$select] == $id)
      {
        return "selected";
      }
      else
      {
        return null;
      }
    }

    //fonction pour sauvegarder un checkbox
    static function saveCheck($check, $id)
    {
      if (isset($_POST[$check]) AND $_POST[$check] == $id)
      {
        return "checked";
      }
      else
      {
        return null;
      }
    }

    static function saveCheck2($check)
    {
      if (isset($_POST[$check]))
      {
        return "checked";
      }
      else
      {
        return null;
      }
    }

    //fonction qui garde le niveau d'avancement d'un input range
    static function saveRange($range)
    {
      if(isset($_POST[$range]))
      {
        return $_POST[$range];
      }
      else
      {
        return '0';
      }
    }
  }





?>
