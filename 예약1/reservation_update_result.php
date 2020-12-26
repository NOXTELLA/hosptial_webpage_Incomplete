<head><meta content="text/html; charset=utf-8"></head>
<?php
	if ( !$con = oci_connect("B889006", "B889006", "$db_sid, "AL32UTF8"))exit();

	$비밀번호=$_POST["비밀번호"];
	$전공=$_POST["전공"];
	$내용 = $_POST["내용"];
	$예약자= $_POST["예약자"];


	$sql= "UPDATE 예약 SET 전공='".$전공."', 예약자=".$예약자;
	$sql= $sql.", 비밀번호='".$비밀번호."', 내용=".$내용." WHERE 비밀번호='".$비밀번호."'";

	$ret = oci_execute(oci_parse($con, $sql) );

	echo"<h1> 회원 정보 수정 결과</h1>";
	if($ret)
		echo "데이터가 성공적으로 수정됨.";
	else
		echo "데이터 수정 실패!!!"."<br>";
	echo "<br> <a href='.\reservation_main.html'> <--초기화면</a> ";

	oci_close($con);
?>
