<?php
    header("Content-Type: text/html; charset=GB2312");
    if(!isset($_POST["submit"])){
        exit("����ִ��");
    }
    include('connect.php');
    $name = $_POST['username'];
    if ($name){
             $sql = "select * from usr_info where username = '$name'";
             $result = mysql_query($sql);
             $rows=mysql_num_rows($result);
             if($rows){
		   $lqs="update usr_info set statusin=1 where username = '$name'";
		   mysql_query($lqs);
                   header("refresh:0;url=Client.php");
                   exit;
             }else{
                echo "�û�������";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='Client.php';},1000);
                    </script>";
             }
         
    }else{
                echo "����д������";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='Client.php';},1000);
                      </script>";

    }
    mysql_close();
?>
