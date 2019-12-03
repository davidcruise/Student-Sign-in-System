<?php
    header("Content-Type: text/html; charset=GB2312");
     if(isset($_COOKIE["username"])){
	echo "hello";
	}
    if($_POST["submit"]){
    	include('connect.php');
    	$name = $_POST['username'];
    	$passowrd = $_POST['password'];
    	if ($name && $passowrd){
             $sql = "select * from usr_info where username = '$name' and password='$passowrd'";
             $result = mysql_query($sql);
             $rows=mysql_num_rows($result);
             if($rows){
			//setcookie("userName",$name);
			//setcookie("password",$password);
			//echo $_COOKIE["password"];
			$lqs="update usr_info set statusin=1 where username='$name'";
			mysql_query($lqs);
                   header("refresh:0;url=hello.html");
                   exit;
             }else{
                echo "Username or Password Error!";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='index.html';},1000);
                    </script>";
             }     
    	}else{
                echo "Username or Password can't be NULL.";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='index.html';},1000);
                      </script>";
    		}
    	mysql_close();
	}
?>