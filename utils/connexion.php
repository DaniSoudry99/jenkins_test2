<?php

    /**
     *Classe singleton qui permet d'établir la connexion à la base de données
     *@author Daniel Soudry
     *
     */
    class Connexion
    {
      private static $instance;

      private $cnx;

      public static function seConnecter()
      {
        if(is_null(self::$instance))
        {
          self::$instance = new Connexion();
        }

        return self::$instance;
      }

      private function __construct()
      {
        $prm = Parametre::getInstance();
        $param = $prm->getTabPrm();

        $dbhost = $param['DB_HOST'];
        $dbdatabase = $param['DB_DATABASE'];
        $dbuser = $param['DB_USERNAME'];
        $dbpw = $param['DB_PASSWORD'];

        try
        {
          $this->cnx = new PDO('mysql:dbname='.$dbdatabase.';host='.$dbhost,$dbuser,$dbpw);
        } catch (\Exception $e)
        {
          echo "Erreur de connexion : " . $e->getMessage();
        }
      }

    /**
     *Fonction qui renvoie si la connexion à la bdd est établie ou pas
     *
     */
    public function getCnx()
    {
        return $this->cnx;
    }


}



?>
