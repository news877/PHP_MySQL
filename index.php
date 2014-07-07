<?php

include('cfg/cfg.php');
include('model/WADB.cls.php');
$db = new WADB(db_address,db_name,db_username,db_password);
if($_GET['move']!=''){
	switch($_GET['move']){
    	case 'add':
			if(count($_POST) >0){
			
				$sql = "INSERT INTO
						board_info
						(
							name,
							email,
							sex,
							content,
							create_time,
							ip				
						)
						values
						(
							'".$_POST['name']."',
							'".$_POST['email']."',
							'".$_POST['sex']."',
							'".$_POST['content']."',
							'".time()."',
							'".$_SERVER['REMOTE_ADDR']."'
							
						)";
			$db->insertRecords($sql);
			print_r($_POST);
			
		}
        	include ('view/header.php');
			include ('view/add.php');
			include ('view/footer.php');
        break;
        default;
				$sql = "select 
						*
						from
						guestboard 
						order by 
						id desc";
				$data = $db->selectRecords($sql);
				print_r($data);
			
        	include ('view/header.php');
			include ('view/show.php');
			include ('view/footer.php');
    }
}else{
	//echo 'hello';
				$sql = "select 
						*
						from
						board_info 
						order by 
						id desc";
				$data = $db->selectRecords($sql);
				print_r($data);
			include ('view/header.php');
			include ('view/show.php');
			include ('view/footer.php');
   
}

?>
