<?php

    include("connect.php");

    $student_id = $_POST["std_id"];
    $prefix = $_POST["prefix"];
    $fname = $_POST["fname"];
    $lname= $_POST["lname"];
    $group_id = $_POST["group_id"];
    $level_group = $_POST["level_group"];

    $sql = "UPDATE student SET prefix='$prefix', fname='$fname', lname='$lname', group_id='$group_id', level_group='$level_group' WHERE student_id = '$student_id'";
    $res = mysqli_query($conn,$sql);

    if($res){
        echo "update success";
    }else{
        echo "Error Update!!";
    }

?>