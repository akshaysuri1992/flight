<?php
   
 ini_set('display_errors', 1); 

 class functions {

    public $conn;

    public function __construct(){
        
        $this->conn = self::dbconnect(); // will call the dbconnect function automatically when the class DAL will be called everytime.
        
    }
    
    /**
     * -------------------------------------------------------
     * dbconnect function allows us to connect to the database.
     * Login Username
     * Login Password
     * Server Host name that is mysql host for now.
     * Database name
     * --------------------------------------------------------
     */
    public function dbconnect() {

	define("DBNAME", "test");
	define("DBUSER", "root");
	define("DBPASS", "welcome");

	Flight::register('db', 'PDO', array('mysql:host=localhost;dbname=' . DBNAME, DBUSER, DBPASS ));
	$conn = Flight::db();	
	
	return $conn;	
	
    }
}
