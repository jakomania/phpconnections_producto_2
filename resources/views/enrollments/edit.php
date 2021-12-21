<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Edit Enrollment</h2>        
        <form action="<?php echo URLROOT.'/enrollments/edit/'.$data['id_enrollment']; ?>" method="post">
          <div class="form-group">
            <label for="status">Status: <sup>*</sup></label>
            <input type="text" name="status" class="form-control form-control-lg <?php echo (!empty($data['status_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['status']; ?>">
            <span class="invalid-feedback"><?php echo $data['status_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="student">Student: </label>
            <select name="user_id"  class="form-control form-control-lg mb-3">
              <option  value="<?php echo $data['user_id']?>" selected><?php echo $data['student']; ?></option>
          <?php 
            foreach($data['students'] as $row) { 
              if ($row->id_student != $data['user_id']) {
              ?>        
                <option value="<?php echo $row->user_id?>"><?php echo $row->name . ' ' . $row->surname;?></option>
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