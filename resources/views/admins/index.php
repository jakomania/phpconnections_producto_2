<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="text-center">
  
  <img  src="<?php echo constant('URLROOT')  . '/public/assets/icons/admin-sm.png' ?>" </img>
</div>
      <div class="row px-3">
        <div class="col">
        <div class="card card-body bg-light mt-5">
          <h2 class="mb-3">Teachers</h2>
            <table class="table table-hover table-sm">            
              <thead >
                  <tr>                  
                      <th scope="col">NIF</th>    
                      <th scope="col">Name</th>
                      <th scope="col">Surname</th>
                      <th scope="col">                      
                      <a class="btn btn-info btn-sm" href="<?php echo constant('URLROOT') . '/teachers/create' ?>">Create</a>                    
                      </div>
                      </th>                            
                  </tr>                  
              </thead>
              <?php        
                foreach($data['teachers'] as $row){               
                  ?>
                <tr scope="row">      
                  <tbody>
                    <td><?php echo $row->nif; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->surname; ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="<?php echo constant('URLROOT') . '/teachers/' . $row ->id_teacher ?>">View</a>                  
                    </td>                      
                  </tbody>  
                </tr>
              <?php } ?>
            </table>
        </div>   
        </div>
      </div>
      <div class="row px-3">   
        <div class="col">
        <div class="card card-body bg-light mt-5">
          <h2 class="mb-3">Courses</h2>
            <table class="table table-hover table-sm">  
              <thead>
                <tr>
                    <th>Name</th>    
                    <th>Description</th>
                    <th scope="col">
                      <a class="btn btn-info btn-sm" href="<?php echo constant('URLROOT') . '/courses/create' ?>">Create</a>                    
                    </th>                           
                </tr>
              </thead>
              <tbody>
            <?php        
              foreach($data['courses'] as $row){               
                ?>  
                <tr>      
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->description; ?></td>        
                    <td><a class="btn btn-info btn-sm" href="<?php echo constant('URLROOT') . '/courses/' . $row ->id_course ?>">View</a></td>        
                </tr>
                <?php } ?>       
              </tbody>
            </table>
        </div>
        </div>   
      </div>
      <div class="row px-3">
        <div class="col">
        <div class="card card-body bg-light mt-5">        
          <h2 class="mb-3">Schedule</h2>
          <table class="table table-hover table-sm"> 
          <thead>
              <tr>
                  <th>Day</th>    
                  <th>Start time</th>
                  <th>End time</th>
                  <th scope="col">
                    <a class="btn btn-info btn-sm" href="<?php echo constant('URLROOT') . '/schedules/create' ?>">Create</a>                    
                  </th>                           
              </tr>          
          </thead>
          <tbody>
          <?php        
            foreach($data['schedules'] as $row){               
              ?>
              <tr>      
                  <td><?php echo $row->day; ?></td>
                  <td><?php echo $row->time_start; ?></td> 
                  <td><?php echo $row->time_end; ?></td>          
                  <td><a class="btn btn-info btn-sm" href="<?php echo constant('URLROOT') . '/schedules/' . $row ->id_schedule ?>">View</a></td>        
              </tr>
              <?php } ?>            
            </tbody>
          </table>
        </div>        
        </div>       
      </div>     
      <div class="row px-3">
        <div class="col">
        <div class="card card-body bg-light mt-5">        
          <h2 class="mb-3">Class</h2>
          <table class="table table-hover table-sm"> 
          <thead>
              <tr>
                  <th>Class</th>    
                  <th>Color</th>
                  <th scope="col">
                    <a class="btn btn-info btn-sm" href="<?php echo constant('URLROOT') . '/lessons/create' ?>">Create</a>                    
                  </th>                           
              </tr>          
          </thead>
          <tbody>
          <?php        
            foreach($data['class'] as $row){               
              ?>
              <tr>      
                  <td><?php echo $row->class; ?></td>
                  <td><?php echo $row->color; ?></td>        
                  <td><a class="btn btn-info btn-sm" href="<?php echo constant('URLROOT') . '/lessons/' . $row ->id_class ?>">View</a></td>        
              </tr>
              <?php } ?>            
            </tbody>
          </table>
        </div>        
        </div>       
      </div>
       
    



<?php require APPROOT . '/views/inc/footer.php'; ?>