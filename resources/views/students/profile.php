<?php require APPROOT . '/views/inc/header.php'; ?>

  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2 class="mb-3">Student Profile</h2>
        <div class="row">
          <div class="col">
            <label for="">Name:</label>
            <h4><?php echo $data['name'] ?></h4>
            <label for="">Surname:</label>
            <h4><?php echo $data['surname'] ?></h4>
            <label for="">Email:</label>
            <h4><?php echo $data['email'] ?></h4>
            <label for="">Username:</label>
            <h4><?php echo $data['username'] ?></h4>
            <label for="">Telephone:</label>
            <h4><?php echo $data['telephone'] ?></h4>
            <label for="">NIF:</label>
            <h4><?php echo $data['nif'] ?></h4>
            <label for="">Student since:</label>
            <h4><?php echo date_format(date_create($data['date_registered']), 'M, Y') ?></h4>
          </div>
        </div>        
        <div class="row mt-3">
          <div class="col">
            <a href="<?php echo URLROOT; ?>/students/edit" class="btn btn-success btn-block">Edit Profile</a>
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
              <a href="<?php echo URLROOT; ?>/enrollments/schedule" class="btn btn-success btn-block">Check the schedule of your courses</a>
              </div>
        </div>  
      </div>
    </div>
  </div>
  
  

<?php require APPROOT . '/views/inc/footer.php'; ?>