<?php
	
					$gid=$_POST['gid'];
    				$gname=$_POST['gname'];
    				$owner_email=$_POST['owner_email'];    				

    				$conn = new mysqli('localhost', 'root', '', 'inmar');
    				// Check connection
    				if ($conn->connect_error) 
    				{
       					die("Connection failed: " . $conn->connect_error);
    				} 
    				$sql = "insert into group_inf values('$owner_email','$gid','$gname')";
    				$result = $conn->query($sql);
    				if($result==true)
    				{
    					echo "user created successfully";	
    				}	
    				else
    				{
    					echo "Registration failed";	
    				}	

?>