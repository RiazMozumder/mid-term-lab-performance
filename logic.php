<?php
session_start();
if( isset($_REQUEST['submit'])){
		$uname = $_REQUEST['uname'];
		$email = $_REQUEST['Email'];
		$male = $_REQUEST['radio1'];
			$Female = $_REQUEST['radio2'];
				$Other = $_REQUEST['radio3'];
		
}
		if(empty($uname)){
			
			echo "Please write your name!";
			
	
		}
// if ($uname.strlen>='2'){
		
	//	}
	 if(empty($uname)){
			echo "plase write your mail";
			
		}
		
if (isset($gender) && $gender=="male") 

{
	echo "checked";
}
else {
	
	echo"please selct your gender";
}		
	

?>
