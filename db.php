<?php

class SmarthouseDB extends mysqli {

    private static $instance = null;
    private $user = "smarthou_user";
    private $pass = "EOF7)fD_#Z#!";
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
        define('DB_PASSWORD', 'EOF7)fD_#Z#!');
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
       public function get_houses_for_sale2($house_for,$county) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND county=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("ss", $house_for,$county);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
     public function get_houses_for_sale3($house_for,$house_type) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND type_of_house=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("ss", $house_for,$house_type);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
      public function get_houses_for_sale4($house_for,$house_size) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND category=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("ss", $house_for,$house_size);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
      public function get_houses_for_sale5($house_for,$min, $max) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND actual_cost>=? AND actual_cost<=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("sss", $house_for,$min, $max);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    public function get_houses_for_sale6($house_for, $county,$house_type) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND county=? AND type_of_house=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("sss", $house_for,$county,$house_type);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    public function get_houses_for_sale7($house_for, $county,$house_size){
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND county=? AND category=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("sss", $house_for,$county,$house_size);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
      public function  get_houses_for_sale8($house_for, $min, $max,$county) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND actual_cost>=? AND actual_cost<=? AND county=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("ssss", $house_for,$min, $max,$county);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
     public function get_houses_for_sale9($house_for, $county,$house_size,$house_type){
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND county=? AND category=? AND type_of_house=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("ssss", $house_for,$county,$house_size,$house_type);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    public function  get_houses_for_sale10($house_for, $min, $max,$county,$house_type) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND actual_cost>=? AND actual_cost<=? AND county=? AND type_of_house=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("sssss", $house_for,$min, $max,$county,$house_type);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
      public function get_houses_for_sale11($house_for, $house_size, $house_type){
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND category=? AND type_of_house=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("sss", $house_for,$house_size,$house_type);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
      public function get_houses_for_sale12($house_for, $min, $max, $house_type){
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND actual_cost>=? AND actual_cost<=? AND type_of_house=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("ssss", $house_for,$min, $max,$house_type);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
     public function  get_houses_for_sale13($house_for, $min, $max, $county, $house_type,$house_size) {
        $stmt = $this->con->prepare("SELECT * FROM properties WHERE house_for=? AND actual_cost>=? AND actual_cost<=? AND county=? AND type_of_house=? AND category=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("ssssss", $house_for,$min, $max,$county,$house_type,$house_size);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
?>