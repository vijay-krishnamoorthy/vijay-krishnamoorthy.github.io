<? php
 header("location : sorry.html");
 
$database = "contact";
$username = "root";
$password = "1234";
$server = "localhost";
//  Create a new connection to the MySQL database using PDO
$connection = mysqli_connect($server,$username,$password,$database);
// Check connection
if ($connection)
 {

	if(isset($_POST['Submit']))
		{
	$email = $_POST['email'];
	$name = $_POST['Name'];
	$comment = $_POST['Message'];
	$query = "INSERT INTO feedback(id,name,email,comment) VALUES('$email','$name','$comment')";
	if(!mysqli_query($connection,$query))
	{
		echo "query executed";
	}
	else{
		echo "not executed";
	}
}
else{
	echo "post method is not working";

}
else{
	die("Connection Error");
}

?>