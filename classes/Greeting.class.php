<?php

include 'config/config.php';

class Greeting
{
    public function __construct() {
        $this->name = 'John Doe';
	$this->_funcObject = new functions();
    }

    public function index() {
        echo "Hello post, {$this->name}!";
    }

    public function home() {

	//$func=new functions();
	
        $db = Flight::db();	
    
        $stmt = $db->prepare("SELECT * FROM `adminlogin`");
        $stmt->execute();

        header('Content-type: application/json');
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC), JSON_PRETTY_PRINT);
        

	/*using layout
	Flight::render('header', array('heading' => 'Hello'), 'header_content');
	Flight::render('body', array('body' => 'World'), 'body_content');
	Flight::render('layout', array('title' => 'Home Page'));
	
        //using directly to view without using any layout
	Flight::render('index.php', array('name' => 'Bob'));


	//echo $res = $this->_funcObject->$db->query('SELECT * FROM `adminlogin`', PDO::FETCH_ASSOC)*/;

    }

}
