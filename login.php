<?php
session_start();
if(isset($_POST["username"]) && isset($_POST["password"]  )){
    $a = $_POST["username"];
    $d = $_POST["password"];
    $connect_db = mysqli_connect(hostname:"localhost", username:"root", password:"", database:"account");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register_2.css">
</head>
<body style="background-color: white;">

<?php
$check_1 = mysqli_query(mysql:$connect_db,query:"SELECT * FROM `user` WHERE `username` = '$a' and `password`='$d'");
mysqli_close(mysql:$connect_db);
$check_2 = mysqli_fetch_array($check_1);
if($check_2){
    $_SESSION['login_check'] = true;
    if($check_2['amdin']==1){
        $_SESSION['admin'] = true;
    }
    ?>
    <div class="info">
        <div class="info__title">compleate seccesful</div>
    </div>
    <script>
    
        setTimeout(function(){
                location.replace("index.php");
            }, 3000); 
    </script>
<?php    
}
else {
    ?>
    <div class="info_1">
        <div class="info__title">Error | try again!</div>
    </div>
    <script>
    
        setTimeout(function(){
                location.replace("login.html");
            }, 3000); 
    </script>
    <?php
}

?>



</body>
</html>