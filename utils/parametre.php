<?php

    /**
     *Classe singleton qui permet de lire les paramètre du fichier param.ini
     *@author Daniel Soudry
     *
     */
    class Parametre
    {
      private static $instance;

      private $tabPrm;

      public static function getInstance()
      {
        if(is_null(self::$instance))
        {
          self::$instance = new Parametre();
        }

        return self::$instance;
      }

      private function __construct()
      {
        if (file_exists("param.ini"))
        {
          $this->tabPrm = parse_ini_file("param.ini");
        }
        else
        {
          if (file_exists("../param.ini"))
          {
            $this->tabPrm = parse_ini_file("../param.ini");
          }
        }

      }

      /**
       *Fonction qui renvoie les paramètres de connexion
       *
       */
    public function getTabPrm()
    {
        return $this->tabPrm;
    }

}



?>
