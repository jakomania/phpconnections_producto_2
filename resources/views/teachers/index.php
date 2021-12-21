<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Teacher Information</h2>        
        <div class="row">
          <div class="col">
            <label for="">Name:</label>
            <h4><?php echo $data['name'] ?></h4>
            <label for="">Surname</label>
            <h4><?php echo $data['surname'] ?></h4>
            <label for="">Email:</label>
            <h4><?php echo $data['email']; ?></h4>
            <label for="">Telephone:</label>
            <h4><?php echo $data['telephone']; ?></h4>
            <label for="">NIF:</label>
            <h4><?php echo $data['nif']; ?></h4>
            
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <a href="<?php echo URLROOT.'/teachers/edit/'.$data['id_teacher']; ?>" class="btn btn-success btn-block">Edit Teacher</a>
          </div>
          <div class="col">
            <a href="<?php echo URLROOT.'/teachers/delete/'.$data['id_teacher']; ?>" class="btn btn-danger btn-block">Delete Teacher</a>
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