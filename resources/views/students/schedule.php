<?php require APPROOT . '/views/inc/header.php'; ?>
<?php var_dump($query); ?>
<div class="text-center">  
  <img  src="<?php echo constant('URLROOT')  . '/public/assets/icons/admin-sm.png' ?>" </img>
</div>
  <div class="row px-3">
    <div class="col">
      <div class="card card-body bg-light mt-5">
        <h2 class="mb-3">Schedule of courses</h2>
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
                <th scope="col">Start time</th>
                <th scope="col">End time</th>
                <th scope="col">Day</th>
                <th scope="col">                                    
                </div>
                </th>                            
            </tr>                  
          </thead>
          <?php        
            foreach($data['enrollments'] as $row){                   
          ?>
            <tr scope="row">      
              <tbody>
                <td><?php echo $rows->id; ?></td>
                <td><?php echo $rows->name; ?></td>
                <td><?php echo $row->surname; ?></td>
                <td><?php echo $row->course; ?></td>
                <td><?php echo $row->description; ?></td>
                <td><?php echo $row->date_start; ?></td>
                <td><?php echo $row->date_end; ?></td>
                <td><?php echo $row->time_start; ?></td>
                <td><?php echo $row->time_end; ?></td>
                <td><?php echo $row->day; ?></td>                  
              </tbody>  
            </tr>
          <?php } ?>
        </table>
      </div>   
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

