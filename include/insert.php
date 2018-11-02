<?php
ini_set('display_errors', 1);
// include 'footer.php';

// conect
		$dbhost = 'localhost';
		$dbuser = 'max';
		$dbpass = 'SINin0913630343&';
		$dbname = "creche";
		$conn = new mysqli(	$dbhost, $dbuser, $dbpass, $dbname);
		if ($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error)."<br>";
		} else
		{
			echo  "Connection ok    " . "<br>" ;
		}
 	 	 	 	  
		// insert new Activitie
		if (isset($_POST['SaveActivitie'] ))
		{ 
			$ActivitieName=$_POST['ActivitieName'];
			$ActivitieType=$_POST['ActivitieType'];
			$NChildrenAllowed=$_POST['NChildrenAllowed'];
			$fk_children=$_POST['fk_children'];

			
			if (!empty($ActivitieName) && !empty($ActivitieType) && !empty($NChildrenAllowed))
			{	 

				$sql = "INSERT INTO activity(activity_name,activity_type,activity_number_max_child ,fk_children) VALUES
				('$ActivitieName','$ActivitieType','$NChildrenAllowed','$fk_children')";
			 	
					if (mysqli_query($conn, $sql))
					{
	 					header("location: ../admin.activities.php?insert=success");
					} 
					else
					{
						header("location: ../admin.activities.php?insert=Error");
 					}
			}
			else
			{
					header("location: ../admin.activities.php?input=Error");
			}
		}

		
		// insert new Children
		if (isset($_POST['SaveChildren'] ))
		{
				$FirstNam=$_POST['FirstNam'];
				$LastName=$_POST['LastName'];
				$BirthDate=$_POST['BirthDate'];
				$Address=$_POST['Address'];
				$children_parents_contact=$_POST['children_parents_contact'];
				$children_remarks=$_POST['children_remarks'];
			
			
				if (!empty( $FirstNam) && !empty($LastName) && !empty($BirthDate) && !empty($Address)
				 && !empty($children_parents_contact) && !empty($children_remarks)  )
				{
				$sql1 = "INSERT INTO children(children_firstname,children_lastname,children_birthday,children_adress,children_parents_contact,children_remarks) 
				                       VALUES('$FirstNam','$LastName','$BirthDate','$Address','$children_parents_contact','$children_remarks')";
					if (mysqli_query($conn, $sql1)   )
					{
	 					header("location: ../admin.children.php?insert=success");
					} 
					else
					{
						header("location: ../admin.children.php?insert=Error");
					}

				}
		}
		else
		{
			header("location: ../admin.children.php?input=Error");
		}	





		// if (isset($_POST['childcare_history'] ))
		// {
		// 	$ch_start_date=$_POST['ch_start_date'];
		// 	$ch_end_date=$_POST['ch_end_date'];
		// 	$ch_room=$_POST['ch_room'];
		// 	$ch_bed=$_POST['ch_bed'];
		// 	$children_id=$_POST['children_id'];
		// 		if (!empty( $ch_start_date) && !empty($ch_end_date) && !empty($ch_room) && !empty($ch_bed)
		// 		 && !empty($children_id) )
		// 		{
		// 		$sql2 = "INSERT INTO childcare_history(ch_start_date,ch_end_date,ch_room,ch_bed,children_id) 
		// 	VALUES('$ch_start_date','$ch_end_date','$ch_room','$ch_bed','$children_id')";
		// 			if (mysqli_query($conn, $sql2)   )
		// 			{
	 // 					header("location: ../admin.children.php?insert=success");
		// 			} 
		// 			else
		// 			{
		// 				header("location: ../admin.children.php?insert=Error");
		// 			}
		// 		}
		// }
		// else
		// {
		// 	header("location: ../admin.children.php?input=Error");
		// }	 

 

 
?>