<?php 
     
     $p1=$_GET['p1'];
     $p2=$_GET['p2'];  
     $p1=trim($p1);   
     $p2=trim($p2);   
    unset($_COOKIE[$p1]);       
    unset($_COOKIE[$p2]);
    setcookie($p1,"0", time()-3600,"/");        
    setcookie($p2,"0", time()-3600,"/");    

    echo "<h4>Logged Out</h4>";
    echo "<a href='index.html'>click here login</a>";
    //$_COOKIE["test"]="0";
    /*if(!isset($_COOKIE["test"]))
     {
    	echo "cookie is not set";
	 }
	 else 
	 {
    	//echo "Cookie '" . $cookie_name . "' is set!<br>";
    	//echo "Value is: " . $_COOKIE["test"];
    	 header("Location:demo.html");
	 }*/

?>   
