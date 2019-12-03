<?php
    header("Content-Type: text/html; charset=GB2312");
    if(!isset($_POST['submit'])){
        exit("Error!");
    }
    $name=$_POST['usernamesignup'];
    $password=$_POST['passwordsignup'];
    include('connect.php');
    $p="select id from usr_info where username='$name'";
    $r=mysql_query($p,$con);
    $res=mysql_num_rows($r);
    if($res==1){
	echo "Username has been Used.";
	echo "
		<script>
			setTimeout(function(){window.location.href='index.html';},1000);
		</script>";
    }
    else{
    $q="insert into usr_info(username,password,statusin,statusout) values ('$name','$password',0,0)";
    $reslut=mysql_query($q,$con);
   	 if (!$reslut){
        	die('Error: ' . mysql_error());
   	 }else{
       		header("refresh:0;url=welcome.html");
        	exit;
   	 }
    }
    mysql_close($con);
?>
