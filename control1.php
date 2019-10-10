<h1 class="d-flex justify-content-center" >إدارة الاعضاء </h1>
<table class="table table-striped table-hover" dir="rtl">
  <thead>
    <tr style="text-algin:center;">
      <th scope="col">رقم </th>
      <th scope="col">الاسم </th>
      <th scope="col">المهنة</th>
      <th scope="col"> تاريخ الاشتراك  </th>
      <th scope="col">تعديل </th>
      <!-- <th scope="col"><button class=" btn btn-sm btn-secondary" onclick="">إضافة </button></th> -->
    </tr>
  </thead>
  <tbody>

        <?php

           include'conn.php';
            $query="select * from user_data";
            $sql=$connect->prepare($query);
            $sql->execute();
            $row = $sql->fetchAll();
            if (! empty($row)) {
            }
            foreach($row as $rows) {
        ?>
        
    <tr id="delete<?php echo  $rows['user_ID'];?>" >
      <th  scope="row"><?php echo  $rows['user_ID'];?></th>
      <td  scope="row"><?php echo  $rows['user_NAME']	;?></td>
      <td scope="row"><?php echo  $rows['jobs'];?></td>
      <td scope="row"><?php echo  $rows['data'] ;?></td>
      <td scope="row">
        
    <button class=" btn btn-sm btn-danger" onclick="return myFunction1(<?php echo $rows['user_ID'] ;?>)"   >حدف </button>      
    <!-- <a class="btn btn-sm btn-success" id="edit_user" data-id="<?php  $rows['user_ID'] ?>"><i class=" glyphicon glyphicon-trash" style="color:#fff;">تعديل </i></a> -->
    </td>
    </tr>
                <?php 
            }
           
            ?>
  </tbody>
</table>
