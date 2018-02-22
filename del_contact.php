<?php

        $data1=array();
        $cname=$_POST['cname'];
        $owner_email=$_COOKIE['test2'];
        
		$conn = new mysqli('localhost', 'root', '', 'inmar');			
		    if ($conn->connect_error) 
		    {
		    die("Connection failed: " . $conn->connect_error);
		    } 
		    
		 $sql = "DELETE  FROM contact_info WHERE owner='$owner_email' and contact_name='$cname'";
		 $result = $conn->query($sql);
		 //echo "$result";
		 if ($result==true) 
		 {
		    
		    echo "contact delted";
		 } 
		 else 
		 {
		    echo "0 results";
		 }
		 echo json_encode($data1);


?>