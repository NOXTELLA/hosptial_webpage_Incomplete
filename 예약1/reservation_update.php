<head><meta content="text/html; charset=utf-8"></head>
<?php
	if ( !$con = oci_connect("B889006", "B889006", "$db_sid, "AL32UTF8"))exit();

	$sql="SELECT * FROM 예약 전공='".$_GET['전공']."'";
	$stat = oci_parse($con, $sql);
	$ret = oci_execute($stat);
	if(!$ret){  //오류라면 메시지 출력하고 종료
		echo "SQL문 오류!!!"."<br>";
		echo "<br> <a href='.\reservation_main.html'> <--초기화면</a> ";
		exit();
	}
	$row = oci_fetch_array($stat);
	$전공 = $row['전공'];
	if ($전공 == ' '){ //아이디가 없다면 출력하고 종료
		echo $_GET['전공']." 아이디의 회원이 없음!!!"."<br>";
		echo "<br> <a href='.\reservation_main.html'> <--초기화면</a>";
		exit();
	}

	$비밀번호=$row["비밀번호"];
	$전공=$row["전공"];
	$내용 = $row["내용"];
	$예약자= $row["예약자"];
	oci_free_statement($stat);
	oci_close($con);
?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 회원 정보 수정 </h1>
<FORM METHOD="post" ACTION="update_result.php">
	비밀번호 : <INPUT TYPE = "text" NAME="비밀번호" VALUE=<?php echo $비밀번호 ?> READONLY><br>
	전공 : <INPUT TYPE = "text" NAME="전공" VALUE=<?php echo $전공 ?>><br>
	내용 : <INPUT TYPE = "text" NAME="내용" VALUE=<?php echo $내용 ?>><br>
	예약자 : <INPUT TYPE = "text" NAME="예약자" VALUE=<?php echo $예약자 ?> READONLY><br>
	<BR><BR>
	<INPUT TYPE="submit" VALUE="정보 수정">
</FORM>
</BODY>
</HTML>
