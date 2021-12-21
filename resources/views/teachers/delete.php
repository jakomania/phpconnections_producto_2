<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Do you want to delete this teacher?</h2>   
        <div class="row">
          <div class="col">
            <label for="">Name:</label>
            <h4><?php echo $data['name'] ?></h4>
            <label for="">Surname</label>
            <h4><?php echo $data['surname'] ?></h4>
          </div>
        </div>     
        <div class="row mt-3">
          <div class="col">
            <form action="<?php echo URLROOT.'/teachers/delete/'.$data['id_teacher']; ?>" method="post">
            <input type="submit" value="Delete" class="btn btn-danger btn-block" />
          </form>
      
          </div>
          <div class="col">
            <a href="<?php echo URLROOT.'/teachers/'.$data['id_teacher']; ?>" class="btn btn-secondary btn-block">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>