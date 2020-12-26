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
<div id="wrap">
    <div id="container">
        <h1 class="title">회원가입</h1>
        <form name="signUp" action="./memberSave_D.php" method="post" onsubmit="return checkSubmit()">
            <div class="line">
              <p>아이디</p>
              <div class="inputArea">
                  <input type="text" name="아이디" class="아이디" />
              </div>
              <div class="아이디Comment comment"></div>
          </div>
          <div class="line">
              <p>이름</p>
              <div class="inputArea">
                  <input type="text" name="이름" class="이름" />
              </div>
          </div>
          <div class="line">
              <p>비밀번호</p>
              <div class="inputArea">
                  <input type="password" name="비밀번호" class="비밀번호" />
              </div>
          </div>

            <div class="line">
                <p>전공</p>
                <div class="inputArea">
                    <input type="text" name="전공" class="전공"  />
                    <div class="전공Comment comment"></div>
                </div>
            </div>
            <div class="line">
                <p>전화번호</p>
                <div class="inputArea">
                    <input type="text" name="전화번호" class="전화번호" />
                    <div class="전화번호Comment comment"></div>
                </div>
            </div>
            <div class="line">
                <p>직급</p>
                <div class="inputArea">
                    <input type="text" name="직급" class="직급" />
                    <div class="직급Comment comment"></div>
                </div>
            </div>
            <div class="line">
                <input type="submit" value="가입하기" class="submit" />
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
</div>
</div>

</div>
</div>

</body>
</html>
