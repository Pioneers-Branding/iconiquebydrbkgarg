<?php

	$link = mysqli_connect("localhost", "root", "", "bk");

	if(isset($_POST['submit']))
	{
	  $name = $_POST['name'];
	  $company = $_POST['company'];
	  $image = $_POST['image'];
	  $bikeinsert = "INSERT INTO services (`bike_name`, `bike_company`, `bike_image`) VALUES ('$name', '$company', '$image')";

    	$connect = mysqli_query($link, $bikeinsert);

	}

?>


<html>
	<head>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script>
			$(document).ready(function(){
			  $(".plus").click(function(){
			    $(".frm").fadeToggle();
			  });
			  $(".fa-times").click(function(){
			    $(".frm").fadeToggle();
			  });
			});
		</script>
		<style>
			body{
				padding: 10px;
				font-family: 'Turret Road', cursive;
			}

			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			td {
			  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			}

			th {
			  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			  background-color: #dddddd;
			  text-align: center;
			}

			.plus{
				background-color: #123456;
				box-shadow: 0px 0px 5px 0px blue;
				padding: 5px;
				border-radius: 2px;
				color: #FFFFFF;
				font-size: 20px;
				float: right;
			}

			.frm{
				display: none;
				border: 2px solid #123456;
				background-color: #F9F9F9;
				border-radius: 5px;
				color: #610000;
				padding: 20px 40px;
				position: absolute;
				z-index: 99;
				width: 50%;
				margin-left: 25%;
				text-align: center;
			}

			.frm h4{
				text-align: center;
				color: #810000;

			}

			.frm input{
				padding: 5px;
				width: 80%;
				border-radius: 5px;
			}

			.btn-default{
				float: right;
			}
		</style>
	</head>
	<body>
		 
		<h1 style="text-align: center; font-size: 30px;">List</h1>
		<span class="plus">
			<span><i class="fa fa-plus"></i></span>
		</span>
		<div class="frm">
			<h4>Add New Product</h4>
			<hr>
			<form action="" method="POST">
			Name:<br>
			<input type="text" name="name"/><br>
			Company:<br>
			<input type="text" name="company"/><br>
			Image:<br>
			<input type="text" name="image"/><br><br>
			<input type="submit" name="submit" value=" Enter " class="btn btn-success"/>
			<hr>
			<button class="btn btn-default"><i class="fa fa-times">Close</i></button>
			</form>
		</div>
		<?php
			$sql = "SELECT * FROM services ORDER BY service_name";
			
			if($result = mysqli_query($link, $sql)){
				if(mysqli_num_rows($result) > 0){
						echo "<table>";
						  	echo "<tr>";
							    echo "<th>S. No.</th>";
							    echo "<th>Service Name</th>";
							    echo "<th>Status</th>";
							    echo "<th>Edit</th>";
						  	echo "</tr>";
					while($row = mysqli_fetch_array($result)){
						  	echo "<tr>";
							    echo "<td>$row[id].</td>";
							    echo "<td>$row[service_name]</td>";
							    echo "<td>$row[service_status]</td>";
							    echo "<td><a href='change.php?edit=$row[id]'>Edit</a></td>";
						  	echo "</tr>";
					}
						echo "</table>";
				echo "<a href='cars.php'> Go To Cars </a>";
				 // Free result set
				        mysqli_free_result($result);
				    } else{
				        echo "No records matching your query were found.";
				    }
				} 
		?>
	</body>
</html>