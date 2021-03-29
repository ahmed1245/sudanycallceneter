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
    

<?php 
                   
                   if($_SERVER['REQUEST_METHOD'] == 'POST'){

                     $time_Observance_error =array();
                   
                  if(empty($_POST['uidnumber'])){

                    $time_Observance_error[]="الرجاء كتابة<strong>رقم المعرف</string>";
                  }

                  if(empty($_POST['uname'])){

                    $time_Observance_error[]="الرجاء كتابة<strong>الاسم</string>";
                  }

                  if(!isset($_POST['device'])&&!isset($_POST['headphone'])){

                    $time_Observance_error[]="الرجاء اختيار واحد <strong>على الاقل</string>";
                  }

                  if(isset($_POST['device'])){

                    if(!isset($_POST['devtimefrom'])&&!isset($_POST['devtimeto'])){
                    $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
                  }

                 }

                 

                 if(isset($_POST['headphone'])){

                  if(!isset($_POST['speaktimefrom'])&&!isset($_POST['speaktimeto'])){
                  $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
                }

               }




               if(isset($_POST['device'])&& isset($_POST['headphone'])){

                if(!isset($_POST['devtimefrom'])&&!isset($_POST['devtimeto'])){
                  $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
              }



              if(!isset($_POST['speaktimefrom'])&&!isset($_POST['speaktimeto'])){
                $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
              }



                   }




                // show errors

                if (!empty($time_Observance_error)) {
                  foreach ($time_Observance_error as $time_error) {
                      echo  '<div class="alert alert-danger text-center " >';
                      echo  '<span class="errorpass">';
                      echo   $time_error . "<br>";
                      echo  '</span>';
                      echo  '</div>';
                  }
              }else{

                echo  'رقم المعرف '.$_POST['uidnumber'].'<br>';
                echo  'الاسم '.$_POST['uname'].'<br>';
                echo  'النوع '.$_POST['device'].'<br>';
                echo  'النوع '.$_POST['headphone'].'<br>';
                echo  'الزمن من '.$_POST['devtimefrom'].'<br>';
                echo  'الى '.$_POST['devtimeto'].'<br>';
                echo  'الزمن من '.$_POST['speaktimefrom'].'<br>';
                echo  'الى '.$_POST['speaktimeto'];

              }






                  
                }
              
                ?>
                    <script src="bootstrap.js"></script>
</body>
</html>
