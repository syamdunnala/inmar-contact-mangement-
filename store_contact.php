<?php

					$gid=$_POST['gid'];
    				$contactname=$_POST['contactname'];
    				$phonenumber=$_POST['phonenumber'];    				
    				$cmail=$_POST['cmail'];
    				$owner_email=$_COOKIE['test2'];    				

    				$conn = new mysqli('localhost', 'root', '', 'inmar');
    				// Check connection
    				if ($conn->connect_error) 
    				{
       					die("Connection failed: " . $conn->connect_error);
    				} 
    				$sql = "insert into contact_info values('$owner_email','$gid','$contactname','$phonenumber','$cmail')";
    				$result = $conn->query($sql);
    				if($result==true)
    				{
    					echo "Contact added successfully";	
    				}	
    				else
    				{
    					echo "Fail";	
    				}	


?>