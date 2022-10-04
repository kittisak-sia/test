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

$sql = "SELECT * FROM product ";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
      echo  " -code :" . $row["code"]. 
            " -Name :" . $row["name"]. 
            " -catalog :" . $row["catalog"].
            " -price :" . $row["price"]. 
            "<br>";
    }
  } else {
    echo "0 results";
  }


?>
