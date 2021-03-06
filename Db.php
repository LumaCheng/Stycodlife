<?php
class Db {
    // The database connection
    protected static $connection;

    static $servername = 'localhost';
    static $username = 'cmpe202';
    static $password = 'coolprofsinn';
    static $dbname = "LumaDB";
    static $usertable="User";
    /**
     * Connect to the database
     *
     * return bool false on failure / mysqli MySQLi object instance on success
     */
    public function connect() {
        // Try and connect to the database
        if(!isset(self::$connection)) {
            // Load configuration as an array. Use the actual location of your configuration file
            self::$connection = mysqli_connect('localhost','cmpe202','coolprofsinn');
            //self::$connection = mysqli_connect('localhost','cmpe202','cool');
        }

        // If connection was not successful, handle the error
        if(self::$connection === false) {
          echo $connection->error();
            // Handle error - notify administrator, log to a file, show an error screen, etc.
            return false;
        }
        return self::$connection;
    }

    public function table_exist(){
      // $result = $connection -> query("SELECT 1 FROM $table LIMIT 1");
      $result = $this->query("SELECT 1 FROM LumaDB.User LIMIT 1");
          if($result->num_rows != 1) {
                $sql = "CREATE TABLE LumaDB.User (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                address VARCHAR(50),
                homephone VARCHAR(20),
                cellphone VARCHAR(20)
                )";
                $result = $this -> query($sql);
                return "create";
          }
    }

    /**
     * Query the database
     *
     * @param $query The query string
     * @return mixed The result of the mysqli::query() function
     */
    public function query($query) {
        // Connect to the database
        $connection = $this -> connect();

        // Query the database
        $result = $connection -> query($query);
        return $result;
    }

    /**
     * Fetch rows from the database (SELECT query)
     *
     * @param $query The query string
     * @return bool False on failure / array Database rows on success
     */
    public function select($query) {
        $rows = array();
        $result = $this -> query($query);
        if($result === false) {
            return false;
        }
        while ($row = $result -> fetch_assoc()) {
            $rows[] = $row;
        }
        return $result;
    }

    /**
     * Fetch the last error from the database
     *
     * @return string Database error message
     */
    public function error() {
        $connection = $this -> connect();
        return $connection -> error;
    }

    /**
     * Quote and escape value for use in a database query
     *
     * @param string $value The value to be quoted and escaped
     * @return string The quoted and escaped string
     */
    public function quote($value) {
        $connection = $this -> connect();
        return "'" . $connection -> real_escape_string($value) . "'";
    }
}
?>
