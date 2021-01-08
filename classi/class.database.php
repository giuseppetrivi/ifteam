<?php
    //classe Singleton per connessione al Database

    class Database {
      private static $instance = null;

      protected $host = '';
      protected $username = '';
      protected $password = '';
      protected $dbname = '';

      protected $conn;

      private function __construct() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if (!$conn->connect_errno) { die('ERRORE DI CONNESSIONE'); }
        else { $this->conn = $conn; }
      }

      public static function getInstance() {
        if (self::$instance==null) {
          self::$instance = new Database();
        }
        return self::$instance;
      }

      public function getConnection() { return $this->conn; }
    }
  ?>
