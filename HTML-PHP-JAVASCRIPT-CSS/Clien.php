  <?php
header("Content-Type: text/html; charset=GB2312");
// ���ӷ����� �����ݿ������û��������룩
$con = mysql_connect("localhost","root","admin");
if (!$con){
// ����ʧ�� �������һ����Ϣ�����˳���ǰ�ű�
die('Could not connect: ' . mysql_error());
} else {
// �������ݿ�
$db_selected = mysql_select_db("users", $con);
// ��ѯ���
$sql = "select username,statusin,statusout from usr_info"; 
// ��ȡ���ݼ� 
$rs = mysql_query($sql,$con); 
// ��������
while($row = mysql_fetch_row($rs)) {
if($row[1]==1||$row[2]==1)
echo "<li>Username: " . $row[0] . "   Status In: " . $row[1] . "   Status Out: " . $row[2] . "</li>"; 
};
mysql_free_result($rs); 
}
mysql_close($con);
?>
