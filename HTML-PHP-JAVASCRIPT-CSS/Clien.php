  <?php
header("Content-Type: text/html; charset=GB2312");
// 连接服务器 （数据库名、用户名、密码）
$con = mysql_connect("localhost","root","admin");
if (!$con){
// 连接失败 函数输出一条消息，并退出当前脚本
die('Could not connect: ' . mysql_error());
} else {
// 连接数据库
$db_selected = mysql_select_db("users", $con);
// 查询语句
$sql = "select username,statusin,statusout from usr_info"; 
// 获取数据集 
$rs = mysql_query($sql,$con); 
// 遍历数据
while($row = mysql_fetch_row($rs)) {
if($row[1]==1||$row[2]==1)
echo "<li>Username: " . $row[0] . "   Status In: " . $row[1] . "   Status Out: " . $row[2] . "</li>"; 
};
mysql_free_result($rs); 
}
mysql_close($con);
?>
