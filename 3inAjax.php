<?php 

	if(isset($_GET['country']) && !empty($_GET['country'])){
		include('connect.php');

		$id = $_GET['country'];

		$query = "SELECT * FROM city WHERE con_id ='$id'";
		$do = mysqli_query($conn, $query);
		$count = mysqli_num_rows($do);

		if($count >0){
			while($row= mysqli_fetch_array($do)){
  
				echo '<option value= " '.$row['id'].'">'.$row['name'].' </option>'; 

			}

		}else {

			echo '<option> no city avaible </option>';
 
		}

	}else{
		echo '<h1> Error </h1>';

	}


?>