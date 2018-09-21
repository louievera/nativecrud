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
		try{
			$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->con = new PDO("mysql:host=;dbname=$dbname", $user, $pass);			
		}
		catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function selectAll($table)
	{
		$que = "SELECT * FROM ".$table;
		$res = $this->con->query($que);
		return $res->fetchAll();
	}

	public function select($sql)
	{
		$res = $this->con->query($sql);
		return $res->fetch();
	}

	public function insert($table, $data)
	{
		$columns = implode("," ,array_keys($data));
		$values = implode('","',array_values($data));

		$sql = 'INSERT INTO '.$table.'('.$columns.') 
					VALUES("'.$values.'")';

		$this->con->exec($sql);
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
