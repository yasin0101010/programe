<?php
$key = mysqli_connect   ('localhost','root','','moves');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $show = mysqli_query($key,"DELETE FROM `move` where  `id` = '$id'");
    mysqli_close($key);
    ?>
    <script>
        
        window.location.href = 'admin.php';
        alert('ویدیو با موفقیت حذف شد.');
    </script>
    <?php
}

?>