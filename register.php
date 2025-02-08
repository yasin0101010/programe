<?php
session_start();
if(isset($_POST["email"]) && isset($_POST["phone_number"] ) && isset($_POST["password"]  )){
    $a = $_POST["username"];
    $b = $_POST["email"];
    $c = $_POST["phone_number"];
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
<body>

<?php
$check_1 = mysqli_query(mysql:$connect_db,query:"INSERT INTO `user`(`username`, `gmail`, `phone_number`, `password`) VALUES ('$a','$b','$c','$d')");
mysqli_close(mysql:$connect_db);
if($check_1 == true){
    $_SESSION['login_check'] = true;
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
                location.replace("register.html");
            }, 3000); 
    </script>
    <?php
}

?>



</body>
</html>