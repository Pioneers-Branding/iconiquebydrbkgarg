<?php include('config.php'); ?>
<html>
<head>
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.css">
<title>signin</title>
</head>
<body>

<?php $msg = '';
if(isset($_POST) && !empty($_POST) && $_POST['panel_login'] == 'panel_login_yes'){
		$admin_username = 'mylogin';
		$admin_password = '125d0d502244655321fd3c3daf0dc440'; //123987
		if($admin_username == $_POST['res_username'])
		{
			$password = md5($_POST['res_password']);
			if($admin_password == $password)
			{
				$reslogin = array();
				$_SESSION['reslogin'] = array(
							'admin_id' => 1,
							'admin_username' => 'mylogin',
				);
				
				if(isset($_POST['remember_me']) && $_POST['remember_me'] == 1){
     			   $twoDays = 60 * 60 * 24 * 2 + time();
			       setcookie('res_username', $_POST['res_username'], $twoDays);
			       setcookie('res_password', $_POST['res_password'], $twoDays);
				}else{
					$twoDaysBack = time() - 60 * 60 * 24 * 2;
					setcookie('res_username', '', $twoDaysBack);
			        setcookie('res_password', '', $twoDaysBack);
				}
			}else{
				$msg = 'Invalid Password Entered !';
			}		
		}else{
			$msg = 'Invalid Username Entered !';
		}		
	} ?>

<div class="register_block" id="body-section">
  <div class="container">
  	<?php  	echo '<h3 class="msg_head">'.$msg.'</h3>';
		 if(!isset($_SESSION['reslogin']) && empty($_SESSION['reslogin'])){		 
	?>   
    <div class="col-sm-3 col-xs-12"> </div>
     <form accept-charset="utf-8" class="col-sm-6 col-xs-12 registerform" enctype="multipart/form-data" id="crudForm" method="post" action="">
     <input type="hidden" name="panel_login" id="panel_login" value="panel_login_yes" />
      <h2 class="register-heading">Sign In</h2>
      <div class="row">
        <div class="input-field col-md-12 col-sm-12 col-xs-12">
            <input id="username" name="res_username" class="form-input-box form-control" placeholder="Enter Username *" type="text" value="<?php if(isset($_COOKIE['res_username'])) echo $_COOKIE['res_username']; ?>" class="validate" required>
        </div>
        
        <div class="input-field col-md-12 col-sm-12 col-xs-12">
            <input type="password" name="res_password" class="form-input-box form-control" placeholder="Enter Password *" value="<?php if(isset($_COOKIE['res_password'])) echo $_COOKIE['res_password']; ?>" id="password" required>
            <span id="result"></span>
        </div>
       <!-- <div class="input-field col-md-12 col-sm-12 col-xs-12">
	    	 <input type="checkbox" id="remember_me" name="remember_me" value="1" checked="checked"  /> <label for="remember_me"> Remember Me </label>
    	</div>-->
        
      </div>
      <div class="clearfix"></div>
      <input type="submit" name="submitbutton" id="submitbutton" class="btn btn-primary btn-block" value="Sign In" />
    </form>    
    <style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 5px;
		  text-align: left;
		}
	</style>
        <div class="col-sm-3 col-xs-12"> </div>
    <?php } ?>
    <?php  
		 if(isset($_SESSION['reslogin']) && !empty($_SESSION['reslogin'])){
	  	    	$res_sql = "SELECT * FROM `consultation`";
				$res_query = mysqli_query($conn, $res_sql);
				$res_row = $res_query->num_rows;
	?>   
    
   
    		<div class="container" style="">
	    		<h2>Online consultation:</h2>

                <table style="width:100%">
                  <tr>
                    <th>Booking ID</th>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time slot</th>
                  </tr>
                  <?php
                    if($res_row > 0){		
					while ($row = mysqli_fetch_assoc($res_query))
                        {
                            echo '<tr><td>'.$row['booking_id'].'</td><td>'.$row['fname'].' '.$row['lname'].'</td><td>'.$row['phone'].'</td><td>'.$row['email'].'</td><td>'.$row['date'].'</td><td>'.$row['time_slot'].'</td></tr>';
                        }	
                    }
 				 ?>
                  
                </table>
            </div>
            
            
       <?php } ?>
       
       
    	
  </div>
</div>

</body>
</html>
