<?php
  include("header.php");
  include("banner.php");
  include("navigater.php");
  include("connect.php");
?>
  <div class="container mt-5">
  <?php
include ("connect.php");

$sql = "SELECT * FROM office_material";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    ?>
    <table class = "table table-dark table-striped">
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อ</th>
            <th>ราคา</th>
            <th>หน่วย</th>
            <th></th>
            <th></th>
        </tr>


    <?php
  while($row = mysqli_fetch_assoc($res)) {
    ?>
    <tr>
            <td><?php echo $row["no"] ?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["price"] ?></td>
            <td><?php echo $row["unit_count"] ?></td>
            <td><a href="update_office.php?no=<?php echo $row["no"] ?>">แก้ไข</a></td>
            <td><a href="delete_office.php?no=<?php echo $row["no"] ?>">ลบ</a></td>
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
