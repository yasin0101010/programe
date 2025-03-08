<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit files</title>
    <link rel="stylesheet" href="bootstrap.rtl.css">
    <link rel="stylesheet" href="style_moves.css">

</head>
<style>
        .form-container {
            width: 320px;
            border-radius: 0.75rem;
            background-color: #ffffff;
            padding: 2rem;
            color: #000000;
            border: 1px solid #28a745;
        }

        .title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: #28a745;
        }

        .input-group {
            margin-top: 0.25rem;
            font-size: 0.875rem;
        }

        .input-group label {
            display: block;
            color: #000000;
            margin-bottom: 4px;
        }

        .input-group input, textarea {
            width: 100%;
            border-radius: 0.375rem;
            border: 1px solid #28a745;
            outline: 0;
            background-color: #f8f9fa;
            padding: 0.75rem 1rem;
            color: #000000;
        }

        .input-group input:focus, textarea:focus {
            border-color: #218838;
        }

        .sign {
            display: block;
            width: 100%;
            background-color: #28a745;
            padding: 0.75rem;
            text-align: center;
            color: #ffffff;
            border: none;
            border-radius: 0.375rem;
            font-weight: 600;
            margin-top: 1rem;
        }
    </style>
<body dir="rtl" style="background-color: #ffffff;">
    <?php
    session_start();
    include ('footer.html');

    // Fetch existing data
    $connect_db = mysqli_connect('localhost', 'root', '', 'moves');
    $id = $_GET['id'] ?? null;
    $existing_image = '';
    $existing_video = '';
    $existing_name = '';
    $existing_time = '';

    if ($id) {
        $result = mysqli_query($connect_db, "SELECT * FROM `move` WHERE `id`='$id'");
        if ($row = mysqli_fetch_assoc($result)) {
            $existing_image = $row['pic_move'];
            $existing_video = $row['video_move'];
            $existing_name = $row['name_move'];
            $existing_time = $row['time_move'];
        } else {
            die("Record not found");
        }
    } else {
        die("Invalid ID");
    }
    ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto" style="margin-top:110px ; margin-bottom:110px;">
                <div class="form-container">
                    <p class="title">ویرایش ویدیو</p> 
                    <form class="form" action="admin_edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <label for="image">عکس (فعلی: <?php echo $existing_image ?: 'ندارد'; ?>)</label>
                            <input type="file" name="image" id="image" accept="image/*">
                        </div>
                        <div class="input-group">
                            <label for="video">ویدیو (فعلی: <?php echo $existing_video ?: 'ندارد'; ?>)</label>
                            <input type="file" name="video" id="video" accept="video/*">
                        </div>
                        <div class="input-group">
                            <label for="name">موضوع</label>
                            <input type="text" name="name" id="name" value="<?php echo $existing_name; ?>" required>
                        </div>
                        <div class="input-group">
                            <label for="time">زمان ویدیو</label>
                            <input type="text" name="time" id="time" value="<?php echo $existing_time; ?>" required>
                        </div>
                        <button class="sign">ثبت تغییرات</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["name"]) && isset($_POST["time"])) {
        $name = $_POST["name"];
        $time = $_POST["time"];
        
        // Handle image
        $imageName = "image/".basename($_FILES['image']['name']);
        $videoName = "video/".basename($_FILES['video']['name']);

        $query = "UPDATE `move` SET 
                    `pic_move`='$imageName',
                    `video_move`='$videoName',
                    `name_move`='$name',
                    `time_move`='$time' 
                WHERE `id`='$id'";

        if (mysqli_query($connect_db, $query)) {
            mysqli_close($connect_db);
            echo "<script>
                    window.location.href = 'admin.php';
                    alert('ویدیو با موفقیت ویرایش شد.');
                </script>";
        } else {
            echo "Error: " . mysqli_error($connect_db);
        }
    }
    ?>
    
    <script src="bootstrap.bundle.js"></script>
</body>
</html>