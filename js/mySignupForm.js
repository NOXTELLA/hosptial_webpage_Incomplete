$(function(){

    //아이디 중복 확인 소스
    var memberIdCheck = $('.memberIdCheck');
    var memberId = $('.memberId');
    var memberIdComment = $('.memberIdComment');
    var memberPw = $('.memberPw');
    var memberPw2 = $('.memberPw2');
    var memberPw2Comment = $('.memberPw2Comment');
    var memberNickName = $('.memberNickName');
    var memberNickNameComment = $('.memberNickNameComment');
    var memberPhoneNumber = $('.PhoneNumber');
    var memberPhoneNumberComment = $('.memberPhoneNumberComment');
    var memberBirthDay = $('.memberBirthDay');
    var memberBirthDayComment = $('.memberBirthDayComment');
    var idCheck = $('.idCheck');
    var pwCheck2 = $('.pwCheck2');
    var eMailCheck = $('.eMailCheck');

    memberIdCheck.click(function(){
        console.log(memberId.val());
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: '../member/memberIdCheck.php',
            data: {memberId: memberId.val()},

            success: function (json) {
                if(json.res == 'good') {
                    console.log(json.res);
                    memberIdComment.text('사용가능한 아이디 입니다.');
                    idCheck.val('1');
                }else{
                    memberIdComment.text('다른 아이디를 입력해 주세요.');
                    memberId.focus();
                }
            },

            error: function(){
              console.log('failed');

            }
        })
    });

    //비밀번호 동일 한지 체크
    memberPw2.blur(function(){
       if(memberPw.val() == memberPw2.val()){
           memberPw2Comment.text('비밀번호가 일치합니다.');
           pwCheck2.val('1');
       }else{
           memberPw2Comment.text('비밀번호가 일치하지 않습니다.');

       }
    });

});

function checkSubmit(){
    var idCheck = $('.idCheck');
    var pwCheck2 = $('.pwCheck2');
    var pnCheck = $('.pnCheck');
    var memberBirthDay = $('.memberBirthDay');
    var memberNickName = $('.memberNickName');
    var memberName = $('.memberName');


    if(idCheck.val() == '1'){
        res = true;
    }else{
        res = false;
    }
    if(pwCheck2.val() == '1'){
        res = true;
    }else{
        res = false;
    }
    if(pnCheck.val() == '1'){
        res = true;
    }else{
        res = false;
    }

    if(memberName.val() != ''){
        res = true;
    }else{
        res = false;
    }
    if(memberBirthDay.val() != ''){
        res = true;
    }else{
        res = false;
    }
    if(memberNickName.val() != ''){
        res = true;
    }else{
        res = false;
    }

    if(res == false){
        alert('회원가입 폼을 정확히 채워 주세요.');
    }
    return res;

}


