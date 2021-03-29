<?php 
$title = "مراعاة فارق زمن و تقييم";


include "admin/config.php";
include "include/header.php";








?>


              <div class="container">
                <?php
                  
                 if($_SERVER["REQUEST_METHOD"] == 'POST'){
                  $time_Observance_error =array();
                   
                  if(empty($_POST['alluidnumber'])){

                    $time_Observance_error[]="الرجاء كتابة<strong>رقم المعرف</string>";
                  }

                  if(empty($_POST['alluname'])){

                    $time_Observance_error[]="الرجاء كتابة<strong>الاسم</string>";
                  }

                  if(!isset($_POST['allcalllate'])&&!isset($_POST['allcallreason'])&&!isset($_POST['alldevice'])&&!isset($_POST['allheadphone'])){

                    $time_Observance_error[]="الرجاء اختيار واحد <strong>على الاقل</string>";
                  }

                  if(isset($_POST['allcalllate'])){

                    if(!isset($_POST['alllatetimefrom'])&&!isset($_POST['alllatetimeto'])){
                    $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
                  }

                 }

                 if(isset($_POST['allcallreason'])){

                  if(!isset($_POST['allresontimefrom'])&&!isset($_POST['allresontimeto'])){
                  $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
                }

               }

               if(isset($_POST['alldevice'])){

                if(!isset($_POST['alldevtimefrom'])&&!isset($_POST['alldevtimeto'])){
                $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
              }

             }

             if(isset($_POST['allheadphone'])){

              if(!isset($_POST['allspeaktimefrom'])&&!isset($_POST['allspeaktimeto'])){
              $time_Observance_error[]="الرجاء كتابة <strong>الزمن</string>";
            }

           }
           
           if(empty($_POST['allnumber'])&&empty($_POST['allnumber1'])){

            $time_Observance_error[]="الرجاء كتابة<strong>الأرقام</string>";
          }


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
                if($title == "مراعاة فارق زمن و تقييم"){
                  $pgtitle =$title;
                }
                $checkbox0= '';
                if(isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $checkbox = array();
                  $checkbox[]= $_POST['allcalllate'];
                  $checkbox[]= $_POST['allcallreason'];
                  $checkbox[]= $_POST['alldevice'];
                  $checkbox[]= $_POST['allheadphone'];
  
  
                  $checkbox0 = implode(',', $checkbox);
                }elseif(!isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $checkbox1 = array();
                  $checkbox1[]= $_POST['allcallreason'];
                  $checkbox1[]= $_POST['alldevice'];
                  $checkbox1[]= $_POST['allheadphone'];
                  $checkbox0 = implode(',', $checkbox1);

                }elseif(!isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&!isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $checkbox2 = array();
                  $checkbox2[]= $_POST['allcallreason'];
                  $checkbox2[]= $_POST['allheadphone'];
                  $checkbox0 = implode(',', $checkbox2);

                }elseif(isset($_POST['allcalllate'])&&!isset($_POST['allcallreason'])&&!isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $checkbox3 = array();
                  $checkbox3[]= $_POST['allcalllate'];
                  $checkbox3[]= $_POST['allheadphone'];
  
  
                  $checkbox0 = implode(',', $checkbox3);
                }elseif(isset($_POST['allcalllate'])&&!isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&!isset($_POST['allheadphone'])){
                  $checkbox4 = array();
                  $checkbox4[]= $_POST['allcalllate'];
                  $checkbox4[]= $_POST['alldevice'];
              
  
  
                  $checkbox0 = implode(',', $checkbox4);
                }elseif(!isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&!isset($_POST['allheadphone'])){
                  $checkbox4 = array();
                  $checkbox5 =$_POST['alldevice'];
                  $checkbox5 =$_POST['allcallreason'];
                  $checkbox0 = implode(',', $checkbox5);
                }elseif(isset($_POST['allcalllate'])&&!isset($_POST['allcallreason'])&&!isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $checkbox6 = array();
                  $checkbox6[]= $_POST['allcalllate'];
                  $checkbox6[]= $_POST['allheadphone'];
                  $checkbox0 = implode(',', $checkbox6);
                }elseif(isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&!isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $checkbox7 = array();
                  $checkbox7[]= $_POST['allcalllate'];
                  $checkbox7[]= $_POST['allheadphone'];
                  $checkbox7[]= $_POST['allcallreason'];
                  $checkbox0 = implode(',', $checkbox7);
                }elseif(isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&!isset($_POST['allheadphone'])){
                  $checkbox8 = array();
                  $checkbox8[]= $_POST['allcalllate'];
                  $checkbox8[]= $_POST['alldevice'];
                  $checkbox8[]= $_POST['allcallreason'];
                  $checkbox0 = implode(',', $checkbox8);
                }elseif(isset($_POST['allcalllate'])&&!isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $checkbox9 = array();
                  $checkbox9[]= $_POST['allcalllate'];
                  $checkbox9[]= $_POST['alldevice'];
                  $checkbox9[]= $_POST['allheadphone'];
                  $checkbox0 = implode(',', $checkbox9);
                }

                
                ////////////////////////////////////
                $thetime='';
                if(isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $time01= array();
                  $time01[]= $_POST['alllatetimefrom'];
                  $time01[]= $_POST['alllatetimeto'];
                  $settime01 = array();
                  $settime01[]=implode('to', $time01);
                  


                  $time02= array();
                  $time02[]= $_POST['allresontimefrom'];
                  $time02[]= $_POST['allresontimeto'];
                  $settime01[]=implode('to', $time02);




                  $time03= array();
                  $time03[]= $_POST['alldevtimefrom'];
                  $time03[]= $_POST['alldevtimeto'];

                  $settime01[]=implode('to', $time03);
                  $time04= array();
                  $time04[]= $_POST['allspeaktimefrom'];
                  $time04[]= $_POST['allspeaktimeto'];
                  $settime01[]=implode('to', $time04);

                  $thetime = implode(',',$settime01);

                 
                }elseif(!isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  
                  
                  $settime11 = array();
                  
                  


                  $time12= array();
                  $time12[]= $_POST['allresontimefrom'];
                  $time12[]= $_POST['allresontimeto'];
                  $settime01[]=implode('to', $time12);




                  $time13= array();
                  $time13[]= $_POST['alldevtimefrom'];
                  $time13[]= $_POST['alldevtimeto'];

                  $settime01[]=implode('to', $time13);
                  $time14= array();
                  $time14[]= $_POST['allspeaktimefrom'];
                  $time14[]= $_POST['allspeaktimeto'];
                  $settime11[]=implode('to', $time14);

                  $thetime = implode(',',$settime11);

                }elseif(!isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&!isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  
                  $settime21 = array();
                  
                  $time22= array();
                  $time22[]= $_POST['allresontimefrom'];
                  $time22[]= $_POST['allresontimeto'];
                  $settime01[]=implode('to', $time22);
                  
                  $time24= array();
                  $time24[]= $_POST['allspeaktimefrom'];
                  $time24[]= $_POST['allspeaktimeto'];
                  $settime21[]=implode('to', $time24);

                  $thetime = implode(',',$settime21);
                }elseif(isset($_POST['allcalllate'])&&!isset($_POST['allcallreason'])&&!isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $time31= array();
                  $time31[]= $_POST['alllatetimefrom'];
                  $time31[]= $_POST['alllatetimeto'];
                  $settime31 = array();
                  $settime31[]=implode('to', $time31);
                  
                  $time34= array();
                  $time34[]= $_POST['allspeaktimefrom'];
                  $time34[]= $_POST['allspeaktimeto'];
                  $settime31[]=implode('to', $time34);

                  $thetime = implode(',',$settime31);
                }elseif(isset($_POST['allcalllate'])&&!isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&!isset($_POST['allheadphone'])){
                  $time41= array();
                  $time41[]= $_POST['alllatetimefrom'];
                  $time41[]= $_POST['alllatetimeto'];
                  $settime41 = array();
                  $settime41[]=implode('to', $time41);
                  


                




                  $time43= array();
                  $time43[]= $_POST['alldevtimefrom'];
                  $time43[]= $_POST['alldevtimeto'];

                  $settime41[]=implode('to', $time43);
                  

                  $thetime = implode(',',$settime41);
                }elseif(!isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&!isset($_POST['allheadphone'])){
                
                  $settime51 = array();
                  
                  


                  $time52= array();
                  $time52[]= $_POST['allresontimefrom'];
                  $time52[]= $_POST['allresontimeto'];
                  $settime51[]=implode('to', $time52);




                  $time53= array();
                  $time53[]= $_POST['alldevtimefrom'];
                  $time53[]= $_POST['alldevtimeto'];

                  $settime51[]=implode('to', $time53);
                  

                  $thetime = implode(',',$settime51);
                }elseif(isset($_POST['allcalllate'])&&!isset($_POST['allcallreason'])&&!isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $time61= array();
                  $time61[]= $_POST['alllatetimefrom'];
                  $time61[]= $_POST['alllatetimeto'];
                  $settime61 = array();
                  $settime61[]=implode('to', $time61);
                  


                  




                 
                  $time64= array();
                  $time64[]= $_POST['allspeaktimefrom'];
                  $time64[]= $_POST['allspeaktimeto'];
                  $settime61[]=implode('to', $time64);

                  $thetime = implode(',',$settime61);
                }elseif(isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&!isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $time71= array();
                  $time71[]= $_POST['alllatetimefrom'];
                  $time71[]= $_POST['alllatetimeto'];
                  $settime71 = array();
                  $settime71[]=implode('to', $time71);
                  


                  $time72= array();
                  $time72[]= $_POST['allresontimefrom'];
                  $time72[]= $_POST['allresontimeto'];
                  $settime71[]=implode('to', $time72);




                 
                  $time74= array();
                  $time74[]= $_POST['allspeaktimefrom'];
                  $time74[]= $_POST['allspeaktimeto'];
                  $settime71[]=implode('to', $time74);

                  $thetime = implode(',',$settime71);
                }elseif(isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&!isset($_POST['allheadphone'])){
                  $time81= array();
                  $time81[]= $_POST['alllatetimefrom'];
                  $time81[]= $_POST['alllatetimeto'];
                  $settime81 = array();
                  $settime01[]=implode('to', $time81);
                  


                  $time82= array();
                  $time82[]= $_POST['allresontimefrom'];
                  $time82[]= $_POST['allresontimeto'];
                  $settime81[]=implode('to', $time82);




                  $time83= array();
                  $time83[]= $_POST['alldevtimefrom'];
                  $time83[]= $_POST['alldevtimeto'];

                  $settime81[]=implode('to', $time83);
                  

                  $thetime = implode(',',$settime81);
                }elseif(isset($_POST['allcalllate'])&&!isset($_POST['allcallreason'])&&isset($_POST['alldevice'])&&isset($_POST['allheadphone'])){
                  $time91= array();
                  $time91[]= $_POST['alllatetimefrom'];
                  $time91[]= $_POST['alllatetimeto'];
                  $settime91 = array();
                  $settime91[]=implode('to', $time91);
                  


                  




                  $time93= array();
                  $time93[]= $_POST['alldevtimefrom'];
                  $time93[]= $_POST['alldevtimeto'];

                  $settime91[]=implode('to', $time93);

                  $time94= array();
                  $time94[]= $_POST['allspeaktimefrom'];
                  $time94[]= $_POST['allspeaktimeto'];
                  $settime91[]=implode('to', $time94);

                  $thetime = implode(',',$settime91);
                }


                
               

               

                
                $thenumber='';
                if(isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])){

                  $number1= array();
                  $number1[]= $_POST['allnumber'];
                  


                  $number2= array();
                  $number2[]= $_POST['allnumber1'];
                  
  
                  $allnumber= array();
                  $allnumber[] = implode('-', $number1);
                  $allnumber[] = implode('-', $number2);
                  

                  $thenumber = implode(',',$allnumber);

                }elseif(!isset($_POST['allcalllate'])&&isset($_POST['allcallreason'])){
                  
                  $number2= array();
                  $number2[]= $_POST['allnumber1'];
                  $thenumber = implode('-', $number2);

                }else{
                  
                  $number1= array();
                  $number1[]= $_POST['allnumber'];

                  $thenumber = implode('-', $number1);
                }

                $item_sql = "INSERT INTO observance(obs_uid, obs_uname, obs_type, obs_reason, obs_time, obs_number, obs_date)
                VALUE(:obs_uid, :obs_uname, :obs_type, :obs_reason, :obs_time, :obs_number, now())";

                $stmt = $con->prepare($item_sql);

                $stmt->bindParam(':obs_uid',$_POST['alluidnumber'], PDO::PARAM_STR);
                $stmt->bindParam(":obs_uname", $_POST['alluname'], PDO::PARAM_STR);
                $stmt->bindParam(":obs_type",$pgtitle , PDO::PARAM_STR);
                $stmt->bindParam(":obs_reason",$checkbox0 , PDO::PARAM_STR);
                $stmt->bindParam(":obs_time",$thetime , PDO::PARAM_STR);
                $stmt->bindParam(":obs_number",$thenumber , PDO::PARAM_STR);
               
                if ($stmt->execute()) {
                  $msg =  '<div class="alert alert-success text-center " >';
                  $msg .= '<span class="errorpass">';
                  $msg .= "تمت اضافة المراعاة بنجاح";
                  $msg .= '</span>';
                  $msg .= '</div>';
                  redirect($msg, 'back', 10);
                }

                }

                




                 }
                ?>


                  <div class="row justify-content-center">
                      <div class="my-card col-12 col-sm-12 col-md-12 col-lg-6 bg-light">
                    
                      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                              <div class=" text-center">
                                  <label>مراعاة التقييم و فارق الزمن</label>
                              </div>
                              
                              
                              <div class="form-group">
                                <label for="idnumber">ID Number</label>
                                <input type="text" class="txt my-card form-control" id="idnumber" aria-describedby="emailHelp" name="alluidnumber" placeholder="ادخل رقم المعرف">
                                
                              </div>
                              <div class="form-group">
                                <label for="name">الأسم</label>
                                <input type="text" class="txt my-card form-control" id="name" placeholder="ادخل الاسم كامل" name="alluname">
                              </div>
                              <div class="row">


          <div class="col-6">
              
              <div class="input-group mb-2">
                  <div class="bor">
                    <div class="">
                      <input  type="checkbox"name="allcalllate" value="تأخر في جرس المكالمة" aria-label="Checkbox for following text input" id="callleat">
                      <label class="form-check-label" for="callleat">تأخر في جرس المكالمة</label>
                      
                    </div>
                  
                  </div>
                  
                </div>
                
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                      <div>
                          <label for="appttime01">من </label>
                          <input class="my-card" type="time" id="appttime01" name="alllatetimefrom" disabled>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                      <div>
                          <label for="appttime02">الى</label>
                          <input class="my-card" type="time" id="appttime02" name="alllatetimeto" disabled>
                        </div>
                  </div>
                </div>
              
                
          </div>



          <div class="col-6">
              <div class="input-group mb-2">
                  <div class="bor">
                    <div class="">
                      <input type="checkbox" name="allcallreason" value="سبب المكالمة" aria-label="Checkbox for following text input" id="call-reson">
                      <label class="form-check-label" for="call-reson">سبب المكالمة</label>
                    </div>
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div>
                        <label for="appttime03">من</label>
                        <input class="my-card" type="time" id="appttime03" name="allresontimefrom" disabled>
                      </div>
                  </div>

                  <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div>
                        <label for="appttime04">الى</label>
                        <input class="my-card" type="time" id="appttime04" name="allresontimeto" disabled>
                      </div>
                </div>
              </div>
          </div>

          </div>
                              <div class="row">


                                  <div class="col-6">
                                      
                                      <div class="input-group mb-2">
                                          <div class="bor">
                                            <div class="">
                                              <input  type="checkbox" aria-label="Checkbox for following text input" id="deviceall" name="alldevice" value="جهاز">
                                              <label class="form-check-label" for="deviceall">جهاز</label>
                                              
                                            </div>
                                          
                                          </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                              <div>
                                                  <label for="appttime05">من</label>
                                                  <input class="my-card" type="time" id="appttime05" name="alldevtimefrom" disabled>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 ">
                                              <div>
                                                  <label for="appttime06">الى</label>
                                                  <input class="my-card" type="time" id="appttime06" name="alldevtimeto" disabled>
                                                </div>
                                          </div>
                                        </div>
                                      
                                        
                                  </div>



                                  <div class="col-6">
                                      <div class="input-group mb-2">
                                          <div class="bor">
                                            <div class="">
                                              <input type="checkbox" aria-label="Checkbox for following text input" id="headphoneall" name="allheadphone" value="سماعة">
                                              <label class="form-check-label" for="headphoneall">سماعة</label>
                                            </div>
                                          </div>
                                          
                                        </div>

                                        <div class="row">
                                          <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div>
                                                <label for="appttime07">من </label>
                                                <input class="my-card" type="time" id="appttime07" name="allspeaktimefrom" disabled>
                                              </div>
                                          </div>

                                          <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                            <div>
                                                <label for="appttime08">الى</label>
                                                <input class="my-card" type="time" id="appttime08" name="allspeaktimeto" disabled>
                                              </div>
                                        </div>
                                      </div>
                                  </div>

                              </div>
                              <div class="row">
                                  <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                      <div class="form-group">
                                          <label for="alltxtarea1">ادخل الرقم</label>
                                          <textarea class="my-card form-control" id="alltxtarea1" name="allnumber" rows="3" placeholder="ادخل الارقام هنا" disabled></textarea>
                                        </div>
                                  </div>

                                  <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                      <div class="form-group">
                                          <label for="alltxtarea2">ادخل الرقم</label>
                                          <textarea class="my-card form-control" id="alltxtarea2"name="allnumber1" rows="3" placeholder="ادخل الارقام هنا" disabled></textarea>
                                        </div>
                                  </div>

                              </div>

                            

                              
                                
                                


                              <button type="submit" class="btn btn-primary mt-2">تسجيل المراعاة الزمن</button>
                            </form>
                            </div>
                          
                      


                    


    </div>
              </div>
    






    
<?php 
include "include/footer.php";
?>