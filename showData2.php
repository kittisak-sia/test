<?php
include("connect.php");

$sql = "SELECT * FROM product ";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    ?>
    <h1 align="center">รายการสินค้า</h1>
      <table border=1 align="center" width="550px" height="px">
        <tr>
          <th>รหัส</th>
          <th>ชื่อสินค้า</th>
          <th>หมวดหมู่</th>
          <th>ราคา</th>
        </tr>
    
    <?php
    while($row = mysqli_fetch_assoc($res)) {
      ?>
        <tr>
          <td><?php echo $row["code"]?></td>
          <td><?php echo $row["name"]?></td>
          <td><?php echo $row["catalog"]?></td>
          <td><?php echo $row["price"]?></td>
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
