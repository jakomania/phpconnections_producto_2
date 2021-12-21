<?php require APPROOT . '/views/inc/header.php'; ?>
  
<table boder=1>

<tr>
    <th>Name</th>    
    <th>Course</th>
    <th>Class</th>
    <th>Date-start</th>    
    <th>Time-start</th>
    <th>Time-end</th>    
</tr>


 <?php

  foreach ($data as $row)
  {
    $teacher = $row->name . " " . $row->surname;
    $course = $row->course;
    $class = $row->class;
    $day = $row->day;
    $start = $row->start;
    $end = $row->end;        


     echo '<tr>
          <td>'.$teacher.'</td>        
          <td>'.$course.'</td>
          <td>'.$class.'</td>  
          <td>'.$day.'</td>                    
          <td>'.$start.'</td>          
          <td>'.$end.'</td>
          ';
   }
  ?>

</table>

<?php require APPROOT . '/views/inc/footer.php'; ?>