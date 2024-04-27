<?php
class Connn
{
    protected  $dbc;
    private $host="localhost"; // Host name
    private $username="u633821528_goodguyng";
    private $password="PPassword12@"; // Mysql password
    private $db_name="u633821528_goodguyng"; // Database name
    


    function __construct(){
       $options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
    ];
      $host = 'localhost';
      $db   = 'u633821528_goodguyng';
      $user = 'u633821528_goodguyng';
      $pass = 'PPassword12@';
      $charset = 'utf8mb4';
      $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {
         $pdo = new \PDO($dsn, $user, $pass, $options);
         $this->dbc = $pdo;
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    }

    public function getConnection(){
        return $this->dbc;
    }






}

?>
