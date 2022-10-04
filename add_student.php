<?php
    include("header.php");
    include("banner.php");
    include("navigater.php");
?>


<div class="container mt-5">
    <form action="add_student_pr.php" method="post">
        <div class="mb-3 mt-3">
            <label for="std_id" class="form-label">รหัสนักเรียน:</label>
            <input type="std_id" class="form-control" id="std_id" placeholder="Enter student ID" name="std_id">
        </div>
        <div class="mb-3 mt-3">
            <label for="prefix" class="form-label">คำนำหน้าชื่อ :</label>
            <input type="prefix" class="form-control" id="prefix" placeholder="Enter prefix" name="prefix">
        </div>
        <div class="mb-3 mt-3">
            <label for="fname" class="form-label">ชื่อ:</label>
            <input type="fname" class="form-control" id="fname" placeholder="Enter fname" name="fname">
        </div>
        <div class="mb-3 mt-3">
            <label for="lname" class="form-label">นามสกุล :</label>
            <input type="lname" class="form-control" id="lname" placeholder="Enter lname" name="lname">
        </div>
        <div class="mb-3 mt-3">
            <label for="group_id" class="form-label">รหัสกลุ่ม :</label>
            <input type="group_id" class="form-control" id="group_id" placeholder="Enter group_id" name="group_id">
        </div>
        <div class="mb-3 mt-3">
            <label for="level_group" class="form-label">ระดับชั้น :</label>
            <select class="form-select" name="level_group" id="level_group">
                <option value="ปวช.1">ปวช.1</option>
                <option value="ปวช.2">ปวช.2</option>
                <option value="ปวช.3">ปวช.3</option>
                <option value="ปวส.1">ปวส.1</option>
                <option value="ปวส.2">ปวส.2</option>
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
