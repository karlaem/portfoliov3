<?php
Class DB {
	public static function connect(){
		//$dbDetails = parse_ini_file("../dbkarlam.ini"); 	
		//return mysqli_connect($dbDetails["host"],  $dbDetails["user"], $dbDetails["pass"], $dbDetails["dbname"]);
        return mysqli_connect("localhost", "root", "", "portfoliov2");
	}
}