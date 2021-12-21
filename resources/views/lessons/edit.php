<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Edit Class</h2>        
        <form action="<?php echo URLROOT.'/lessons/edit/'.$data['id_class']; ?>" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="description">Color: <sup>*</sup></label>
            <input type="text" name="color" class="form-control form-control-lg <?php echo (!empty($data['color_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['color']; ?>">
            <span class="invalid-feedback"><?php echo $data['color_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="teacher">Teacher: </label>
            <select name="id_teacher"  class="form-control form-control-lg mb-3">
              <option  value="<?php echo $data['id_teacher']?>" selected><?php echo $data['teacher']; ?></option>
          <?php 
            foreach($data['teachers'] as $row) { 
              if ($row->id_teacher != $data['id_teacher']) {
              ?>        
                <option value="<?php echo $row->id_teacher?>"><?php echo $row->name . ' ' . $row->surname;?></option>
          <?php 
              } 
            }  
           ?>                                        
            </select>
          </div>
          <div class="form-group">
            <label for="course">Course:</label>
            <select name="id_course"  class="form-control form-control-lg mb-3">
              <option value="<?php echo $data['id_course']?>" selected><?php echo $data['course']; ?></option>
          <?php 
            foreach($data['courses'] as $row) { 
              if ($row->id_course != $data['id_course']) {
              ?>        
                <option value="<?php echo $row->id_course?>"><?php echo $row->name; ?></option>
          <?php } } ?>                                        
            </select>
            
            
            <span class="invalid-feedback"><?php echo $data['course_err']; ?></span>
          </div>  
          <div class="form-group">
            <label for="schedule">Schedule: </label>
            <select name="id_schedule"  class="form-control form-control-lg mb-3">
              <option value="<?php echo $data['id_schedule']?>" selected><?php echo $data['day'] . ' ' . $data['time_start'] . ' ' . $data['time_end'];?></option>
          <?php 
            foreach($data['schedules'] as $row) { 
              if ($row->id_schedule != $data['id_schedule']) {
              ?>        
                <option value="<?php echo $row->id_schedule?>"><?php echo $row->day . ' ' . $row->time_start . ' ' . $row->time_end;?></option>
          <?php } } ?>                                        
            </select>
            
            <span class="invalid-feedback"><?php echo $data['schedule_err']; ?></span>
          </div>  
          
          <div class="row">
            <div class="col">
              <input type="submit" value="Update" class="btn btn-success btn-block">
              
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>