<?php
namespace core;

use core\DB;
use PDO;

class Model
{
	private $pdo;
	private $tableName;
	private $sql;
	private $val = null;

	public function table($tableName)
	{
		$this->pdo = DB::connection();
		$this->tableName = $tableName;
		$this->sql = "SELECT * FROM " . $this->tableName;
	}

	public function all()
	{
		try {
			$this->sql = $this->sql;
			$stmt  = $this->pdo->prepare($this->sql);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function select($cols)
	{
		$sql = $this->sql = select($this->sql, $cols);
		return $this;
	}

	public function where($col, $val)
	{
		$this->val = $val;
		$sql = $this->sql = where($this->sql, $this->val);
		return $this;
	}

	public function get()
	{
		try {
			$stmt = $this->pdo->prepare($this->sql);
			$stmt->execute([$this->val]);
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}
}