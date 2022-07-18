<!-- 學員資料 -->
<?php
$type = $_POST['type'];
?>

<form method="post">

    <?php
    if ($type == 'add') {
        echo "<h3 class='text-white bg-secondary'>新增學員</h3>";
    } else {
        echo "<h3 class='text-white bg-secondary'>編輯學員</h3>";
    }
    ?>

    <p><input type="number" name="classroom" id="classroom" placeholder="請輸入班級"></p>
    <p><input type="number" name="seatnum" id="seatnum" placeholder="請輸入座號"></p>
    <p><input type="text" name="name" id="name" placeholder="請輸入姓名"></p>
    <p><input type="date" name="birthday" id="birthday"></p>
    <p>
        <?php
        if ($type == 'edit') {
            echo "<input type='hidden' name='id' id='stuId' value=''>";
        }

        ?>
        <?php
        if ($type == 'add') {

            echo "<p><input type='button' value='確認新增' onclick='create()' class='btn btn-info'></p>";
        } else {
            echo "<p><input type='button' value='確認編輯' onclick='update()' class='btn btn-success'></p>";
        }
        ?>
    </p>
    <p>
        <input type="reset" value="清除" class="btn btn-danger">
    </p>
    <p>
        <input type="button" value="取消" onclick="$('#studentForm').html('')" class="btn btn-secondary">
    </p>
</form>