<?php
session_start();
unset($_SESSION['login_check']);
unset($_SESSION['admin']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logut</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    font-size: large;
    padding: 0;
    background-color:rgb(255, 255, 255); /* سیاه */
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
} 
    .info__title {

    font-weight: 1000;
    font-size: 20px;
    color: #fff;
    }
    .info_1 {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    width: 640px;
    padding: 24px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: start;
    background: #751818;
    border-radius: 10px;
    box-shadow: 0px 0px 5px -3px #111;
    }
</style>
<body>
<div class="info_1">
        <div class="info__title">Exit complited !</div>
    </div>
    <script>
    
        setTimeout(function(){
                location.replace("index.php");
            }, 3000); 
    </script>
</body>
</html>