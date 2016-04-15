<?php
class DatabaseConnection
{
	function __construct()
	{
		$con = mysql_connect($host,$user,$pass);
		mysql_select_db("dbname", $con);
		if(!$con)
		{
			die("Cannot Connect To Database");
		}
		return $con;
	}
	public function close()
	{
		mysql_close();
	}
}
?>