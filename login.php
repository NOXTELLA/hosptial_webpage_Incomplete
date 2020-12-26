<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <title>홍익대학교병원</title>

  <link rel="shortcut icon" href=".\image\홍대마크 급조.png " type="image/x-icon"/>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href=".\css\default.css">
	<link rel="stylesheet" type="text/css" href=".\css\header.css">
	<link rel="stylesheet" type="text/css" href=".\css\footer.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js" ></script>
    <script type="text/javascript" src="./js/mySignInForm.js"></script>
    <link rel="stylesheet" href="./css/mySignInForm.css" />
  <style>
    {margin : 0; padding: 0;}
    body{
      margin : 0 auto;
      width: 960px;
    }
    .footer{
      position: relative;
      top:500px;
      left:600px;
      height:auto;
    }


  </style>
</head>
<body>
  <div class="header">
    <div class="section q1">
      <div class="vp" style="float:right;"><a href=".\login.php" >로그인</a></div></div>
    <div class="sectuin q2">
            <div class="vp" style="float:right;"><a href=".\join_select.html" >회원가입</a></div></div>
    <div class="vp">
    <a href=".\test.html" class="logo">
    <img src=".\image\병원 로고.PNG" width="250" height="60">
    </a>
    <div class="gnb" style="height: 85px;>
    <div class="a3">
                      <ul id="navbar">

                        <li><a href=".\reservation_page.html">예약하기</a>
                            <ul>
                                <li><a href=".\reservation_page.html">예약하기</a></li>
                            </ul>
                        </li>

                        <li><a href=".\Department_of_Doctor.html">구성원</a>
                            <ul>
                                <li><a href=".\Department_of_Doctor.html">의사 찾기</a></li>
                                <li><a href=".\Department_of_Nurse.html">간호사 찾기</a></li>
                            </ul>
                        </li>
                        <li><a href=".\Notice.html">커뮤니티</a>
                            <ul>
                                <li><a href=".\Notice.html">공지사항</a></li>
                                <li><a href=".\news_of_hospital.html">병원소식</a></li>
                                <li><a href=".\HUH_HOT_ISSUE.html">HUH 핫이슈</a></li>
                                <li><a href="https://www.youtube.com/?gl=KR&hl=ko">영상자료실</a></li>
                            </ul>
                        </li>
                        <li><a href=".\how_to_come.html">오시는길</a>
                            <ul>
                                <li><a href=".\how_to_come.html">오시는길</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

<?php

session_start(); // 세션

if($_SESSION['id']==null) { // 로그인 하지 않았다면

?>



<center><br><br><br>

<form name="login_form" action="login_check.php" method="post">
   ID : <input type="text" name="id"><br>
   PW:<input type="password" name="pw"><br><br>
   <input type="submit" name="login" value="Login">
</form>

</center>



<?php

}else{ 

   echo "<center><br><br><br>";
   echo $_SESSION['name']."(".$_SESSION['id'].")님이 로그인 하였습니다.";
   echo "&nbsp;<a href='logout.php'><input type='button' value='Logout'></a>";
   echo "</center>";
}

?>



<div class="footer">
  <div class+"logo">
<a href="./test.html" class="logo"><img src=".\image\병원 로고.PNG" height="60" weight="250" alt="홍익대학병원"></a>
<div class="str">
  <div class="info">
    <div class="address">
      <p class="q1">30016 세종특별자치시 조치원읍 세종로 2639 (신안리 300) 홍익대학교 세종캠퍼스</p>
      <p class="q2">TEL. 044-860-2114</p>
    </div>
    <div class="copyright">
      <p lang="en">COPYRIGHT © HONGIK UNIVERSITY. ALL RIGHTS RESERVED.</p>
      </div>
</div>
</div>

</div>
</div>

</body>
</html>
