<?php

class DB
{
	private $con;
	public function __construct()
    {
		$host 	= "localhost";
		$dbname = "test";
		$user 	= "root";
		$pass 	= "";
		$this->con = new PDO("mysql:host=;dbname=$dbname", $user, $pass);
	}

	public function selectAll($sql)
	{
		$res = $this->con->query($sql);
		return $res->fetchAll();
	}

	public function select($sql)
	{
		$res = $this->con->query($sql);
		return $res->fetch();
	}
	
	public function exec($sql)
	{
		return $this->con->exec($sql);
	}

	public function lastInsertId()
	{
		return $this->con->lastInsertId();
	}
}
?>