<head><meta content="text/html; charset=utf-8"></head>
<?php
	if ( !$con = oci_connect("B889006", "B889006", "$db_sid, "AL32UTF8"))exit();

	$sql="SELECT * FROM 차트 의사ID='".$_GET['의사ID']."'";
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
	$차트번호=$row["차트번호"];
	$환자ID=$row["환자ID"];
	$의사ID=$row["의사ID"];
	$진단내용 = $row["진단내용"];
	$날짜= $row["날짜"];
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
	의사아이디 : <INPUT TYPE = "text" NAME="차트번호" VALUE=<?php echo $차트번호 ?>><br>
	환자아이디 : <INPUT TYPE = "text" NAME="환자ID" VALUE=<?php echo $환자ID ?> READONLY><br>
	의사아이디 : <INPUT TYPE = "text" NAME="의사ID" VALUE=<?php echo $의사ID ?>><br>
	진단내용 : <INPUT TYPE = "text" NAME="진단내용" VALUE=<?php echo $진단내용 ?>><br>
	날짜 : <INPUT TYPE = "text" NAME="날짜" VALUE=<?php echo $날짜 ?> READONLY><br>
	<BR><BR>
	<INPUT TYPE="submit" VALUE="정보 수정">
</FORM>
</BODY>
</HTML>