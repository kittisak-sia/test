<?php

    include("connect.php");

    $no=$_POST['no'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $unit_count=$_POST['unit_count'];

    $sql = "UPDATE office_material SET no='$no', name='$name', price='$price', unit_count='$unit_count' WHERE no = '$no'";
    $res = mysqli_query($conn,$sql);

    if($res){
        header("location:showoffice.php");
    }else{
        echo "Error Update!!";
    }

?>