<?php
    include "./include/dbConnect.php";
    /*echo "<pre>";
    echo var_dump($_POST);*/

    $아이디 = $_POST['아이디'];
    $이름 = $_POST['이름'];
    $비밀번호 = $_POST['비밀번호'];
    $비밀번호2 = $_POST['비밀번호2'];
    $전공 = $_POST['전공'];
    $전화번호 = $_POST['전화번호'];
    $직급 = $_POST['직급'];


    $res = $dbConnect->query($sql);



    $sql = "INSERT INTO 멤버(ID,비밀번호,이름,전화번호) VALUES('{$아이디}','{$비밀번호}', '{$이름}','{$전화번호}');";
    if($dbConnect->query($sql)){
        echo '회원가입 성공';
    }
    else{
      echo '실패';
    }
?>
