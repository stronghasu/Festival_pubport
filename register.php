<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widdiv=device-widdiv, initial-scale=1.0">
    <title>회원가입</title>
    <?php include_once "default.php";?>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <?php include_once "header.php";?>
    
    <div id="container" class="center">
        <div class="title clear_fix">
            <h1>회원가입</h1>
            <div class="number clear_fix">
                <div class="step">
                    <span>1</span>
                    <a>기본정보 입력</a>
                </div>
                <div class="step">
                    <span>2</span>
                </div>
                <div class="step">
                    <span>3</span>
                </div>
            </div>
        </div>
        <p class="middle">본인인증 등에 사용되오니 정확한 정보를 입력하여 주시기 바랍니다.</p>
        <form method="POST" action="registerdata.php">
            <div class="form">
                <div>
                    <label for="id">아이디</label>
                    <input id="id" name="id" type="text" maxlength="10" placeholder="아이디">
                    <input type="submit" value="중복확인" class="check">
                </div>            
                <div>
                    <label for="password">비밀번호</label>
                    <input id="password"type="password"name="password"maxlength="20"placeholder="비밀번호">
                    <span class="plus">(*&^% 특수문자 사용 불가</span>
                </div> 
                <div>
                    <label for="name">성명</label>
                    <input id="name"name="name"type="text"maxlength="4" placeholder="성">
                    <input id="name2"name="name"type="text"maxlength="10" placeholder="이름">
                </div> 
                <div>
                    <label for="birth">생년월일</label>
                    <input id="birth"name="birth"type="text"maxlength="4" placeholder="YYYY">
                    <input id="birth2"name="birth2"type="text"maxlength="2" placeholder="MM">
                    <input id="birth3"name="birth3"type="text"maxlength="2" placeholder="DD">
                </div> 
                <div>
                    <label for="gender">성별</label>
                    <input name="gender" type="radio" id="gender" value="남자">남자
                    <input name="gender" type="radio" id="gender2"value="여자">여자
                </div>
                <div>
                    <span>국가</span>
                    <select id="country" name="country">
                        <option >대한민국</option>
                        <option >일본</option>
                        <option >미국</option>
                        <option >중국</option>
                        <option >대만</option>
                        <option >브라질</option>
                        <option >남아프리카공화국</option>
                        <option >러시아</option>
                    </select>
                </div>
                <div id="detail">
                    <span>주소</span>
                    <input id="address"name="address1" type="text" maxlength="10" placeholder="우편번호">
                    <input id="address2" name="address2" type="text" maxlength="10" placeholder="주소">
                    <input type="submit" class="addressnumber" value ="우편주소">
                </div>
                <div >
                    <input id="address3"name="address3" type="text" maxlength="30" placeholder="상세주소입력">
                </div>
                <div>
                    <input name="next" type="reset" value="이전단계" id="reset">
                    <input name="next" type="submit" value="다음단계" id="submit">
                </div>
            </div>
        </form>
    </div>
    <?php include_once "footer.php"?>
</body>
</html>