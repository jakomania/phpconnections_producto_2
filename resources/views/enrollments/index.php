<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Enrollment Information</h2>        
        <div class="row">
          <div class="col">
            <label for="">Status:</label>
            <h4><?php echo $data['status'] ?></h4>
            <label for="">Student:</label>
            <h4><?php echo $data['student']; ?></h4>
            <label for="">Course:</label>
            <h4><?php echo $data['course']; ?></h4>
            
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <a href="<?php echo URLROOT.'/enrollments/edit/'.$data['id_enrollment']; ?>" class="btn btn-success btn-block">Edit Enrollment</a>
          </div>
          <div class="col">
            <a href="<?php echo URLROOT.'/enrollment/delete/'.$data['id_enrollment']; ?>" class="btn btn-danger btn-block">Delete Enrollment</a>
          </div>
        </div>
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