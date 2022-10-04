<?php
include("connect.php");
include("header.php");
include("banner.php");
include("navigater.php");

$num = $_GET['no'];
$sql = "SELECT * FROM office_material WHERE no='$num'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
 
?>

<div class="container mt-5">

    <form action="update_office_pr.php" method="post">
        <div class="mb-3 mt-3">
            <label for="no" class="form-label" >ลำดับ</label>
            <input type="no" class="form-control" id="no" name="no" value="<?php echo $row["no"]?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label" >ชื่อ</label>
            <input type="name" class="form-control" id="name" name="name" value="<?php echo $row["name"]?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="price" class="form-label" >ราคา</label>
            <input type="price" class="form-control" id="price"  name="price" value="<?php echo $row["price"]?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="unit_count" class="form-label">หน่วย</label>
            <input type="unit_count" class="form-control" id="unit_count"  name="unit_count" value="<?php echo $row["unit_count"]?>">
        </div>
        <button type="submit" class="btn btn-primary">ส่งข้อมูล</button>
    </form>
</div>


<?php
    include("footer.php");
?>

</body>
</html>