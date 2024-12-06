<?php
        if(isset($_GET["gmail"]) && isset($_GET["phone_number"] ) && isset($_GET["password"]  )){
            $a = $_GET["username"];
            $b = $_GET["gmail"];
            $c = $_GET["phone_number"];
            $d = $_GET["password"];
            $max = $a;
            if ($max < $b)
                $max = $b;
            if ($max < $c)
                $max = $c;
            if ($max < $d)
                $max = $d;
        }
?>