<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Course Information</h2>        
        <div class="row">
          <div class="col">
            <label for="">Name:</label>
            <h4><?php echo $data['name'] ?></h4>
            <label for="">Description</label>
            <h4><?php echo $data['description'] ?></h4>
            <label for="">Date start:</label>
            <h4><?php echo date_format(date_create($data['date_start']), 'd M, Y') ?></h4>
            <label for="">Date end:</label>
            <h4><?php echo date_format(date_create($data['date_end']), 'd M, Y') ?></h4>
            <label for="">Active:</label>
            <h4>This course is <?php echo ($data['active'] ? 'active' : 'not active') ?></h4>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <a href="<?php echo URLROOT.'/courses/edit/'.$data['id_course']; ?>" class="btn btn-success btn-block">Edit Course</a>
          </div>
          <div class="col">
            <a href="<?php echo URLROOT.'/courses/delete/'.$data['id_course']; ?>" class="btn btn-danger btn-block">Delete Course</a>
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