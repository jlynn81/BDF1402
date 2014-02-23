<?
	class DB{
	
	public function __construct(){
		
		try{
			
			$dsn = "mysql:host=localhost;dbname=BDF1401";
			$db_user = "root";
			$db_password = "root";
			
			$this->db = new PDO($dsn, $db_user, $db_password);
		}
		catch (PDOException $error) {
			var_dump($error);
		}
	}
}
?>