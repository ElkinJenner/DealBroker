<?php
class Db{
	public static function connect(){
		$host="localhost";
		$user="root";
		$password="";
		$db="dealbroker";
		return new mysqli($host,$user,$password,$db);
	}
}
?>