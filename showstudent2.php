<?php
include ("header.php");
include ("banner.php");
include ("navigater.php");
include ("connect.php");
?>




<div class="container mt-5">
  <?php


$sql = "SELECT student_id,concat(prefix.prefix_name,stu_fname,' ',stu_lname)AS name, level_name,group_name 
FROM student02
INNER JOIN prefix ON student02.prefix_id=prefix.prefix_id
INNER JOIN level ON student02.`level_id`= level.`level_id`
INNER JOIN std_group ON student02.`group_id` = std_group.group_id";
$res = mysqli_query($conn,$sql);

if (mysqli_num_rows($res) > 0 ) {
  // output data of each row
  ?>
  <center><h1><u>รายชื่อนักเรียน</u></h1></center>
  <table class = "table table-dark table-striped" >
    <thead>
    <tr>
        <th>รหัสนักเรียน</th>
        <th>นาย ชื่อ-สกุล</th>
        <th>รหัสกลุ่ม</th>
        <th>ระดับชั้น</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
    </tr>
  </thead>
 

  <tbody>
  <?php

  while($row = mysqli_fetch_assoc($res)) {
    ?>
    <tr>
    <td><?php echo $row["student_id"] ?></td>
        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["group_name"] ?></td>
        <td><?php echo $row["level_name"] ?></td>
        <td><a href="update_student1.php?id=<?php echo $row["student_id"]?>">แก้ไข</td>
        <td><a href="delete_student.php?id=<?php echo $row["student_id"]?>">ลบ</a></td>
    </tr>
    <?php
    
    }

   ?>
   </tbody>
   </table>
   <?php
} else {
  echo "0 results";
}

?>
</div>
<script>
  $(document).ready(function(){
    alert("Hollo jquery");
    $('.table').DataTable();
  })

</script>
<?php
include ("footer.php");
?>
