<?php

class Database {

	public static function connect()
	{
		try{
			$conn = new PDO('mysql: host=localhost; dbname=webdev', "root", "");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return "OK";
		} catch(PDOException $e) {
			echo 'ERROR: '.$e->getMessage();
			return "Deu merda";
		}
	}
}