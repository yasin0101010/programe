<?php
$key = mysqli_connect   ('localhost','root','','moves');
$show = mysqli_query($key,"SELECT * FROM `move` WHERE 1");
mysqli_close($key);
$row = mysqli_fetch_array($show); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="bootstrap.rtl.css">
    <link rel="stylesheet" href="style_moves.css">
</head>
<?php
include ('footer.html');
?>

<body dir="rtl" style="background-color: rgba(255, 255, 255, 0.85);">
    <div class="container">
        <div class="row">
            <div class="col-auto mt-2 text-center " style="border-radius: 10px;">
                <p class="h2 text-dark"> لیست کامل ویدیو ها</p>

            </div>
            <div class="col-auto mt-2">
                <a href="admin_add.php">
                    <button class="btn btn-success">Add</button>
                </a>
            </div>
            <div class="col-11">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-light">
                    <thead>
                        <tr>
                            <a href="Orginal.php">
                                <th class="text-center h1">ویدیو ها</th>
                            </a>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row){ 
                            ?>
                            <tr>
                            <td class='h3'><?php print($row['name_move'])?> 
                                <a href="admin_edit.php?id=<?php echo($row['id']);?>">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <a href="admin_del.php?id=<?php echo($row['id']);?>">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                                
                            </td>
                            </tr>
                            <?php
                            $row = mysqli_fetch_array($show);
                        }


                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="bootstrap.bundle.js"></script>
</body>
</html>