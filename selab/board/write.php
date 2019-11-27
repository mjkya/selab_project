<!DOCTYPE>
<?php

        session_start();

        $connect = mysqli_connect("localhost", "root", "root", "boarddb") or die("fail");
        $id = $_SESSION['userid'];
        $query = "select * from member where id='$id'";
        $result = $connect->query($query);
        $row=mysqli_fetch_assoc($result);


        if($row['permit']==0){
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
                  <link rel="stylesheet" href="common.css" type="text/css" />
                  <link rel="stylesheet" href="home.css" type="text/css" />
          </head>
          <style>

                  form {
                    margin-top : 40px;
                  }
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
                  #editor1{
                        /* position: absolute; */
                        width: 500px;
                        height: 400px;
                }

          </style>
          <body>
            <div class="navbar">
              <div class="innernavbar">
                <h1 class="webapplogo">
                  <a herf=#><img src="./logo.png" height="40"></a>
                </h1>
                <div class="panel bw">
                  <a href="notice/index.html" ><button>NOTICE</button></a>
                  <a href="members/index.html" ><button>MEMBERS</button></a>
                  <a href="research/index.html" ><button>RESEARCH</button></a>
                  <a href="publications/index.html" ><button>PUBLICATIONS</button></a>
                  <a href="courses/index.html" ><button>COURSES</button></a>
                  <a href="gallery/index.html" ><button>GALLERY</button></a>
                </div>

                <div class="info_user">
                  <div class="profile">
                    <a href="#" class="login">contact</a>
                    <a href="#" class="login">login</a>
                  </div>

                </div>
              </div>
            </div>
                  <form method = "post" action = "write_action.php" id = "frm">
                  <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                          <tr>
                          <td height=20 align= center bgcolor=#D3EDF5><font color=BLACK> 글쓰기</font></td>
                          </tr>
                          <tr>
                          <td bgcolor=white>
                          <table class = "table2">


                                  <tr>
                                  <td>제목</td>
                                  <td><input type = text name = title size=60></td>
                                  </tr>

                                  <tr>
                                  <td>내용</td>
                                  <td><div id = "editor1" ></div></td>
                                  <td><textarea type = "textarea" rows = 15 cols = 85 name = "content" id = "temp" style = "display:none;"></textarea></td>
                                  </tr>

                                  </table>

                                  <center>
                                  <input type = "submit" onclick = "submitCode(event)" value="작성"></input>
                                  </center>
                          </td>
                          </tr>
                  </table>
                  </form>
                  <script src="https://pagecdn.io/lib/ace/1.4.6/ace.js" integrity="sha256-CVkji/u32aj2TeC+D13f7scFSIfphw2pmu4LaKWMSY8=" crossorigin="anonymous"></script>
                  <script>
                        var editor1 = ace.edit("editor1");
                        editor1.setTheme("ace/theme/pastel_on_dark");
                        editor1.session.setMode("ace/mode/javascript");

                        const editor = document.getElementById("editor1");
                        const editorTextArea = document.querySelector("#editor1 > textarea");
                        const textArea = document.getElementById("temp");

                        function submitCode (event) {
                                event.preventDefault();
                                const codeString =  editor1.getValue();
                                textArea.value = codeString;
                                document.getElementById("frm").submit();
                        }

                  </script>
          </body>
          </html>

<?php
}

?>
