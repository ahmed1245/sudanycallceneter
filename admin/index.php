<?php

include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/call.css">
    <link rel="stylesheet" href="../lib/bootstrap-rtl.min.css">
    <title>admin</title>
</head>
<body>
<heder >
        <div class="container mt-2  ">

        <div class="bord2 my-card sec  bg-primary mb-2">
                         <h2 class="controll text-center">
                         لوحة التحكم
                         </h2>
                          
                        </div>
              
              
        </div>
      
           
         
    </heder>
    <div class=" mt-2  ">
    <?php
            $mg_sql = "SELECT * FROM observance ";
            $stmt =$con->prepare($mg_sql);
            $stmt->execute();
            $row = $stmt->fetchall();
    ?>

    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">رقم المعرف</th>
      <th scope="col">الاسم</th>
      <th scope="col">نوع المراعاة</th>
      <th scope="col">سبب المراعاة </th>
      <th scope="col">زمن المراعاة</th>
      <th scope="col">الارقام</th>
      <th scope="col">التاريخ</th>
      <th scope="col">خيارات</th>
    </tr>
  </thead>

  <tbody>
    
      <?php
      foreach ($row as $rows) {
        echo "<tr>";
        echo "<td>" . $rows['obs_id'] . "</td>";
        echo "<td>" . $rows['obs_uid'] . "</td>";
        echo "<td>" . $rows['obs_uname'] . "</td>";
        echo "<td>" . $rows['obs_type'] . "</td>";
        echo "<td>" . $rows['obs_reason'] . "</td>";
        echo "<td>" . $rows['obs_time'] . "</td>";
        echo "<td>" . $rows['obs_number'] . "</td>";
        echo "<td>" . $rows['obs_date'] . "</td>";
        echo "<td>";
        
        echo  '<a href="items.php?do=edit&userid=' . $rows['obs_uid'] . '" class="btn btn-success btn-sm mb-1 ">تعديل</a> ';

        echo  '<a href="items.php?do=delete&userid=' . $rows['obs_uid'] . '" class="btn btn-danger btn-sm mb-1">حذف</a> ';
       
        echo "</td>";
        
        echo "</tr>";

      }
      ?>
    
  </tbody>
    </table>
    </div>
    

<script src="../lib/jquery.js"></script>
<script src="../lib/bootstrap.min.js"></script>
<script src="../lib/call.js"></script>
</body>
</html>

