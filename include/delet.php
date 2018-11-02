<?php
ini_set('display_errors', 1);
// conect
require_once 'connectsql.php';
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

		//delete one  Activitie
 		if (isset($_POST['DeleteActivities'] ))
		{
 			$id=$_POST['DeleteActivities'];
 		        $sql = 'DELETE FROM activity WHERE activity_id='.$id;
					if (mysqli_query($conn, $sql))
					{
	 					 header("location: ../admin.activities.php?Delete=success$id");
 					} 
					else
					{
					 header("location: ../admin.activities.php?Delete=Error$id");
 					}
        }

        //delete one  children
 		if (isset($_POST['Deletechildren'] ))
		{
 			$id=$_POST['Deletechildren'];
 		        $sql = 'DELETE FROM children WHERE children_id='.$id;
					if (mysqli_query($conn, $sql))
					{
	 					 header("location: ../admin.children.php?Delete=success>>>$id");
 					} 
					else
					{
					 header("location: ../admin.children.php?Delete=Error>>>$id");
 					}
        }
 

?>