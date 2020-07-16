<?php
    error_reporting(-1);
    $uname = "ctf";
    $passwd = "password";
    $dbname = "test";
    echo "Username => $uname<br>Password => $passwd<br>Database => $dbname<br>";

    $conn = mysqli_connect('localhost', $uname, $passwd, $dbname);
    if ($conn)
    {
        echo "Connected to database.<br>";
    }
    else
    {
        echo "Unable to connect to database<br>".mysqli_connect_error();
    }
    phpinfo();
?>