<?php require_once('config.php');
	$selected_date = $_POST['selected'];
	$slots = array('10:00 - 10:30','10:35 - 11:05','11:10 - 11:40','11:45 - 12:15','12:20 - 12:50','12:55 - 13:25','13:30 - 14:00','15:00 - 15:30','15:35 - 16:05','16:10 - 16:40','16:45 - 17:15','17:20 - 17:50','17:55 - 18:25','18:30 - 19:00');
	
	$res_sql = "SELECT time_slot FROM `consultation` where date='".$selected_date."'";	
	$query 	= mysqli_query($conn, $res_sql);
	$time_slot = array();
	while($row = mysqli_fetch_assoc($query))
	{  
		$time_slot[] = $row['time_slot'];
	}
		
	$options = array();
	foreach($slots as $key => $val){
		if(!in_array($val, $time_slot,true)){
			$options[] =  $val;
		}
	}
	echo json_encode($options);
	die;
?>