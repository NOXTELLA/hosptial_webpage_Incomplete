<head><meta content="text/html; charset=utf-8"></head>
<?php
	if ( !$con = oci_connect("B889006", "B889006", "$db_sid, "AL32UTF8"))exit();

	$의사ID = $_POST["의사ID"]

	$sql = "DELETE FROM 의사 WHERE 의사ID='" .$의사ID."'";

	$ret = oci_execute( oci_parse($con, $sql) );

	echo "<h1> 회원 삭제 결과 </h1>";
	if($ret)
		echo "데이터가 성공적으로 삭제됨.";
	else
		echo "데이터 삭제 실패!!!"."<br>";
	echo "<br> <a href='.\main.html'> <--초기 화면</a> ";

	oci_close($con);
?>