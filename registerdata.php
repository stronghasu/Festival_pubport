<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 데이터전송</title>
    <?php include_once "default.php";?>
    <style>
        .data{margin:100px auto; width:1000px;box-shadow:1px 1px 10px #555;padding:50px;border-radius:30px;}
        .data li{margin:20px 0;font-size:20px;}
        .data li span{font-weight:bold; display:inline-block;}
        #value{font-weight:normal; position:absolute; left:600px; color:black;}
        
        .prievw2{width:150px; height:50px;background-color:#07063f; line-height:50px;text-align:center;
                 margin:0 auto;}
        .prievw2 a {display:block; font-size:20px;color:#fff; }
    </style>
</head>
<body>
    <?php include_once "header.php";?>
    <ul class="data">
        <?php
            // 입력받은 아이디와 비밀번호 담는 변수 생성
            $id = $_POST["id"];
            $password = $_POST["password"];
            $name = $_POST["name"];
            $birth = $_POST["birth"];
            $birth2 = $_POST["birth2"];
            $birth3 = $_POST["birth3"];
            $gender = $_POST["gender"];
            $country = $_POST["country"];
            $address1 = $_POST["address1"];
            $address2 = $_POST["address2"];
            $address3 = $_POST["address3"];


        // 배열변수를 만들어 아이디와 비밀번호를 담아준다.
        $data = array("아이디"=>$id , "비밀번호" =>$password , "이름" =>$name ,"생년" =>$birth,"월" =>$birth2,"일" =>$birth3
                         ,"성별" =>$gender , "국가" =>$country ,"우편번호" =>$address1,"주소" =>$address2,"상세주소" =>$address3);

            foreach ($data as $key => $value){
                echo "<li><span>". $key ."</span>" ."<span id='value'>". $value. "</span>" . "</li>";

                // $key는 "아이디" "비밀번호" "이름"등등과 대응 $value 는 $id $password $name 등 변수명과 대응
            }

            
        ?>
        <div class="prievw2"><a href="register.php">이전화면</a></div>
    </ul>
    <?php include_once "footer.php"?>

       
</body>
</html>