<?php 
$title = "callcenter";


include "admin/config.php";







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="call.css">
    <link rel="stylesheet" href="bootstrap-rtl.min.css">

    <title>call center</title>
</head>
<body>
    <!-- this is heder start -->
    <heder>
        <div class=" container mt-2 ">

            <div class="sec  bg-primary">
                <h1 class="address  ">تسجيل مراعاة </h1>
               </div>
               <div class="alert alert-info" role="alert">
                <strong id="emailHelp" class="message form-text text-muted text-center"><strong class="star">*</strong>ملحوظة<strong class="star">*</strong></strong>
                <small id="emailHelp" class="message form-text text-muted text-center">* تسجيل المراعاة يتم مرة واحدة في اليوم</small>
                <small id="emailHelp" class="message form-text text-muted text-center">* تعديل المراعاة يتم بواسطة المشرف</small>
              </div>
              
        </div>
      
           
         
    </heder>
    <!-- this is heder end -->

    <div class="container">
       

        <div class="row">
          <div class="col-4">
          <a href="time.php">تسجيل مراعاة الزمن</a>
          </div>

          <div class="col-4">
          <a href="number.php">تسجيل مراعاة الرقم</a>

          </div>
          <div class="col-4">
          <a href="timandnumber.php">تسجيل مراعاة زمن و رقم</a>

          </div>


          </div>

    </div>


            
    
    <script src="bootstrap.js"></script>
</body>
</html>








