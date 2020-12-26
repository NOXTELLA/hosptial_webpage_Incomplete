<head><meta content="text/html; charset=utf-8"></head>
<?php
	if ( !$con = oci_connect("B889006", "B889006", "$db_sid, "AL32UTF8"))exit();
	$sql = "SELECT * FROM 차트";
	$stat = oci_parse($con, $sql);
	$ret = oci_execute($stat);
	if(!$ret){  //오류라면 메시지 출력하고 종료
		echo "SQL문 오류!!!"."<br>";
		exit();
	}

	echo "<h1> 회원 조회 결과 <h1>";
	echo "<TABLE border=1>";
	echo "<TR>"
	echo "<TR>차트번호</TR><TH>환자아이디</TH><TH>의사아이디</TH><TH>진단내용</TH>";
	echo "<TH>가입일</TH><TH>수정</TH><TH>삭제</TH>";
	echo "</TR>";

	while(($row = oci_fetch_array($stat)) != false) {
		echo "<TR>";
		echo "<TD>", $row["차트번호"], "</TD>";
		echo "<TD>", $row["환자ID"], "</TD>";
		echo "<TD>", $row["의사ID"], "</TD>";
		echo "<TD>", $row["진단내용"], "</TD>";
		echo "<TD>", $row["날짜"], "</TD>";
		echo "<TD>", "<a href='update.php?의사ID=", $row["의사ID"], "'>수정</a></TD>";
		echo "<TD>", "<a href='delete.php?의사ID=", $row["의사ID"], "'>삭제</a></TD>";
		echo "</TR>";
	}
	echo "</TABLE>";
	echo "<br> <a href='.\main.html'> <--초기화면</a> ";
	oci_free_statement($stat);
	oci_close($con);
?>