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
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 bg-light">
           
                <form action="add.php" method="POST">
                    <div class="text-center">
                        <label>مراعاة الزمن</label>
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="idnumber">ID Number</label>
                      <input type="text" class="form-control" id="idnumber" aria-describedby="emailHelp" name="uidnumber" placeholder="ادخل رقم المعرف">
                      
                    </div>
                    <div class="form-group">
                      <label for="name">الأسم</label>
                      <input type="text" class="form-control" id="name" placeholder="ادخل الاسم كامل" name="uname">
                    </div>
                    <div class="row">


                        <div class="col-6">
                            
                            <div class="input-group mb-3">
                                <div class="bor">
                                  <div class="">
                                    <input  type="checkbox" aria-label="Checkbox for following text input" id="device" name="device" value="جهاز">
                                    <label class="form-check-label" for="device">جهاز</label>
                                    
                                  </div>
                                 
                                </div>
                                
                              </div>
                              <div class="row">
                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div>
                                        <label for="appt">من</label>
                                        <input type="time" id="appt" name="devtimefrom">
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                    <div>
                                        <label for="appt">الى</label>
                                        <input type="time" id="appt" name="devtimeto">
                                      </div>
                                </div>
                              </div>
                             
                              
                        </div>



                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="bor">
                                  <div class="">
                                    <input type="checkbox" aria-label="Checkbox for following text input" id="headphone" name="headphone" value="سماعة">
                                    <label class="form-check-label" for="headphone">سماعة</label>
                                  </div>
                                </div>
                                
                              </div>

                              <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div>
                                      <label for="appt">من </label>
                                      <input type="time" id="appt" name="speaktimefrom">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div>
                                      <label for="appt">الى</label>
                                      <input type="time" id="appt" name="speaktimeto">
                                    </div>
                              </div>
                            </div>
                        </div>

                    </div>

                   

                    
                      
                      


                    <button type="submit" class="btn btn-primary mt-5">تسجيل المراعاة الزمن</button>
                  </form>
                  </div>
                 
            


            





        </div>
    
    <script src="bootstrap.js"></script>
</body>
</html>








