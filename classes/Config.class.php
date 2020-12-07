<?php 
// this class contains configuration data

class Config{

	// database

	const DB_HOST = "localhost"; // database host or server
	const DB_NAME = "hospital"; // the actual name of the system's database [database name]
	const DB_USER = "root"; // the actual name of database user
	const DB_PASSWORD = ""; // database password


	// SYSTEM

	const SYSTEM_NAME = "EMR";
	const SLOGAN = "EMR"; // THIS CAN BE SYSTEM'S TITLE\ 

	public static function redir($page){
		header("Location: $page"); 
	}

	public static function includeD(){

	}


	public static function getMonth(){
		return 2419200;
	}


	public static function getWeek(){
		return 604800;
	}



}