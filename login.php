

 <?php
       $post_email=$_POST['email'];
       $post_password=$_POST['pwd'];         
       $conn = new mysqli('localhost', 'root', '', 'inmar');       	
       if($conn->connect_error) 
    	{
       	die("Connection failed:" .$conn->connect_error);
    	} 
    	$sql = "SELECT name,password FROM admin WHERE email='$post_email' AND password='$post_password'";
    	//mysql_query("INSERT INTO notice (event_date,event_type,message)VALUES(".CAST('".$today_date."'AS DATE).",'".$post_type."','".$post_msg."')") or die(mysql_error()); +
    	$result = $conn->query($sql);
    	if($result->num_rows>0)
        {
          //printf( $result);
           setcookie("test1","x", time() + (86400 * 30), "/");
          setcookie("test2",$post_email, time() + (86400 * 30), "/");
           
          header('location:dashboard.php');
        }		
    	else
    	{
    		echo "fail";
        header('location:index.html');
    	}	
    ?>
