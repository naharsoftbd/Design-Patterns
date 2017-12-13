<?php 
Class Singleton{
    private static $instance;
    public function getInstance(){
      if(!isset(Singleton::$instance)){
         return Singleton::$instance = new Singleton();
      }
	}
      
      public function getSingletonMsg(){
          echo 'Hi! This is Singleton';
      }
}

$singleton = Singleton::getInstance();
$singleton->getSingletonMsg();
?>
