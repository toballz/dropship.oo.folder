<?php session_name(md5("tij453VER"));session_start();
const islive=true;

class db{
	// live
	const servername = "localhost";
	const username = (islive)?"u723978224_cocohairsig":"u723978224_cocohairsig";
	const password= (islive)?"s13rsgsa41U@64hi":"s13rsgsa41U@64hi";
	const dbname= (islive)?"u723978224_cocohairsig":"u723978224_cocohairsig";
	
	#connect2db
	public static function conn(){return mysqli_connect(self::servername,self::username,self::password,self::dbname);}
	public static function stmt($query){return mysqli_query(self::conn(),$query);}
	public static function escapeDB($klh){return mysqli_escape_string(self::conn(),trim($klh));}

}

const dirr=__dir__;
include(dirr."/i/var__function.php");
?>