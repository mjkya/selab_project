<?php
               $connect = mysqli_connect("localhost", "root", "root", "boarddb") or die("fail");


               $num = $_GET['num'];
               $id = $_POST[name];                      //Writer
               $pw = $_POST[pw];                        //Password
               $title = $_POST[title];                  //Title
               $content = $_POST[content];              //Content
               $date = date('Y-m-d H:i:s');            //Date
               $URL = './index.php';                   //return URL


               $query = "UPDATE board SET title ='$title', content='$content' WHERE num='$num'";

               $result = $connect->query($query);
               if($result){
?>                  <script>
                       alert("<?php echo "글이 수정되었습니다."?>");
                       location.replace("<?php echo $URL?>");
                   </script>
<?php
               }
               else{
                       echo "FAIL";
               }

               mysqli_close($connect);
?>
