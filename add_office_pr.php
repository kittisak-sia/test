<?php
include("connect.php");
// echo print_r($_POST);


$no=$_POST['no'];
$name=$_POST['name'];
$price=$_POST['price'];
$unit_count=$_POST['unit_count'];

$sql = "INSERT INTO office_material VALUES ('$no','$name','$price','$unit_count')";
$res = mysqli_query($conn,$sql);

if ($res) {
  header("location:showoffice.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>