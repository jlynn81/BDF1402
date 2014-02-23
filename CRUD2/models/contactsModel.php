<?
include 'DB.php';

class contactsModel extends DB{
		
		public function __constract(){
			
		}
		
		public function getAll(){
			// you mean contacts?
			$sql = "select clientID, userName, password, name, organization, email, phone
			from
			Clients";
			$st = $this->db->prepare($sql);
			$st->execute();
			
			return $st->fetchAll(); 
		}
		
		public function getOne($clientID=0){
			$sql = "select * from Clients where clientID = :clientID";
			$st = $this->db->prepare($sql);
			$st->execute(array(":clientID"=>$clientID));
			
			return $st->fetchAll();
		}
		public function checkLogin($userName = '', $password=''){
		
			$sql= 'select * from Clients where userName = :username and password=:password';
			// Clients not users // your column names are wrong too
			$st = $this->db->prepare($sql);
			$st->execute(array(':username'=>$userName, ':password'=>$password));
			
			$num = $st->rowCount();
			
			if($num>0){
				$_SESSION['loggedin'] = 1;
			}else{
				$_SESSION["loggedin"] = 0;
			}
			
			return $st->fetchAll(PDO::FETCH_COLUMN,0);
		}
		
	public function logout(){

		$_SESSION['loggedin'] =0;
	}
	
	public function update($clientID=0, $name= "", $organization = "" , $email="", $phone=""){
	
	$sql = "update Clients set name = :name, organization = :organization, email = :email, phone=:phone where clientID =:clientID";
	$st = $this->db->prepare($sql);
	$st->execute(array("clientID"=>$clientID, ":name"=>$name, ":organization" => $organization, ":email"=>$email, ":phone"=> $phone));	
	} 
	
	public function delete($clientID=0){
		$sql= "delete from Clients where clientID =:clientID";
		$st = $this->db->prepare($sql);
		$st->execute(array(":clientID"=>$clientID));
		
		//$sql = "delete from Clients where clientID = :clientID";
		//$st = $this->db->prepare($sql);
		//$st->execute(array(":clientID"=>$clientID));
	}
	
	public function add( $userName = '', $password='', $name = '', $organization = '',  $email ='', $phone = ''){
		
		$sql = "insert into Clients (userName, password, name, email, phone)
							values (  :userName, :password, :name, :email, :phone)";
		$st = $this->db->prepare($sql);
		$st-> execute(array(":userName"=> $userName, ":password" => $password, ":name" => $name, ":email" => $email, ":phone"=>$phone));
		$clientId = $this->db->lastInsertId();
		
		//$sql="insert into Clients (clientID, email, phone)
		//				values (:clientID, :email, :phone)";
		//$st = $this->db->prepare($sql);
	    //$st->execute(array(":clientID"=>$clientID, ":email"=> $email, ":phone"=>$phone));
	}
	
}
?>