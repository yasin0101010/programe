<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.rtl.css">
    <link rel="stylesheet" href="style_moves.css">
    <title>add file</title>
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
</head>
<body dir="rtl" style="background-color: #ffffff;">
    <?php
    include ('footer.html');
    ?>
    <?php
    $connect_db = mysqli_connect('localhost','root','','moves');
    if(isset($_POST["name"]) && isset($_POST["time"])){
        
        $name = $_POST["name"];
        $time = $_POST["time"];

        // Get file names without uploading
        $imageName = "image/".basename($_FILES['image']['name']);
        $videoName = "video/".basename($_FILES['video']['name']);


        // Insert into database
        $query = "INSERT INTO `move`(`pic_move`, `video_move`, `name_move`, `time_move`) VALUES ('$imageName', '$videoName', '$name', '$time')";
        
        if(mysqli_query($connect_db, $query)) {
            mysqli_close($connect_db);
            echo "<script>
                    window.location.href = 'admin.php';
                    alert('اطلاعات با موفقیت ثبت شد.');
                </script>";
        } else {
            echo "Error: " . mysqli_error($connect_db);
        }
    }
    ?>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto" style="margin-top:110px ; margin-bottom:110px;">
                <div class="form-container">
                    <p class="title">ثبت اطلاعات ویدیو</p> 
                    <form class="form" action="admin_add.php" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <label for="image">عکس</label>
                            <input type="file" name="image" id="image" accept="image/*" required>
                        </div>
                        <div class="input-group">
                            <label for="video">ویدئو</label>
                            <input type="file" name="video" id="video" accept="video/*" required>
                        </div>
                        <div class="input-group">
                            <label for="name">موضوع</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="input-group">
                            <label for="time">زمان ویدیو</label>
                            <input type="text" name="time" id="time" required>
                        </div>
                        <input type="submit" class="sign" value="ثبت">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="bootstrap.bundle.js"></script>
</body>
</html>