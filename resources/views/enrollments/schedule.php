<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="text-center">  
  <img  src="<?php echo constant('URLROOT')  . '/public/assets/icons/admin-sm.png' ?>" </img>
</div>
  <div class="row px-3">
    <div class="col">
      <div class="card card-body bg-light mt-5">
        <h2 class="mb-3">Schedule of courses</h2>
                
        <div class="btn-group">
                      <a href="<?php echo URLROOT; ?>/enrollments/schedule" class="btn btn-primary">All courses</a>
                      <a href="<?php echo URLROOT; ?>/enrollments/scheduleb" class="btn btn-primary">Courses of the day</a>
                      <a href="<?php echo URLROOT; ?>/enrollments/schedulec" class="btn btn-primary">Courses of the week</a>
                      <a href="<?php echo URLROOT; ?>/enrollments/scheduled" class="btn btn-primary">Courses of the month</a>
            </div>
        <table class="table table-hover table-sm">            
          <thead >
            <tr>                  
                <th scope="col">Id</th>    
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Course name</th>
                <th scope="col">Description</th>
                <th scope="col">Start date</th>
                <th scope="col">End date</th>
                <th scope="col">Class</th>
                <th scope="col">Color</th>                
                <th scope="col">Start time</th>
                <th scope="col">End time</th>
                <th scope="col">Day</th>
                <th scope="col">  
                <a class="btn btn-info btn-sm" href="<?php echo constant('URLROOT') . '/enrollments/create' ?>">Create</a>                                     
                </div>
                </th>                            
            </tr>                  
          </thead>
          <?php        
            foreach($data['enrollments'] as $row){                   
          ?>
            <tr scope="row">      
              <tbody>
                <td><?php echo $row->id_enrollment; ?></td>
                <td><?php echo $row->alumno; ?></td>
                <td><?php echo $row->surname; ?></td>
                <td><?php echo $row->course; ?></td>
                <td><?php echo $row->description; ?></td>
                <td><?php echo $row->date_start; ?></td>
                <td><?php echo $row->date_end; ?></td>
                <td><?php echo $row->clase; ?></td>
                <td><?php echo $row->color; ?></td>
                <td><?php echo $row->time_start; ?></td>
                <td><?php echo $row->time_end; ?></td>
                <td><?php echo $row->day; ?></td> 
                <td>
                  <a class="btn btn-info btn-sm" href="<?php echo constant('URLROOT') . '/enrollments/' . $row ->id_enrollment ?>">View</a>                  
                </td>                 
              </tbody>  
            </tr>
          <?php } ?>
        </table>
      </div>   
    </div>
  </div>
  
<?php require APPROOT . '/views/inc/footer.php'; ?>

