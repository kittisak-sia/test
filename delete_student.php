<?php
include("connect.php");

$id = $_GET['id'];
$sql = "DELETE FROM student WHERE student_id='$id' ";
$result = mysqli_query($conn,$sql);

if($result){
    echo "Delete Success";
}else {
    echo "Delete do not success";
}

?>