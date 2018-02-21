<?php

        $data1=array();
        //$gid=$_POST['gid'];
        $owner_email=$_COOKIE['test2'];
        //echo "$gid    $owner_email   hai";
		$conn = new mysqli('localhost', 'root', '', 'inmar');

		 				
		 if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		 } 
		 $sql = "SELECT * FROM contact_info WHERE owner='$owner_email'";
		 $result = $conn->query($sql);
		 if ($result->num_rows >0) 
		 {
		    
		    while($row = $result->fetch_assoc()) {
		        array_push($data1,array('contact_name'=>$row['contact_name'],'phone_number'=>$row['phonenumber'],'contact_mail'=>$row['contact_email']));
		    }
		 } else 
		 {
		    echo "0 results";
		 }
		 echo json_encode($data1);


?>