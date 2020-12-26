<!doctype html>
<head>
<meta charset="UTF-8">
<title>홍익대학교병원</title>

<link rel="shortcut icon" href=".\image\홍대마크 급조.png " type="image/x-icon"/>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href=".\css\default.css">
<link rel="stylesheet" type="text/css" href=".\css\header.css">
<link rel="stylesheet" type="text/css" href=".\css\footer.css">
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js" ></script>
<script type="text/javascript" src="./js/mySignupForm.js"></script>
<link rel="stylesheet" href="./css/mySignupForm.css" />
<style>
  {margin : 0; padding: 0;}
  body{
    margin : 0 auto;
    width: 960px;
  }
  .footer{
    position: relative;
    top:1000px;
    left:600px;
    height:auto;
  }


</style>
</head>
<?php include  $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
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

                        <li><a href=".\reservation.php">예약하기</a>
                            <ul>
                                <li><a href=".\reservation.php">예약하기</a></li>
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
    <div id="board_write">
        <h1><a href=".\reservation.php">예약하기</a></h1>
        <h4>예약을 위한 게시판입니다.</h4>
            <div id="write_area">
                <form action="write_ok.php" method="post">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="전공" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                        <textarea name="name" id="uname" rows="1" cols="55" placeholder="예약자" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                    </div>
                    <div id="in_pw">
                        <input type="password" name="pw" id="upw"  placeholder="비밀번호" required />
                    </div>
                    <div class="bt_se">
                        <button type="submit">글 작성</button>
                    </div>
                </form>
            </div>
        </div>
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
    </body>
</html>
