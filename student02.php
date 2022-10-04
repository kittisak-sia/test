<?php
  include("header.php");
  include("banner.php");
  include("navigater.php");
  include("connect.php");
  ?>
  <div class="container mt-5">
  <?php
include ("connect.php");

$sql = "SELECT * FROM student02";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    ?>
    <table class = "table table-dark table-striped">
        <tr>
            <th>รหัสนักเรียน</th>
            <th>ชื่อ-นามสกุล</th>
            <th>รหัสกลุ่ม</th>
            <th>ระดับชั้น</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </tr>


    <?php
  while($row = mysqli_fetch_assoc($res)) {
    ?>
    <tr>
            <td><?php echo $row["student_id"] ?></td>
            <td><?php echo chk_perfix ($row["prefix_id"]).$row["stu_fname"]."&nbsp&nbsp&nbsp".$row["stu_lname"]?></td>
            <td><?php echo chk_level ($row["level_id"]) ?></td>
            <td><?php echo $row["group_id"] ?></td>
            <td><a href="update_stu1.php?id=<?php echo $row["student_id"] ?>">แก้ไข</a></td>
            <td><a href="delete_stu.php?id=<?php echo $row["student_id"] ?>">ลบ</a></td>
         </tr>
    <?php
    
  }
    ?>
    </table>
    <?php
} else {
  echo "0 results";
}
?>
    <div class="row"> 


    </div>
  </div>
  <?php
  include("footer.php");
function chk_perfix($id){
    global $conn;
    $sql = "SELECT * FROM prefix WHERE prefix_id = '$id'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    return $row["prefix_name"]; 
}
function chk_level($id){
    if($id=="06"){
        return "ปวช.";
    }
    if($id=="08"){
        return "ปวส.";
    }
}
?>
  ?>
</body>
</html>

