<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Class Information</h2>        
        <div class="row">
          <div class="col">
            <label for="">Name:</label>
            <h4><?php echo $data['name'] ?></h4>
            <label for="">Color:</label>
            <h4><?php echo $data['color'] ?></h4>
            <label for="">Teacher:</label>
            <h4><?php echo $data['teacher']; ?></h4>
            <label for="">Course:</label>
            <h4><?php echo $data['course']; ?></h4>
            <label for="">Schedule:</label>
            <h4><?php echo $data['schedule']; ?></h4>
            
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <a href="<?php echo URLROOT.'/lessons/edit/'.$data['id_class']; ?>" class="btn btn-success btn-block">Edit Class</a>
          </div>
          <div class="col">
            <a href="<?php echo URLROOT.'/lessons/delete/'.$data['id_class']; ?>" class="btn btn-danger btn-block">Delete Class</a>
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
              <a href="<?php echo URLROOT; ?>/admins/index" class="btn btn-success btn-block">Return to Admin panel</a>
              </div>
        </div>  
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>