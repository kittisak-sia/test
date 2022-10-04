<?php
include("header.php");
include("banner.php");
include("navigater.php");
include("connect.php");

$sql = "SELECT * FROM student ";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    ?>
    <h1 align="center">รายการสินค้า</h1>
      <table border=1 align="center" width="550px" >
        <tr>
          <th>รหัสนักเรียน</th>
          <th>ชื่อ-สกุล</th>
          <th>รหัสกลุ่ม</th>
          <th>ระดับชั้น</th>
        </tr>
    
    <?php
    while($row = mysqli_fetch_assoc($res)) {
      ?>
        <tr>
          <td><?php echo $row["student_id"]?></td>
          <td><?php echo $row["prefix"].$row["fname"]."&nbsp;&nbsp;".$row["lname"] ?></td>
          <td><?php echo $row["group_id"]?></td>
          <td><?php echo $row["level_group"]?></td>
        </tr>
      
      <?php
      // echo  " -code :" . $row["code"]. 
      //       " -Name :" . $row["name"]. 
      //       " -catalog :" . $row["catalog"].
      //       " -price :" . $row["price"]. 
      //       "<br>";
    }
    ?>
    </table>
    <?php
  } else {
    echo "0 results";
  }


?>
