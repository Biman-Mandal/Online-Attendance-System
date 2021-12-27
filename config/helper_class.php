<?php
 class Connect{
 	protected $con;
 	function __construct(){
 		ob_start();
 		$this->con=mysqli_connect("localhost","root","");
 		mysqli_select_db($this->con,"online_attendance");
 	}
 }
 class Helper_class extends Connect{
 	private $table_name;
 	/*Function name=insert_data
 	arguement list=array
 	return type=integer
 	created by=Arnab Chakraborty
 	date=14.08.2019
 	*/
 	public function insert_data($data_array){
 		$this->table_name=$data_array['table'];
 	  // print_r($data_array[0]);
 		$count=count($data_array[0]);
 		$i=1;
 		$sql="insert into ".$this->table_name."(";
 		$sql1="values(";
 		foreach($data_array[0] as $key=>$value){
 			if($i==$count){
 				$sql=$sql.$key;
 				$sql1=$sql1."'".$value."'";
 			}
 			else{
 				$sql=$sql.$key.",";
 				$sql1=$sql1."'".$value."',";
 			}
 			$i++;
 		}
 		$sql=$sql.") ".$sql1.")"; 		
 		return mysqli_query($this->con,$sql);
 	}

 	/*End of function insert_data*/

 	/*function name:view_data*/
 	public function view_data($data_array){
 		$this->table_name=$data_array['table'];
 		$sql="select * from ".$this->table_name;
 		$rs=mysqli_query($this->con,$sql);
 		return $rs;
 	}
 	/*end of function*/

 	/*function name:view_data_id*/
	 public function view_data_id($data){
 		$this->table_name=$data['table'];
 		$sql="select * from ".$this->table_name." where ";
 		foreach($data[0] as $key=>$value){
 			$sql=$sql.$key."='".$value."'";
 		}
 		// echo $sql;
 		$rs=mysqli_query($this->con,$sql);
 		 return $rs;
 	}
 	/*end of function*/

 	/*Update data function*/
	 public function update_data($data){
 		$this->table_name=$data['table'];
 		$count=count($data[0]);
 		$i=1;
 		$sql="update ".$this->table_name." set ";
 		$sql1="where ";
 		foreach($data[0] as $key=>$value){
 			if($i==1){
 				$sql1=$sql1.$key."='".$value."'";
 			}
 			elseif($i==$count){
 				$sql=$sql.$key."='".$value."' ";
 			}
 			else{
 				$sql=$sql.$key."='".$value."',";
 			}
 			$i++;
 		}
 		$sql=$sql.$sql1;
 		// echo $sql;
 		// die();
 		return mysqli_query($this->con,$sql);
 	}
 	/*end of function*/

 	/*delete_data function*/
 	public function delete_data($data){
 		$this->table_name=$data['table'];
 		$sql="delete from ".$this->table_name." where ";
 		foreach($data[0] as $key=>$value){
 			$sql=$sql.$key."='".$value."'";
 		}
 		return mysqli_query($this->con,$sql);
 	}
 	/*end of function*/

 	//file data save//
 	public function file_data_save($data_Array){
 		$ext=strstr($data_Array[1]['image']['name'],".");

		$img1="pics/".rand(00000,99999)."_".microtime(TRUE).$ext;

		if( $ext==".jpg" || $ext==".png" || $ext==".jpeg")
		{
			if($data_Array[1]['image']['size']<1000000)
			{
				if(move_uploaded_file($data_Array[1]['image'][' tmp_name'],$img1))
				{
				$path=array("image"=>$img1);
				$data_save=array("table"=>$data_Array['table']);
				$data=array_merge($data_Array[0],$path);
				array_push($data_save,$data);
				print_r($data_save);die();
				return $this->insert_data($data_save);

				}
				else
				{
				return "Please select another file";
				}
			}
			else
			{
				return "Please choose right size";
			}

		}
		else
		{
			return "Please choose right format file";
		}

 	}

 	public function login_check($data){
 		$this->table_name=$data['table'];
		$user=$data[0]['adminuser'];
		$pass = $data[0]['adminpassword'];
		$qry = "select `adminuser`,`adminpassword` FROM `$this->table_name` WHERE adminuser='$user'";
		return mysqli_query($this->con,$qry);
 	}

 	public function login_checkk($data){
 		$this->table_name=$data['table'];

 		$sql="select * from ".$this->table_name." where femail='".$data[0]['femail']."'";
 		// print_r($sql);
 		//echo $sql;die();
 		
 		return mysqli_query($this->con,$sql);
 	}
 	//end login function

 	//View Alloted Data
 	public function view_alloted_data(){
 		$sql="Select fac.fname,al.* from faculty as fac,alloted as al where fac.fid=al.AFaid";
 		return mysqli_query($this->con,$sql);
 	}
 	public function view_alloted_data_update(){
 		$sql="UPDATE `alloted` SET `AFaid` = 'fid' WHERE `alloted`.`Aid` = 'AFaid';";
 	}

    public function viewfactsub($data){
     $this->table_name=$data['table'];
     $sql1="select * from ".$this->table_name." where fname='".$data[0]['fname'];
     return mysqli_query($this->con,$sql1);
    }

    public function view_attendance_data($id){
 		$sql="Select fac.fname,stu.sname,al.* from faculty as fac , student as stu,attendence as al where fac.fid=al.AtFid AND stu.sid=al.AtSid and fac.fid=".$id;
 		return mysqli_query($this->con,$sql);
 	}

 	public function view_student($sem){
 		$sql="select * from student where sSem='".$sem."'";
 		return mysqli_query($this->con,$sql);
 	}

 	public function view_total_class($subject,$sem){
 		$sql="select count(Atid) from attendence where AtSub='".$subject."' and AtSem='".$sem."' group by AtDate";
 		//echo $sql; die();
 		$rs=mysqli_query($this->con,$sql);
 		$num=mysqli_num_rows($rs);
 		return $num;
 	}

 	public function view_total_student_class($subject,$sem,$stid){
 		$sql="select count(Atid) from attendence where AtSub='".$subject."' and AtSem='".$sem."' and AtSid='".$stid."' group by AtDate";
 		$rs=mysqli_query($this->con,$sql);
 		$num=mysqli_num_rows($rs);
 		return $num;
 	}

 	public function login_Data_Insert($data_array){
 		echo "<pre>";
 		 echo $this->table=$data_array['table'];
 		$pass=$data_array[0]['adminpassword'];
 		$user=$data_array[0]['adminuser'];
 		$option=['cost'=>12];
		$str_Pass=password_hash($pass, PASSWORD_BCRYPT,$option);
		$qry="INSERT INTO `login_tbl`(`adminuser`, `adminpassword`)VALUES('$user','$str_Pass')";
		die();
		$run=mysqli_query($this->con,$qry);
 	}
 }
