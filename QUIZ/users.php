<?php
session_start();

class users{
	public $host ='localhost';
	public $username ='root';
	public $pass = '';
	public $dbname ='quizz';
	public $conn;
	public $data;
	public $cat;
	public $qus;
	
	public function __construct(){
		$this->conn= new mysqli($this->host ,$this->username , $this->pass, $this->dbname);
		if($this->conn->connect_errno)
		{
			die('database connection failed'.$this->conn->connect_errno);
		}
	}
	
	public function signup($data)
	{	
			$this->conn->query($data);
			return true;
	}
	
	public function signin($email , $password)
	{
		$query=$this->conn->query("select email, password from user where email='$email' and password='$password'");
		$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows > 0)
		{
			$_SESSION['email']=$email;
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function users_profile($email)
	{
		$query=$this->conn->query("select * from user where email='$email'");
		$row = $query-> fetch_array(MYSQLI_ASSOC);
		if($query->num_rows > 0)
		{
			$this->data[] = $row;
		}
		return $this->data;
	}
	
	public function cat_shows()
	{
		$query=$this->conn->query("select * from category");
		while($row = $query-> fetch_array(MYSQLI_ASSOC))
		if($query->num_rows > 0)
		{
			$this->cat[] = $row;
		}
		return $this->cat;		
	}
	
	public function qus_show($qus)
	{
		$query=$this->conn->query("select * from questions where cat_id='$qus'");
		while($row = $query-> fetch_array(MYSQLI_ASSOC))
		{
			$this->qus[] = $row;
		}
		return $this->qus;
	}
	
	public function answer($data)
	{
		$answer = implode("", $data);
		$right=0;
		$wrong=0;
		$no_answer=0;
		$query=$this->conn->query("select id , ans from questions where cat_id='".$_SESSION['cat']."'");
		while($quest = $query-> fetch_array(MYSQLI_ASSOC))
		{
			if($quest['ans']== $_POST[$quest['id']])
			{
				$right++;
			}
			elseif($_POST[$quest['id']]=="no_attempt")
			{
				$no_answer++;
			}
			else
			{
				$wrong++;
			}
		}
		$array = array();
		$array['right'] = $right;
		$array['no_answer'] = $no_answer;
		$array['wrong'] = $wrong;
		
		return $array;
		
	}
	
	public function add_quiz($rec)
	{
		$a = $this->conn->query($rec);
		return true;	
	}
	
	public function url($url)
	{
		header("location:".$url);
	}
	
	
	public function ad_login($email , $password)
	{
		$query=$this->conn->query("select email, password from admin where email='$email' and password='$password'");
		$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows > 0)
		{
			$_SESSION['email']=$email;
			return true;
		}
		else
		{
			return false;
		}
	}
	
	
}

?>