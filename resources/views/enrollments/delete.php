<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Do you want to delete this enrollment?</h2>   
        <div class="row">
          <div class="col">
            <label for="">status:</label>
            <h4><?php echo $data['status'] ?></h4>
          </div>
        </div>     
        <div class="row mt-3">
          <div class="col">
            <form action="<?php echo URLROOT.'/enrollments/delete/'.$data['id_enrollment']; ?>" method="post">
            <input type="submit" value="Delete" class="btn btn-danger btn-block" />
          </form>
      
          </div>
          <div class="col">
            <a href="<?php echo URLROOT.'/enrollments/'.$data['id_enrollment']; ?>" class="btn btn-secondary btn-block">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>