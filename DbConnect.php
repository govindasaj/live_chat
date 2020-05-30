<?php 
class DbConnect
{
	private $host="localhost";
	private $dbname="websocket";
	private $username="root";
	private $password="";
	
	function connect()
	{
		$conn=mysqli_connect($host,$username,$password,$dbname) or die('connected closed');
	}
}
?>