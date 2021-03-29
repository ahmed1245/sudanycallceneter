<?php 
$title = "مراعاة فارق الزمن";


include "admin/config.php";





include "include/header.php";

?>


    <div class="container">
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
                if($title == "مراعاة فارق الزمن"){
                  $pgtitle =$title;
                }

                $checkbox1='';
                if(isset($_POST['device'])&&isset($_POST['headphone'])){
                  $checkbox = array();
                  $checkbox[]= $_POST['device'];
                  $checkbox[]= $_POST['headphone'];
  
  
                  $checkbox1 = implode(',', $checkbox);
                }elseif(!isset($_POST['device'])&&isset($_POST['headphone'])){
                  $checkbox1 =$_POST['headphone'];
                }else{
                  $checkbox1 =$_POST['device'];
                }

                $thetime='';
                if(isset($_POST['device'])&&isset($_POST['headphone'])){

                  $time= array();
                  $time[]= $_POST['devtimefrom'];
                  $time[]= $_POST['devtimeto'];


                  $time1= array();
                  $time1[]= $_POST['speaktimefrom'];
                  $time1[]= $_POST['speaktimeto'];
  
                  $settime= array();
                  $settime[] = implode('to', $time);
                  $settime[] = implode('to', $time1);

                  $thetime = implode(',',$settime);

                }elseif(!isset($_POST['device'])&&isset($_POST['headphone'])){
                  $time1= array();
                  $time1[]= $_POST['speaktimefrom'];
                  $time1[]= $_POST['speaktimeto'];

                  $thetime = implode('to', $time1);

                }else{
                  $time= array();
                  $time[]= $_POST['devtimefrom'];
                  $time[]= $_POST['devtimeto'];
                  $thetime = implode('to', $time);
                }
                
                $nulll = 'خالي';
               

                $item_sql = "INSERT INTO observance(obs_uid, obs_uname, obs_type, obs_reason, obs_time, obs_number, obs_date)
                                              VALUE(:obs_uid, :obs_uname, :obs_type, :obs_reason, :obs_time, :obs_number, now())";
                $stmt = $con->prepare($item_sql);
                $stmt->bindParam(':obs_uid',$_POST['uidnumber'], PDO::PARAM_STR);
                $stmt->bindParam(":obs_uname", $_POST['uname'], PDO::PARAM_STR);
                $stmt->bindParam(":obs_type",$pgtitle , PDO::PARAM_STR);
                $stmt->bindParam(":obs_reason",$checkbox1 , PDO::PARAM_STR);
                $stmt->bindParam(":obs_time",$thetime , PDO::PARAM_STR);
                $stmt->bindParam(":obs_number",$nulll , PDO::PARAM_STR);
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
        <div class="row justify-content-center">
          
            <div class="bord my-card col-12 col-sm-12 col-md-6 col-lg-6 bg-light">
           
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="text-center">
                        <label>مراعاة فارق الزمن</label>
                    </div>
                    
                    
                    <div class="form-group">
                      <label >ID Number</label>
                      <input  type="text" class="txt my-card form-control"  name="uidnumber" placeholder="ادخل رقم المعرف">
                      
                    </div>
                    <div class=" form-group">
                      <label >الأسم</label>
                      <input type="text" class="txt my-card  form-control"  placeholder="ادخل الاسم كامل" name="uname">
                    </div>
                    <div class="row">


                        <div class="col-6">
                            
                            <div class="input-group mb-3">
                                <div class="bor">
                                  <div class="">
                                    <input  type="checkbox"  id="device" name="device" value="جهاز">
                                    <label class="form-check-label" for="device">جهاز</label>
                                    
                                  </div>
                                 
                                </div>
                                
                              </div>
                              <div class="row">
                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div>
                                        <label for="appttime1">من</label>
                                        <input class='my-card' type="time" id="appttime1" name="devtimefrom" disabled>
                                      </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                    <div>
                                        <label for="appttime2">الى</label>
                                        <input class='my-card' type="time" id="appttime2" name="devtimeto" disabled>
                                      </div>
                                </div>
                              </div>
                             
                              
                        </div>



                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="bor">
                                  <div class="">
                                    <input type="checkbox"  id="headphone" name="headphone" value="سماعة">
                                    <label class=" form-check-label" for="headphone" >سماعة</label>
                                  </div>
                                </div>
                                
                              </div>

                              <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div>
                                      <label for="appttime3">من </label>
                                      <input class='my-card' type="time" id="appttime3" name="speaktimefrom" disabled>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                  <div>
                                      <label for="appttime4">الى</label>
                                      <input class='my-card' type="time" id="appttime4" name="speaktimeto" disabled>
                                    </div>
                              </div>
                              
                            
                                
                                
                              
                       
                            </div>
                        </div>

                    </div>

                   

                    
                      
                      


                    <button type="submit" class="my-card btn btn-primary mt-5 mb-5">تسجيل مراعاة فارق الزمن</button>
                  </form>
                  
                  </div>
                  
                 
            


            





        </div>
    
        <?php 
 include "include/footer.php";
?>








