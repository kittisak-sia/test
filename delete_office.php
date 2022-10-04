<?php
include("connect.php");

$id = $_GET['no'];
$sql = "DELETE FROM office_material WHERE no='$id' ";
$result = mysqli_query($conn,$sql);

if($result){
    header("location:showoffice.php");
}else {
    echo "Delete do not success";
}

?>