<?php
include("connect.php");
include("header.php");
include("banner.php");
include("navigater.php");

$id = $_GET['id'];
$sql = "SELECT * FROM student WHERE student_id='$id' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

?>

<div class="container mt-5">
    <form action="update_student_pr.php" method="post">
        <div class="mb-3 mt-3">
            <label for="std_id" class="form-label">รหัสนักเรียน:</label>
            <input type="std_id" class="form-control" id="std_id" placeholder="Enter student ID" name="std_id" value="<?php echo $row["student_id"]?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="prefix" class="form-label">คำนำหน้าชื่อ :</label>
            <input type="prefix" class="form-control" id="prefix" placeholder="Enter prefix" name="prefix" value="<?php echo $row["prefix"]?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="fname" class="form-label">ชื่อ:</label>
            <input type="fname" class="form-control" id="fname" placeholder="Enter fname" name="fname" value="<?php echo $row["fname"]?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="lname" class="form-label">นามสกุล :</label>
            <input type="lname" class="form-control" id="lname" placeholder="Enter lname" name="lname" value="<?php echo $row["lname"]?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="group_id" class="form-label">รหัสกลุ่ม :</label>
            <select class="form-select" name="group_id" id="group_id">
                <?php
                    $sql2 = "SELECT * FROM std_group";
                    $res2 = mysqli_query($conn,$sql2);
                    if(mysqli_num_rows($res2) > 0){
                        while($row2 = mysqli_fetch_assoc($res2)){
                            ?>
                            <option value="<?php echo $row2['group_id']?>"
                                <?php
                                    if($row2['group_id']==$row2['group_id']){
                                        echo "selected";
                                    }
                                ?>
                            ><?php echo $row2['group_name']?></option>
                            <?php
                        }
                    }
                ?>
            </select>
        </div>
        <div class="mb-3 mt-3">
            <label for="level_group" class="form-label">ระดับชั้น :</label>
            <select class="form-select" name="level_group" id="level_group">
                <option value="ปวช.1"
                    <?php
                        echo ($row["level_group"]=="ปวช.1")?"selected":"";//การเขียน if แบบสั้น ($row["level_group"]=="ปวช.1")?"true":"false";
                    ?>
                >ปวช.1</option>
                <option value="ปวช.2"
                    <?php
                        echo ($row["level_group"]=="ปวช.2")?"selected":"";
                    ?>
                >ปวช.2</option>
                <option value="ปวช.3"
                    <?php
                        echo ($row["level_group"]=="ปวช.3")?"selected":"";
                    ?>
                >ปวช.3</option>
                <option value="ปวส.1"
                    <?php
                        echo ($row["level_group"]=="ปวส.1")?"selected":"";
                    ?>
                >ปวส.1</option>
                <option value="ปวส.2" 
                    <?php
                        echo ($row["level_group"]=="ปวส.2")?"selected":"";
                    ?>
                >ปวส.2</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">ส่งข้อมูล</button>
    </form>
</div>


<?php
    include("footer.php");
?>

</body>
</html>
