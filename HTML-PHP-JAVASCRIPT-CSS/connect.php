<?php
/*
	Project: Sign-in System
	Language: PHP
	Date: 2016-05-11
	Created by Bright
*/
    $server="localhost";
    $db_username="root";
    $db_password="admin";
    $con = mysql_connect($server,$db_username,$db_password);
    if(!$con){
        die("can't connect".mysql_error());
    }
    mysql_select_db('users',$con);
?>