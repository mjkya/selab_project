<!DOCTYPE>
<?php
                $connect = mysqli_connect('localhost', 'root', 'root', 'boarddb');
                $num = $_GET['num'];
                session_start();
                $query = "select title, content, day, hit, id from board where num =$num";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
                $id = $_SESSION['userid'];
                if($rows['id']!=$id){
            ?>      <script>
                            alert("권한이 없습니다.");
                            history.back();
                    </script>
                    <?php
                      }
                      else {
                    ?>



<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table2 tr {
                 width: 50px;
                 padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }
        #editor3{
                /* position: absolute; */
                width: 500px;
                height: 400px;
        }

</style>
<body>
        <form method = "post" action = "modify_action.php?num=<?=$num?>" id = "frm">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 글 수정하기</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">


                        <tr>
                        <td>제목</td>
                        <td><input type = text name = title size=60 value = <?= $rows['title']?>></td>
                        </tr>

                        <tr>
                        <td>내용</td>
                        <td><div id = "editor3" ><?= $rows['content']?></div></td>
                        <td><textarea type = "textarea" rows = 15 cols = 85 name = "content" id = "temp" style = "display:none;"></textarea></td>
                        </tr>

                        </table>

                        <center>
                        <input type = "submit" onclick = "submitCode(event)"value="작성">
                        </center>


                </td>
                </tr>
        </table>
        </form>
        <script src="https://pagecdn.io/lib/ace/1.4.6/ace.js" integrity="sha256-CVkji/u32aj2TeC+D13f7scFSIfphw2pmu4LaKWMSY8=" crossorigin="anonymous"></script>
        <script>
                var editor3 = ace.edit("editor3");
                editor3.setTheme("ace/theme/pastel_on_dark");
                editor3.session.setMode("ace/mode/javascript");

                const editor = document.getElementById("editor3");
                const editorTextArea = document.querySelector("#editor3 > textarea");
                const textArea = document.getElementById("temp");

                function submitCode (event) {
                        event.preventDefault();
                        const codeString =  editor3.getValue();
                        textArea.value = codeString;
                        document.getElementById("frm").submit();
                }
                
        </script>
</body>
</html>
<?php
  }
?>
