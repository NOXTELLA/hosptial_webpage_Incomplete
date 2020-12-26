<head><meta content="text/html; charset=utf-8"></head>
<?php
	if ( !$con = oci_connect("B889006", "B889006", "$db_sid, "AL32UTF8"))exit();

	$환자ID=$_POST["환자ID"];
	$의사ID=$_POST["의사ID"];
	$진단내용 = $_POST["진단내용"];
	$날짜= $_POST["날짜"];


	$sql= "UPDATE 진단 SET 의사ID='".$의사ID."', 날짜=".$날짜;
	$sql= $sql.", 환자ID='".$환자ID."', 진단내용=".$진단내용." WHERE 환자ID='".$환자ID."'";

	$ret = oci_execute(oci_parse($con, $sql) );

	echo"<h1> 회원 정보 수정 결과</h1>";
	if($ret)
		echo "데이터가 성공적으로 수정됨.";
	else
		echo "데이터 수정 실패!!!"."<br>";
	echo "<br> <a href='.\main.html'> <--초기화면</a> ";

	oci_close($con);
?>