 <?php
              $post_fname=$_POST['fname'];
              $post_phno=$_POST['phno'];
              $post_mail=$_POST['email'];
              $post_aadhar=$_POST['aadhar'];
              $post_pwd1=$_POST['pwd1'];  
              $post_pwd2=$_POST['pwd2'];        
       $conn = new mysqli('localhost', 'root', '', 'inmar');       	
       if($conn->connect_error) 
    	{
       			die("Connection failed: " . $conn->connect_error);
    	} 
    	$sql = "INSERT INTO admin VALUES('$post_fname','$post_phno','$post_mail','$post_aadhar',
      '$post_pwd1','$post_pwd2')";
    	//mysql_query("INSERT INTO notice (event_date,event_type,message)VALUES(".CAST('".$today_date."'AS DATE).",'".$post_type."','".$post_msg."')") or die(mysql_error()); 
    	$result = $conn->query($sql);
    	if($result==true)
        {
        	//echo "<h4>posted  successfully</h4>";
        	header('location:index.html');
          //window.location.assign("index.html#pagethree");
        }		
    	else
    	{
    		echo "<h4>data upload unsuccessfull </h4>".$conn->error;
        echo "<a href='register.html'>register again</a>";
    	}	
    ?>