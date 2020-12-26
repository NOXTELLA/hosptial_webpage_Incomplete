<head><meta content="text/html; charset=utf-8"></head>
<?php
	if ( !$con = oci_connect("B889006", "B889006", "$db_sid, "AL32UTF8"))exit();

	$환자ID=$_POST["환자ID"];
	$의사ID=$_POST["의사ID"];
	$진단내용 = $_POST["진단내용"];
	$날짜= $_POST["날짜"];

	$mDate= date("Y-m-j");

	$sql = " INSERT INTO 진단 VALUES ('".$의사ID"', '".$환자ID"',";
	$sql = sql.$진단내용.", '".$날짜."', 'yyyy-mm-dd'))";

	$ret = oci_execute(oci_parse($con, $sql));

	echo "<h1> 신규 회원 입력 결과 </h1>";
	if($ret)
		echo"데이터가 성공적으로 입력됨.";
	else
		echo "데이터 입력 실패!!!"."<br>";
	echo "<br> <a href='\main.html'> <-- 초기화면</a> ";

	oci_close($con);
?>