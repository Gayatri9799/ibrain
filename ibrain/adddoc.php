

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="learning";


// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection

		if ($conn->connect_error) 
		{
    		die("Connection failed: " . $conn->connect_error);
		}

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
		if (isset($_POST['btnsubmit'])) 
		{   
			$dname=$_POST['name'];
			$citys=$_POST['city'];
			$states=$_POST['state'];
			$spe=$_POST['spec'];
		    $cont=$_POST['con'];
	}

     $sql="INSERT INTO adddoc(name,city,state,spec,con)VALUES('$dname','$citys','$states','$spe','$cont')";

      if(mysqli_query($conn,$sql)){
       
	     echo "<h1> Thank You For Register.....!!!</h1>";
	     

     
		}
	}
		else
		{
			echo "Error" .$sql." ".mysqli_error($conn);
		}
	
		//mysqli_close($conn);
		$conn->close();
		?>
	