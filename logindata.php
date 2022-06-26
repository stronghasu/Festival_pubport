<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인확인</title>
    <?php include_once "default.php";?>
    <style>
        .logindata{width:1000px; margin:100px auto; height:600px; }
        .logindata li{line-height:500px; font-size:30px; font-weight:bold; 
                      box-shadow:1px 1px 10px #555;padding-left:100px;border-radius:30px; }

        .login-privew{display:block; width:150px; height:50px;background-color:#07063f; line-height:50px;text-align:center;
                 margin:26px auto; font-size:20px;color:#fff;}
    </style>
</head>
<body>
    <?php include_once "header.php";?>
    <ul class="logindata">
        <?php
            $id = $_POST["id"];
            $password = $_POST["password"];
        
            if($id == "admin" && $id == "123456"){
                echo "<li>관리자님 환영합니다.</li>";

            }
            else if($id == $id && $password == "123456"){
                echo "<li>".$id."님 환영합니다.</li>";
            }
            else{

                echo "<li>등록되지 않은 회원입니다.</li>";
            }
        
        
        ?>
        <a href="login.php" class="login-privew">이전화면으로</a>
    </ul>
    <?php include_once "footer.php"?>
</body>
</html>