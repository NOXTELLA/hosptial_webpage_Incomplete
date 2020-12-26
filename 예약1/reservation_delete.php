<head><meta content="text/html; charset=utf-8"></head>
<?php
	if ( !$con = oci_connect("B889006", "B889006", "$db_sid, "AL32UTF8"))exit();
	$sql = "SELECT * FROM 예약 WHERE 전공='".$_GET['전공']."'";
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
	$전공 = $row["전공"];

?>

<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 회원 삭제 </h1>
<FROM METHOD="post" ACTION="delete_result.php">
	전공 : <INPUT TYPE="text" NAME="전공" VALUE=<?php echo $전공 ?> READONLY> <br>
	<BR><BR>
	위 회원을 삭제하겠습니까?
	<INPUT TYPE="submit" VALUE="회원 삭제">
</BODY>
