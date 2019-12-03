<?php
    header("Content-Type: text/html; charset=GB2312");
    if(!isset($_POST["submit"])){
        exit("Submit Error!");
    }
    include('connect.php');
    $sql="update usr_info set statusin=0,statusout=0";
    mysql_query($sql);
    header("refresh:0;url=Client.php");
    mysql_close();
?>
