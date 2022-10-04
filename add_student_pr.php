<?php
include("connect.php");
// echo print_r($_POST);


$std_id=$_POST['std_id'];
$prefix=$_POST['prefix'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$group_id=$_POST['group_id'];
$level_group=$_POST['level_group'];

$sql = "INSERT INTO student VALUES ('$std_id','$prefix','$fname','$lname','$group_id','$level_group')";
$res = mysqli_query($conn,$sql);

if ($res) {
  header("location:showstudent.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>