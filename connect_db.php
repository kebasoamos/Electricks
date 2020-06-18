
<?php


/*error_reporting (1);
$con=mysqli_connect('localhost','root','','pharmacy')or die("cannot connect to server");
mysqli_select_db('pharmacy')or die("cannot connect to database");
*/

$servername="localhost";
$username="root";
$password="";
$dbname="pharmacy";


$conn=new mysqli($servername,$username,$password,$dbname);


if($conn -> connect_error){
	die("connection to the databse failed " .$conn -> connect_error);
}


?>