<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.rtl.css">
    <link rel="stylesheet" href="style_moves.css">
    <title>Document</title>
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
    <!-- header -->
    <?php
    session_start();
    include ('footer.html');
    ?>
    <!-- main -->
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-auto" style="margin-top:110px ; margin-bottom:110px;">
                <div class="form-container">
                    <p class="title">ویدیو</p> 
                    <form class="form" action="admin_add.php" method="post" enctype="multipart/form-data">
                        <div class="input-group">
                            <label for="image">عکس</label>
                            <input type="file" name="image" id="image" accept="image/*" required>
                        </div>
                        <div class="input-group">
                            <label for="titel">موضوع</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="input-group">
                            <label for="explain">زمان ویدیو</label>
                            <input type="text" name="time" id="time" required>
                        </div>
                        <button class="sign">ثبت</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php
    $connect_db = mysqli_connect   ('localhost','root','','moves');
    if(isset($_POST["name"] ) && isset($_POST["time"]  )){
        $c = $_POST["name"];
        $d = $_POST["time"];
        $imagePath = '';
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $targetDir = "uploads/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
            $imageName = uniqid() . basename($_FILES['image']['name']);
            $targetFile = $targetDir . $imageName;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $a = $targetFile;
            } else {
                echo "خطا در آپلود تصویر.";
                exit;
            }
        } else {
            echo "تصویر انتخاب نشده است.";
            exit;
        }
        mysqli_query(mysql:$connect_db,query:"INSERT INTO `move`(`pic_move`, `name_move`, `time_move`) VALUES ('$a','$c','$d')");
        mysqli_close(mysql:$connect_db);
        ?>
        <script>
            window.location.href = 'admin.php';
            alert('ویدیو با موفقیت ثبت شد.');
        </script>
        <?php
    }
    ?>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>
