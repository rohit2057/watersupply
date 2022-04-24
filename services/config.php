<?php
  class Config{
  	  public static function getConnection(){
  	  	$conn=new mysqli("localhost","root","","watersupply");
  	  	return $conn;
  	  }
  }
?>