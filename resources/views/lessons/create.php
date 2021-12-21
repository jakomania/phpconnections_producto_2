<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Add a New Class</h2>        
        <form action="<?php echo URLROOT.'/lessons/create/'; ?>" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="color">Color: <sup>*</sup></label>
            <input type="text" name="color" class="form-control form-control-lg <?php echo (!empty($data['color_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['color']; ?>">
            <span class="invalid-feedback"><?php echo $data['color_err']; ?></span>
          </div>        
        <div class="form-group">
      <label  for="teacher">Teacher: <sup>*</sup></label>
      <select name="id_teacher"  class="form-control form-control-lg mb-3">
      <option selected>Select a teacher</option>
        <?php 
          foreach($data['teachers'] as $row) { ?>        
            <option value="<?php echo $row->id_teacher?>"><?php echo $row->name . ' ' . $row->surname;?></option>
        <?php } ?>                                        
      </select>
      <span class="invalid-feedback"><?php echo $data['teacher_err']; ?></span>
    </div>  
    <div class="form-group">
    <label for="course">Course: <sup>*</sup></label>
    <select name="id_course"  class="form-control form-control-lg mb-3">
      <option selected>Select a course</option>
        <?php 
          foreach($data['courses'] as $row) { ?>        
            <option value="<?php echo $row->id_course?>"><?php echo $row->name;?></option>
        <?php } ?>                                        
      </select>            
        <san class="invalid-feedback"><?php echo $data['course_err']; ?></span>
          </div>  

          <div class="form-group">
      <label for="schedule">Schedule: <sup>*</sup></label>
      <select name="id_schedule"  class="form-control form-control-lg mb-3">
        <option selected>Select a schedule</option>
        <?php 
          foreach($data['schedules'] as $row) { ?>        
            <option value="<?php echo $row->id_schedule?>"><?php echo $row->day;?></option>
        <?php } ?>                                        
      </select>                                    
            <span class="invalid-feedback"><?php echo $data['schedule_err']; ?></span>
          </div>  
          
          <div class="row">
            <div class="col">
              <input type="submit" value="Create" class="btn btn-success btn-block">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row">  
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <div class="row mt-3">
              <div class="col">
              <a href="<?php echo URLROOT; ?>/admins/index" class="btn btn-success btn-block">Return to Admin panel</a>
              </div>
        </div>  
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>