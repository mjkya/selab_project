<?php
               $connect = mysqli_connect("localhost", "root", "root", "boarddb") or die("fail");
               session_start();

               $id = $_SESSION['userid'];
               $title = $_POST[title];                  //Title
               $content = $_POST[content];              //Content
               $date = date('Y-m-d H:i:s');            //Date

               $URL = './index.php';                   //return URL


               $query = "insert into board (num, title, content, day, hit, id)
                       values(null,'$title', '$content', '$date',0, '$id')";


               $result = $connect->query($query);
               if($result){
?>                  <script>
                       alert("<?php echo "글이 등록되었습니다."?>");
                       location.replace("<?php echo $URL?>");
                   </script>
<?php
               }
               else{
                       echo "FAIL";
               }

               mysqli_close($connect);
?>
