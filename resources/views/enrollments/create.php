<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Add a New Enrollment</h2>        
        <form action="<?php echo URLROOT.'/enrollments/create'; ?>" method="post">
          <div class="form-group">
            <label for="status">Status: <sup>*</sup></label>
            <input type="text" name="status" class="form-control form-control-lg <?php echo (!empty($data['status_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['status']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>       
        <div class="form-group">
      <label  for="student">Student: <sup>*</sup></label>
      <select name="user_id"  class="form-control form-control-lg mb-3">
      <option selected><?php  echo($_SESSION['user_id']) ?></option>
        <!--<?php  { ?>        
            <option value="<?php echo $_SESSION['user_id']?>"></option>
        <?php } ?>  -->                                      
      </select>
      <span class="invalid-feedback"><?php echo $data['student_err']; ?></span>
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
              <a href="<?php echo URLROOT; ?>/enrollments/schedule" class="btn btn-success btn-block">Return to schedule of courses</a>
              </div>
        </div>  
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>