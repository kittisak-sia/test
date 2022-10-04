<?php
$servername = "localhost";
$username = "root";
$password = "12345678" ;
$dbname = "php_65";

//Create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(!$conn){
    echo("Connection failed: " . mysqli_connect_error());
}
else{
    //echo "Connected successfully";

}
?>