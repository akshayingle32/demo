<?php
$host="localhost";
$user="root";
$password="";
$db="data";
$con=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['submit'])){
   
     $app=$_POST['apple'];
     $mgo=$_POST['mango'];
    
 
   $query="insert into fruit (`apple`,`mango`) values ('$app','$mgo')";
   $result=mysqli_query($con,$query);
}
?>
<html>
    <head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
        
        <script>
        function myFunction2(x) {
       var x = document.getElementById("apple").value="Apple=";
           
           
      }
   
    function myFunction3(x) {
      var x = document.getElementById("mango").value="Mango=";
    }
 
       
    </script>
    </head> <br><br>
    <body>
        <div class="container">
        <form action="akshay.php"  method="post">
 
    <div class="form-group">
        <label >apple</label>
       
        <input type="text" class="form-control" name="apple"  onfocus="myFunction2(this)"  disabled>
        <span class="unit"></span>
        </div>
<br>
        <div class="form-group">
        <label >mango</label>
        <input type="text" class="form-control" name="mango" onfocus="myFunction3(this)"  disabled>
        </div>
<br>
      <input type="submit" name="submit" value="submit">
        </form></div>
       
    </body>
</html>
Reply
Forward

