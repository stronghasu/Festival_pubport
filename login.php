<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <?php include_once "default.php";?>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php include_once "header.php";?>
    <div id="container"class="center">
        <div class="loginpage">
        <h1 class="logo"><img src="img/login/login_logo.jpg"></h1>
        <form method="post" action="logindata.php" >
            <div class="top">
                <a href="#">로그인</a>
                <a href="#">비회원로그인</a>
            </div>
        
            <div class="loginbox">
                <div class="box">
                    <input type="text" placeholder="아이디" maxlength="10"name="id" required>
                </div>
                <div class="box">
                    <input type="password" placeholder="비밀번호" maxlength="10"name="password" required>
                </div>
      
            </div>
       
            <div class="save">
                <input type="radio" name="saveid" value="saveid">
                <label>아이디저장</label>
            </div>
            <div class="idlogin">
                <input type="submit" value="아이디 로그인">
            </div>
            <div class="phonelogin">
                <a href="#">
                휴대폰 로그인
                </a>
            </div>
        </form>
        <div class="find">
            <a href="#">아이디 찾기</a>
            <a href="#">비밀번호 찾기</a>
            <a href="#">회원가입</a>
        </div>
        <div class="snslogin">
            <h2>SNS 로그인</h2>
            <a href="#"><img src="img/login/login_tweet.jpg"></a>
            <a href="#"><img src="img/login/login_kakao.jpg"></a>
            <a href="#"><img src="img/login/login_facebook.jpg"></a>
        </div>     
        </div>
    </div>
    <?php include_once "footer.php"?>
</body>
</html>