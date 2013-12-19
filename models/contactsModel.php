<?
include 'DB.php';
class contactsModel extends DB{

	public function _constract(){
		
	}

	public function getAll(){
		
		$sql="select u.first, u.last, u.id, ud.email, ud.phone, ud.address, ud.userid from people ud on u.id=ud.id";
		
		$st=$this->db->prepare($sql);
		$st->execute ();
		
		return $st->fetchAll();
	}
	
	public function getOne($id=0){
		
		$sql="select * from people where id=:id";
		$st=$this->db->prepare($sql);
		$st->execute(array(":id"=>$id));
		
		return $st->fetchAll();
	}
	
	public function checkLogin($uname='', $password=''){
		
		$sql="select * from users where un=:uname and pass=:password";
		$st=$this->db->prepare($sql);	
		$st->execute(array(":unname"=>$uname, ":password"=>$password));
		
		$num=$st->rowCount();
		if ($num>0){
			$_SESSION['loggedin']=1;
		}else{
			$_SESSION['loggedin']=0;
		}
			return $st->fetchAll(PDO::FETCH_COLUMN, 0);
	}
	
	public function logout(){
		$_SESSION["loggedin"]=0;	
	}
	
	
	
}
	
