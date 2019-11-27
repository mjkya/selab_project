<!DOCTYPE html>

<html>
<head>
    <meta charset = 'utf-8'>
    <link rel="stylesheet" href="./view.css" type="text/css" />
</head>



<style>
        #editor2{
                        /* position: absolute; */
                        width: 500px;
                        height: 400px;
                }
        @charset "utf-8";

@import url("https://fonts.googleapis.com/css?family=Roboto:400,100,900italic");
@import url("https://fonts.googleapis.com/earlyaccess/nanumgothic.css");
@import url("https://fonts.googleapis.com/css?family=Abel");

html {
    overflow-y: scroll;
}

body {
    background-color: white;
    font-family: "Roboto", "Nanum Gothic", "Apple SD Gothic Neo", "Malgun Gothic", sans-serif;
}

a:hover {
    text-decoration: none;
}

a {
    color: black;
    text-decoration: none;
}

h1 {
    font-size: 60px;
    color: #00abd9;
    /*margin: 20px 0 5px 0;*/
}

h2 {
    color: rgb(156, 156, 156);
    margin: 10px 0;
    font-weight: bold;
    font-size: 30px;
}

.container {
    padding: 0;
    margin: 0 auto;
    width: auto;
}

.contents {
    font-size: 15px;
    width: 1145px;
    margin: 0 auto;
    margin-bottom: 40px
}


nav {
    width: 1145px;
    height: 52px;
    z-index: 1;
    position: absolute;
    font-family: 'Noto Sans KR', sans-serif;
    background-color: #00abd9;
    border-radius: 0px 0px 5px 5px;
}

.navbar {
    top: 0;
    left: 0;
    height: 70px;
    background-color: #fff;
    position: fixed;
    z-index: 100;
    width: 100%;
}

.navbar .innernavbar {
    position: relative;
    width: 1144px;
    height: 70px;
    margin: 0 auto;
    text-align: center;
}

.navbar .innernavbar .webapplogo {
    position: absolute;
    top: 0;
    left: 0;
    padding-top: 15px;
    width: 50px;
    height: 40px;
    margin-top: 0;
    margin-bottom: 0;
    font-size: 15px;
}

.navbar .innernavbar #menu {

    display: inline-block;
    position: absolute;
    left: 100px;
    padding-top: 5px;
    padding-left: 0px;
    list-style: none;
    margin: 0;

}

.navbar .innernavbar #menu li {
    float: left;
    margin-left: 30px;
    line-height: 60px;
}

.navbar .innernavbar #menu li a {
    color: #333333;
    font-size: 16px;
    text-decoration: none;
    font-weight: bold;
}

.info_user {
    position: absolute;
    top: 0;
    right: 0;
}

.info_user .profile .login {
    float: left;
    width: 50px;
    height: 44px;
    padding: 26px 30px 0 0;
    font-size: 13px;
    line-height: 16px;
    color: #000;
    font-family: 'Noto Sans KR', sans-serif;
    text-decoration: none;
}

main {
    margin-top: 90px;
}


footer[role="contentinfo"] {
    height: 30px;
    width: 1145px;
    margin: 0 auto;
    /*min-width: 1280px;  width(.container) */

    line-height: 30px;
}

footer[role="contentinfo"] .container {
    position: fixed;
    bottom: 0px;
    width: 1145px;
    height: 30px;
    z-index: 1;
    border-radius: 3px 3px 0px 0px;
    background-color: rgb(214, 214, 214);
}

footer[role="contentinfo"] p {
    font-size: 9pt;
    text-align: center;
    font-weight: 100;
    color: rgb(139, 139, 139);
}

.pull-left {
    float: left;
}

.pull-right {
    float: right;
}

.inline-list > li {
    display: inline-block;
}

.scrollable {
    overflow-x: hidden;
    overflow-y: scroll;
}

/* for the disabled */
.assistive-text {
    text-indent: -9999px;
    font-size: 0;
}

#logo a {
    height: 52px;
    margin-left: 10px;
}

#logo a img {
    width: 100px;
    margin-top: 9px;
}

@import 'https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&subset=cyrillic,cyrillic-ext,latin-ext';
* {
    box-sizing: border-box
}

button {
    background: transparent;
    border-width: 2px;
    border-style: solid;
    border-color: #454545;
    position: relative;
    margin: 1em;
    display: inline-block;
    padding: 0.5em 1em;
    transition: all 0.3s ease-in-out;
    text-align: center;
    font-weight: bold
}

button:before, button:after {
    content: '';
    display: block;
    position: absolute;
    border-color: #454545;
    box-sizing: border-box;
    border-style: solid;
    width: 1em;
    height: 1em;
    transition: all 0.3s ease-in-out
}

button:before {
    top: -6px;
    left: -6px;
    border-width: 2px 0 0 2px;
    z-index: 5;
}

button:after {
    bottom: -6px;
    right: -6px;
    border-width: 0 2px 2px 0;
}

button:hover:before, button:hover:after {
    width: calc(100% + 12px);
    height: calc(100% + 12px);
    border-color: #fff
}

button:hover {
    color: #353535;
    background-color: #fff;
    border-color: #fff
}

.bw button {
    color: black;
    border-color: transparent;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}

.bw button:before, .bw button:after {
    border-color: #fff
}

.bw button:hover:before, .bw button:hover:after {
    width: calc(100% + 12px);
    height: calc(100% + 12px);
    border-color: #0d47a1;
}

.bw button:hover {
    color: #0d47a1;
    background-color: #90caf9;
}



</style>


<body>
    <div class="navbar">
        <div class="innernavbar">
            <h1 class="webapplogo">
                <a herf=#><img src="./logo.png" height="40"></a>
            </h1>
            <div class="panel bw">
              <button><a href="notice/index.html" >NOTICE</a></button>
              <button>MEMBERS</button>
              <button>RESEARCH</button>
              <button>PUBLICATIONS</button>
              <button>COURSES</button>
              <button>GALLERY</button>
            </div>

            <div class="info_user">
                <div class="profile">
                    <a href="#" class="login">contact</a>
                    <a href="#" class="login">login</a>
                </div>

            </div>
        </div>
    </div>

<?php
                $connect = mysqli_connect('localhost', 'root', 'root', 'boarddb');
                $num = $_GET['num'];
                session_start();
                $query = "select title, content, day, hit, id from board where num =$num";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>

        <table class="view_table" align=center>
            <hr>

            <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['id']?></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
        </tr>
        <td>

        <tr>

                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td colspan="4" class="view_content">
                <?php 
                $code = $rows['content']; ?>
                <div id = "editor2"><?= $code ?></div>
                </td>
        </tr>
        



        </table>

        <div 
                                  class="codepen" 
                                  data-prefill='{
                                    "title": "React Basics Demo",
                                    "description": "Shows how to use React and React DOM to render a module with props onto the page",
                                    "tags": ["react", "react-docs-demo"],
                                    "html_classes": ["loading", "no-js"],
                                    "head": "&lt;meta name=&#x27;viewport&#x27; content=&#x27;width=device-width, initial-scale=1&#x27;&gt;",
                                    "stylesheets": "https://unpkg.com/normalize.css@8.0.1/normalize.css",
                                    "scripts": ["https://cdnjs.cloudflare.com/ajax/libs/react/16.6.3/umd/react.production.min.js", "https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.6.3/umd/react-dom.production.min.js"]
                                  }'
                                  style="height: 400px; overflow: auto;"
                                  data-height="400" 
                                  data-theme-id="31205"
                                  data-default-tab="js,result" 
                                  data-editable="true"     
                                >
                                  <pre data-lang="html">
                                &lt;div id="root"&gt;&lt;/div&gt;
                                  </pre>
                                  <pre data-lang="css">
                                $gray: #ccc;
                                body {
                                  background: $gray;
                                  margin: 0;
                                  padding: 1rem;
                                }
                                .module {
                                  background: white;
                                  padding: 1rem;
                                  border-radius: 4px;
                                  border: 1px solid #999;
                                  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.25);
                                  h1 {
                                    margin: 0 0 1rem 0;
                                  }
                                }
                                  </pre>
                                  <pre data-lang="javascript">
                                class Welcome extends React.Component {
                                  render() {
                                    return &lt;div class="module"&gt;
                                      &lt;h1&gt;
                                        Hello, {this.props.name}
                                      &lt;/h1&gt;
                                      &lt;p&gt;It's a good day to build websites.&lt;/p&gt;
                                    &lt;/div&gt;;
                                  }
                                }
                                ReactDOM.render(
                                  &lt;Welcome name="Chris"&gt;&lt;/Welcome&gt;,
                                  document.getElementById('root')
                                );
                                  </pre>
                                </div><script async src="https://static.codepen.io/assets/embed/ei.js"></script>

        <!-- MODIFY & DELETE -->


        <?php

                $id = $_SESSION['userid'];
                $query = "select * from member where id='$id'";
                $result = $connect->query($query);
                $row=mysqli_fetch_assoc($result);


                if($row['permit']==1){
            ?>      <div class="view_btn">
                    <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
                    <button class="view_btn1" onclick="location.href='./modify.php?num=<?=$num?>&id=<?=$_SESSION['userid']?>'">수정</button>

                    <button class="view_btn1" onclick="location.href='./delete.php?num=<?=$num?>&id=<?=$_SESSION['userid']?>'">삭제</button>
            </div>
              <?php
                }
                else {

              ?>
                  <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>

                  <?php
                  }
                  ?>

<script src="https://pagecdn.io/lib/ace/1.4.6/ace.js" integrity="sha256-CVkji/u32aj2TeC+D13f7scFSIfphw2pmu4LaKWMSY8=" crossorigin="anonymous"></script>
<script>
        var editor2 = ace.edit("editor2");
        editor2.setTheme("ace/theme/pastel_on_dark");
        editor2.session.setMode("ace/mode/javascript");
        editor2.setReadOnly(true);
</script>



</body>
</html>
