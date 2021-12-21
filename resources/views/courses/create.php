<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Add a New Course</h2>        
        <form action="<?php echo URLROOT; ?>/courses/create" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="description">Description: <sup>*</sup></label>
            <textarea type="text" name="description" class="form-control form-control-lg <?php echo (!empty($data['description_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['description']; ?>"></textarea>
            <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="date_start">Date start: <sup>*</sup></label>
            <input type="date" name="date_start" class="form-control form-control-lg <?php echo (!empty($data['date_start_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['date_start']; ?>">
            <span class="invalid-feedback"><?php echo $data['date_start_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="date_end">Date end: <sup>*</sup></label>
            <input type="date" name="date_end" class="form-control form-control-lg <?php echo (!empty($data['date_end_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['date_end']; ?>">
            <span class="invalid-feedback"><?php echo $data['date_end_err']; ?></span>
          </div>  
          
          <div class="form-group">
            <label for="active">Active:</label>
            <select name="active" class="form-control" id="active">
              <option value="1" selected>Active</option>
              <option value="0">Not active</option>
            </select>
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