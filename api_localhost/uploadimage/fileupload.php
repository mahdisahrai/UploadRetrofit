<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"android_db");


    
	   $name=$_POST['t1'];	   
	   $img=$_POST['upload'];
           $filename="upload/$name.jpg";
	   file_put_contents($filename,base64_decode($img));

			$qry="INSERT INTO tbl_staff(name)
			      VALUES ('$filename')";

			$res=mysqli_query($conn,$qry);
			
			if($res==true){
	                     		echo json_encode(array( "status" => "true","true" => "uploaded!"));
		        }
			else{
	                     		echo json_encode(array( "status" => "true","error" => "Failed!"));
                       }

?>
