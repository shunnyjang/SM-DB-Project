<?
//데이터 베이스 연결하기
include "db_info.php";
$id = $_GET[id];
$pass = $_POST[pass];

$result=mysql_query("SELECT EV_nick FROM Evaluation WHERE id=$id",
$conn);
$row=mysql_fetch_array($result);

if ($nick==$row[nick] )//비밀번호 맞는지 확인함.
{
    $query = "DELETE FROM Evaluation WHERE id=$id "; //데이터 삭제하는 쿼리문
    $result=mysql_query($query, $conn);
}
else
{
    echo ("
    <script>
    alert('비밀번호가 틀립니다.');
    history.go(-1);
    </script>
    ");
    exit;
}
?>
<center>
<meta http-equiv='Refresh' content='1; URL=list.php'>
<FONT size=2 >삭제되었습니다.</font>


