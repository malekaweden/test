<?php

session_start();
if ( isset($_SESSION['username'])) {


?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ادارة الموقع</title>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
    <!--===============================================================================================-->


</head>
<!--===============================================================================================-->
<body >
    <!--my js -->
<div class="header">
  <!--===============================================================================================-->
    <div class="container">
          <div class="row justify-content-between">
    <div class="col-4">
     <?php
      if(isset($_POST['logout'])){
        session_start();
        session_destroy();
       header('location:login.php');
      }
     ?>
     <form method="post" name="logout">
      <button class="btn btn-outline-light"  style="margin-top: 10px;" name="logout">تسجيل الخروج </button>
     </form>
    </div>
    <div class="col-4">
         <h1 class="title" style="margin-top: 5px; ">إدارة المواقع </h1> 
    </div>
  </div>
    </div>
</div>
<!--===============================================================================================-->
<div class="lifroma">
      <div class="tab">
       <button class="tablinks " onclick="openCity(event, 'control1')" >إدارة  الاعضاء  <i class="fa fa-tachometer"></i></button>

       
      </div>
</div>
  
<!--===============================================================================================-->
<div id="control1" class="tabcontent">


<?php include'control1.php'; ?>




</div>
<!--===============================================================================================-->

<!--===============================================================================================-->
<!--my js -->
<!--===============================================================================================-->
<script  src="js/my.js"></script>
<!--===============================================================================================-->
<script src="js/jquery-3.4.1.min.js"  ></script>
<!--===============================================================================================-->
<script src="js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="js/sweetalert2.min.js"></script>
<!--===============================================================================================-->

</body>
</html>
<?php
}
else{
 header('refresh:1.0;url=login.php');
echo "<h1>يرجاء تسجيل الدخول اولا </h1>
<p>هده الصفحة لا يمكنك الاطلاع عليها بدون تسجيل الدخول </p>
<hr>
";
}

?>

