<?php
   setcookie("name", "John Watkin", time()+2, "/","", 0);
   setcookie("age", "36", time()+2, "/", "",  0);
?>
<html>
   
   <head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Set Cookies"?>
   </body>
   
</html>