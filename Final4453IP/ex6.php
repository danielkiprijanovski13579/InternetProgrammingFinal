<html>
<head>
<title>User Registration</title>
</head>
<body> 
<form action="ex6.php" method="post" >
<table border="0" >
<tr>
<td>Name:
</td>
</tr>
<tr>
<td>
<input type="text" name="fname"><br>
</td>
</tr>
<tr>
<td>Username:
</td>
</tr>
<tr>
<td>
<input type="text" name="uname"><br>
</td>
</tr>
<tr>
<td>Password:
</td>
</tr>
<tr>
<td>
<input type="text" name="pass"><br>
</td>
</tr>
<tr>
<td>City:
</td>
</tr>
<tr>
<td>
<input type="text" name="city"><br>
</td>
</tr>
<tr>
<td>Type of user:
</td>
</tr>
<tr>
<td>
<input type="radio" name="status1" value="free" checked> free&nbsp;
  <input type="radio" name="status1" value="basic"> basic
  <input type="radio" name="status1" value="premium"> premium
</td>
</tr>
<tr>
<td>End user Agreement
</td>
</tr>
<tr>
<td>
<input type="radio" name="status2" value="Agree" checked> Agree&nbsp;
  <input type="radio" name="status2" value="Do-not-agree"> Do not agree
</td>
</tr>
</table>
  <input type="submit" value="Submit">
</form>
<br> 


<?php
if (isset($_POST['fname'])){ 

$hostname='localhost';
$username='root';
$password='';
$database='test';

$fname;
$uname;
$pass;
$city;
$status1;
$status2;

    if (isset($_POST['fname'])){		
		$fname = $_POST['fname'];		
	}
	if (isset($_POST['uname'])){		
	$uname = $_POST['uname'];		
	}
	if (isset($_POST['pass'])){		
	$pass = $_POST['pass'];		
	}
	if (isset($_POST['city'])){		
		$city = $_POST['city'];		
	}
	if (isset($_POST['status1'])){		
		$status1 = $_POST['status1'];		
    }
    if (isset($_POST['status2'])){		
		$status2 = $_POST['status2'];		
	}
		

	$mysqli = new mysqli($hostname, $username, $password, $database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
    $sql = "INSERT INTO reservation (Name, Username, Password, City, tUser) VALUES ('".$fname."','".$uname."','".$pass."','".$city."','".$status1."');";
	//echo $sql;
    
	if(mysqli_query($mysqli,$sql)){
		echo "<br>";
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
	//$mysqli->close();
	mysqli_close($mysqli);
}
?>
</body>
 </html>