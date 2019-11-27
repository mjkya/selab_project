<?php
               $connect = mysqli_connect("localhost", "root", "root", "boarddb") or die("fail");


               $num = $_GET['num'];
               $URL = './index.php';                   //return URL


               $query = "DELETE FROM board WHERE num='$num'";

               $result = $connect->query($query);
               if($result){
?>                  <script>
                       alert("<?php echo "삭제되었습니다."?>");
                       location.replace("<?php echo $URL?>");
                   </script>
<?php
               }
               else{
                       echo "FAIL";
               }

               mysqli_close($connect);
?>
