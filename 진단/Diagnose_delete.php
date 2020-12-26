<head><meta content="text/html; charset=utf-8"></head>
<?php
	if ( !$con = oci_connect("B889006", "B889006", "$db_sid, "AL32UTF8"))exit();
	$sql = "SELECT * FROM 진단 WHERE 의사ID='".$_GET['의사ID']."'";
	$stat = oci_parse($con, $sql);
	$ret = oci_execute($stat);
	if(!$ret){  //오류라면 메시지 출력하고 종료
		echo "SQL문 오류!!!"."<br>";
		echo "<br> <a href='.\main.html'> <--초기화면</a> ";
		exit();
	}
	$row = oci_fetch_array($stat);
	$의사ID = $row['의사ID'];
	if ($의사ID == ' '){ //아이디가 없다면 출력하고 종료
		echo $_GET['의사ID']." 아이디의 회원이 없음!!!"."<br>";
		echo "<br> <a href='.\main.html'> <--초기화면</a>";
		exit();
	}
	$의사ID = $row["의사ID"];

?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 회원 삭제 </h1>
<FROM METHOD="post" ACTION="delete_result.php">
	의사아이디 : <INPUT TYPE="text" NAME="의사ID" VALUE=<?php echo $의사ID ?> READONLY> <br>
	<BR><BR>
	위 회원을 삭제하겠습니까?
	<INPUT TYPE="submit" VALUE="회원 삭제">
</BODY>