<?php
if(isset($_GET["gmail"]) && isset($_GET["phone_number"] ) && isset($_GET["password"]  )){
    $a = $_GET["username"];
    $b = $_GET["gmail"];
    $c = $_GET["phone_number"];
    $d = $_GET["password"];
    $connect_db = mysqli_connect(hostname:"localhost", username:"root", password:"", database:"account");
    mysqli_query(mysql:$connect_db,query:"INSERT INTO `user`(`username`, `gmail`, `phone_number`, `password`) VALUES ('$a','$b','$c','$d')");
    mysqli_close(mysql:$connect_db);

}

//         <?php
// $username = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $repassword = $_POST['repassword'];

// $connect_db = mysqli_connect("localhost", "root", "", "amirhb");
// mysqli_query($connect_db, "INSERT INTO users`(`username, email, `password`) VALUES ('$username','$email','$password')");
// mysqli_close($connect_db);

// if($password != $repassword){
//     echo("<h1>رمز عبور نادرست می باشد!</h1>");
// }
// else{
//     echo("<h1>ثبت نام موفقیت آمیز</h1>");
//     echo("<p>نام کاربری: " . $username . "</p>");
//     echo("<p>ایمیل : " . $email . "</p>");
//     echo("<p>کلمه عبور: " . $password . "</p>");
//     echo("<p>تکرار کلمه عبور: " . $repassword . "</p>");
// }
// 
?>