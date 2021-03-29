<?php 
$title = "مراعاة التقييم";


include "admin/config.php";
include "include/header.php";







?>

    <!-- this is heder end -->

    <div class="container">
    <?php 
                   
                   if($_SERVER['REQUEST_METHOD'] == 'POST'){

                     $time_Observance_error =array();
                   
                  if(empty($_POST['nuidnumber'])){

                    $time_Observance_error[]="الرجاء كتابة<strong>رقم المعرف</string>";
                  }

                  if(empty($_POST['nuname'])){

                    $time_Observance_error[]="الرجاء كتابة<strong>الاسم</string>";
                  }

                  if(!isset($_POST['callleat'])&&!isset($_POST['callreason'])){

                    $time_Observance_error[]="الرجاء اختيار واحد <strong>على الاقل</string>";
                  }

                  if(isset($_POST['callleat'])){

                    if(!isset($_POST['latetimefrom'])&&!isset($_POST['latetimeto'])){
                    $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
                  }

                 }

                 

                 if(isset($_POST['callreason'])){

                  if(!isset($_POST['resontimefrom'])&&!isset($_POST['resontimeto'])){
                  $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
                }

               }




               if(isset($_POST['callleat'])&& isset($_POST['callreason'])){

                if(!isset($_POST['latetimefrom'])&&!isset($_POST['latetimeto'])){
                  $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
              }



              if(!isset($_POST['resontimefrom'])&&!isset($_POST['resontimeto'])){
                $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
              }



                   }

                   if(empty($_POST['callleatnum'])&&empty($_POST['callreasonnum'])){

                    $time_Observance_error[]="الرجاء كتابة<strong>الأرقام</string>";
                  }

                  




                // show errors

                if (!empty($time_Observance_error)) {
                  ?>
                  <div class="alert alert-danger text-center my-card" >
                      <span class="errorpass">
                        <?php
                  foreach ($time_Observance_error as $time_error) {
                    
                      echo   $time_error . "<br>";
                      
                  }
                  ?>
                  </span>
                      </div>
                      <?php
              }else{

                $pgtitle ="";
                if($title == "مراعاة التقييم"){
                  $pgtitle =$title;
                }

                $checkbox1='';
                if(isset($_POST['callleat'])&&isset($_POST['callreason'])){
                  $checkbox = array();
                  $checkbox[]= $_POST['callleat'];
                  $checkbox[]= $_POST['callreason'];
  
  
                  $checkbox1 = implode(',', $checkbox);
                }elseif(!isset($_POST['callleat'])&&isset($_POST['callreason'])){
                  $checkbox1 =$_POST['callreason'];
                }else{
                  $checkbox1 =$_POST['callleat'];
                }

                $thetime='';
                if(isset($_POST['callleat'])&&isset($_POST['callreason'])){

                  $time= array();
                  $time[]= $_POST['latetimefrom'];
                  $time[]= $_POST['latetimeto'];


                  $time1= array();
                  $time1[]= $_POST['resontimefrom'];
                  $time1[]= $_POST['resontimeto'];
  
                  $settime= array();
                  $settime[] = implode('to', $time);
                  $settime[] = implode('to', $time1);

                  $thetime = implode(',',$settime);

                }elseif(!isset($_POST['callleat'])&&isset($_POST['callreason'])){
                  $time1= array();
                  $time1[]= $_POST['resontimefrom'];
                  $time1[]= $_POST['resontimeto'];

                  $thetime = implode('to', $time1);

                }else{
                  $time= array();
                  $time[]= $_POST['latetimefrom'];
                  $time[]= $_POST['latetimeto'];
                  $thetime = implode('to', $time);
                }

                $thenumber='';
                if(isset($_POST['callleatnum'])&&isset($_POST['callreasonnum'])){

                  $number1= array();
                  $number1[]= $_POST['callleatnum'];
                  


                  $number2= array();
                  $number2[]= $_POST['callreasonnum'];
                  
  
                  $allnumber= array();
                  $allnumber[] = implode('-', $number1);
                  $allnumber[] = implode('-', $number2);
                  

                  $thenumber = implode(',',$allnumber);

                }elseif(!isset($_POST['callleatnum'])&&isset($_POST['callreasonnum'])){
                  
                  $number2= array();
                  $number2[]= $_POST['callreasonnum'];
                  $thenumber = implode('-', $number2);

                }else{
                  
                  $number1= array();
                  $number1[]= $_POST['callleatnum'];

                  $thenumber = implode('-', $number1);
                }
                

               

                $item_sql = "INSERT INTO observance(obs_uid, obs_uname, obs_type, obs_reason, obs_time, obs_number, obs_date)
                                              VALUE(:obs_uid, :obs_uname, :obs_type, :obs_reason, :obs_time, :obs_number, now())";
                $stmt = $con->prepare($item_sql);
                $stmt->bindParam(':obs_uid',$_POST['nuidnumber'], PDO::PARAM_STR);
                $stmt->bindParam(":obs_uname", $_POST['nuname'], PDO::PARAM_STR);
                $stmt->bindParam(":obs_type",$pgtitle , PDO::PARAM_STR);
                $stmt->bindParam(":obs_reason",$checkbox1 , PDO::PARAM_STR);
                $stmt->bindParam(":obs_time",$thetime , PDO::PARAM_STR);
                $stmt->bindParam(":obs_number",$thenumber , PDO::PARAM_STR);
                if ($stmt->execute()) {

                  $msg =  '<div class="alert alert-success text-center " >';
                  $msg .= '<span class="errorpass">';
                  $msg .= "تمت اضافة المراعاة بنجاح";
                  $msg .= '</span>';
                  $msg .= '</div>';
                  redirect($msg, 'back', 3);
                  
              }
                

              }






                  
                }

              
                ?>
        <div class="row justify-content-center ">
            
                 
            


            <div class="my-card col-12 col-sm-12 col-md-6 col-lg-6 bg-light bord">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="text-center">
                        <label>مراعاة التقييم</label>
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID Number</label>
                      <input type="text" class="my-card txt form-control" id="exampleInputEmail1"  placeholder="ادخل رقم المعرف" name="nuidnumber">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">الأسم</label>
                      <input type="text" class="my-card txt form-control" id="exampleInputPassword1" placeholder="ادخل الاسم كامل" name="nuname">
                    </div>
                    
                   
                    

                    <div class="row">


                        <div class="col-6">
                            
                            <div class="input-group mb-3">
                                <div class="bor">
                                  <div class="">
                                    <input  type="checkbox" name="callleat" id="call-leat" value="تأخر في جرس المكالمة">
                                    <label class="form-check-label" for="call-leat">تأخر في جرس المكالمة</label>
                                    
                                  </div>
                                 
                                </div>
                                
                              </div>
                              
                              <div class="row">
                                  <div class=" col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div>
                                        <label for="appttime5">من </label>
                                        <input class="my-card" type="time" id="appttime5" name="latetimefrom" disabled>
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div>
                                        <label for="appttime6">الى</label>
                                        <input class="my-card" type="time" id="appttime6" name="latetimeto" disabled>
                                      </div>
                                </div>
                              </div>
                             
                              
                        </div>



                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="bor">
                                  <div class="">
                                    <input type="checkbox" name="callreason" id="callreson" value="سبب المكالمة">
                                    <label class="form-check-label" for="callreson">سبب المكالمة</label>
                                  </div>
                                </div>
                                
                              </div>

                              <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div>
                                      <label for="appttime7">من</label>
                                      <input class="my-card" type="time" id="appttime7" name="resontimefrom" disabled>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div>
                                      <label for="appttime8">الى</label>
                                      <input class="my-card" type="time" id="appttime8" name="resontimeto" disabled>
                                    </div>
                              </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="numbarea1">ادخل الرقم</label>
                                <textarea class="my-card txt form-control" name="callleatnum" id="numbarea1" rows="3" placeholder="ادخل الارقام هنا" disabled></textarea>
                              </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="numbarea2">ادخل الرقم</label>
                                <textarea class=" my-card txt form-control" name="callreasonnum" id="numbarea2" rows="3" placeholder="ادخل الارقام هنا" disabled></textarea>
                              </div>
                        </div>

                    </div>

                   

                    
                      
                      


                    <button type="submit" class="btn btn-primary mt-5 mb-3">تسجيل المراعاة التقييم</button>
                  </form>
            </div>


    
    
    </div>
    






    
<?php 
 include "include/footer.php";
?>







