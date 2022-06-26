<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>축제소개</title>
    <?php include_once "default.php";?>
    <link rel="stylesheet" href="css/sub2.css">
</head>
<body>
    <?php include_once "header.php";?>
    <div id="container" class="center">
        <div class="title clear_fix">
            <h1>행사일정</h1>
            <span>HOME > 축제안내 > 행사일정</span>
        </div>
        <ul class="date">
            <li><a href="#">8월 2일 (화)</a></li>
            <li><a href="#">8월 3일 (수)</a></li>
            <li><a href="#">8월 4일 (목)</a></li>
            <li><a href="#">8월 5일 (금)</a></li>
        </ul>
        <table>
            <colgroup>
                <col width="136px">
                <col width="259px">
                <col width="259px">
                <col width="259px">
            </colgroup>
            <tr>
                <th>시간</th>
                <th>본무대</th>
                <th>보조무대</th>
                <th>행사장</th>
            </tr>
            <tr>
                <td class="time">10:00-11:00</td>
                <td rowspan="2"></td>
                <td rowspan="2">한 여름 밤 별빛공연</td>
                <td class="noborder">한 여름 밤 별빛공연</td>
            </tr>
            <tr>
                <td class="time">11:00-12:00</td>
                <td class="noborder">견우 직녀 치어리딩 대회</td>
            </tr>
            <tr>
                <td class="time">12:00-13:00</td>
                <td rowspan="2" class="lineheight">
                    전야제 축하공연<br/>
                    오작교 클럽파티
                </td>
                <td rowspan="2" class="lineheight">
                    시민참여 개막식<br/>
                    견우직녀 별빛콘서트<br/>
                    견우직녀 판타지쇼
                </td>
                <td rowspan="2" class="noborder">견우 직녀 가요제</td>
            </tr>
            <tr>
                <td class="time">13:00-14:00</td>
            </tr>
            <tr>
                <td class="time">14:00-15:00</td>
                <td></td>
                <td rowspan="2">오작교 클럽파티</td>
                <td  rowspan="2" class="noborder">오작교 클럽파티</td>
            </tr>
            <tr>
                <td class="time">15:00-16:00</td>
                <td></td>
            </tr>
            <tr>
                <td class="time">16:00-17:00</td>
                <td>KDIS PLAY ZONE</td>
                <td>견우직녀 별바라기</td>
                <td  rowspan="2" class="noborder"> </td>
            </tr>
            <tr>
                <td class="time">17:00-18:00</td>
                <td></td>
                <td>견우직녀 체험마을</td>
            </tr>
            <tr>
                <td class="time">18:00-22:00</td>
                <td></td>
                <td>견우직녀 페스티벌</td>
                <td class="noborder">견우직녀 페스티벌</td>
            </tr>
        </table>
        <p class="last">※ 당일 상황에 따라 프로그램이 변경될 수 있습니다.</p>
    </div>
    <?php include_once "footer.php"?>
</body>
</html>