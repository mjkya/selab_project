<!DOCTYPE html>

<html>
<head>
    <meta charset='utf-8'>
    <link rel="shortcut icon" href="../common/images/SelabFavicon.png" type="image/png">
    <link rel="stylesheet" href="./common.css" type="text/css"/>
    <link rel="stylesheet" href="./index.css" type="text/css"/>
</head>
<body>
<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'boarddb') or die ("connect fail");
$query = "select * from board order by num desc";
$result = $connect->query($query);
$total = mysqli_num_rows($result);

session_start(); ?>
<div class="navbar">
    <div class="innernavbar">
        <h1 class="webapplogo">
            <a href="../index.html"><img src="./logo.png" height="40"></a>
        </h1>

        <div class="panel bw">
            <button onclick="location.href='../notice/index.html'" >NOTICE</button>
            <button onclick="location.href='../members/index.html'" >MEMBERS</button>
            <button onclick="location.href='../research/index.html'" >RESEARCH</button>
            <button onclick="location.href='../publications/index.html'" >PUBLICATIONS</button>
            <button onclick="location.href='../courses/index.html'" >COURSES</button>
            <button onclick="location.href='../gallery/index.html'" >GALLERY</button>
            <button onclick="location.href='../board1/index.php'" >BOARD</button>
        </div>

        <div class="info_user">
            <div class="profile">
                <a href="#" class="login">contact</a>
                <?php if (isset($_SESSION['userid'])) { ?>
                    <span class = "login"><?= $_SESSION['userid'];?>님 안녕하세요</span>
                    <a href='./logout.php' class = "login">로그아웃</a>
                    <br/>
                    <?php
                } else {
                    ?>
                    <a href='./login.php' class = "login">로그인</a>
                    <br/>
                <?php }
                ?>
            </div>
        </div>
    </div>

<div id="board-container">
    <h2>게시판</h2>
    <table>
        <thead>
        <tr>
            <td width="50">번호</td>
            <td width="500">제목</td>
            <td width="100">작성자</td>
            <td width="200">날짜</td>
            <td width="50">조회수</td>
        </tr>
        </thead>

        <tbody>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) { //DB에 저장된 데이터 수 (열 기준)
            if ($total % 2 == 0) {
                ?>                      <tr class="even">
            <?php } else {
                ?>                      <tr>
            <?php } ?>
            <td width="50"><?php echo $total ?></td>
            <td width="500">
                <a href="view.php?num=<?php echo $rows['num'] ?>">
                <?php echo $rows['title'] ?></td>
            <td width="100"><?php echo $rows['id'] ?></td>
            <td width="200"><?php echo $rows['day'] ?></td>
            <td width="50"><?php echo $rows['hit'] ?></td>
            </tr>
            <?php
            $total--;
        }
        ?>
        </tbody>
    </table>
</div>

<div class=text>
    <font style="cursor: hand" onClick="location.href='./write.php'">글쓰기</font>

</div>


</body>
</html>
