<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'final1401');
    
    class DB_con {
         
        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($id, $name, $phone,  $email, $country,	$currency) {
            $result = mysqli_query($this->dbcon, "INSERT INTO coe140101(id, name, phone, email, country , currency) VALUES('$id', '$name', '$phone', '$email', '$country' , '$currency' )");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM coe140101");
            return $result;
        }

        public function fetchonerecord($id) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM coe140101 WHERE id = '$id'");
            return $result;
        }

        public function update($id,$name,$phone,$email,$country,$currency) {
            $result = mysqli_query($this->dbcon, "UPDATE coe140101 SET 
                id = '$id',
                name = '$name',
                phone = '$phone',
                email = '$email',
                country = $country
                currency = '$currency'
                WHERE id = '$id'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM coe140101 WHERE id = '$userid'");
            return $deleterecord;
        }

    }
    

?>