<?php

        session_start();

        $connect = mysqli_connect("localhost", "root", "root", "boarddb") or die("fail");


        $id=$_POST['id'];
        $pw=$_POST['pw'];


        $query = "select * from member where id='$id'";
        $result = $connect->query($query);



        if(mysqli_num_rows($result)==1) {

                $row=mysqli_fetch_assoc($result);


                if($row['pw']==$pw){
                        $_SESSION['userid']=$id;
                        if(isset($_SESSION['userid'])){
                        ?>      <script>
                                        alert("로그인 되었습니다.");
                                        location.replace("./index.php");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }

                else {
        ?>              <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                                history.back();
                        </script>
        <?php
                }

        }

                else{
?>              <script>
                        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                        history.back();
                </script>
<?php
        }


?>
