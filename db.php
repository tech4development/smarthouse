<?php

class SmarthouseDB extends mysqli {

    private static $instance = null;
    private $user = "smarthou_user";
    private $pass = "J,RUPn,*5)(.";
    private $dbName = "smarthou_house";
    private $dbHost = "localhost";

    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function __clone() {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

    public function __wakeup() {
        trigger_error('Deserializing is not allowed.', E_USER_ERROR);
    }

    private function __construct() {
        define('DB_USERNAME', 'smarthou_user'); //a10a1d_aiddist
        define('DB_PASSWORD', 'J,RUPn,*5)(.');
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'smarthou_house');
        $this->con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        return $this->con;
    }

    public function get_houses_for_sale($sale) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("s", $sale);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
       public function get_houses_for_rent($rent) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("s", $rent);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
  
    public function get_land($land) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE land_for=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("s", $land);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
      public function get_houses_for_sale1($house_for) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("s", $house_for);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
?>