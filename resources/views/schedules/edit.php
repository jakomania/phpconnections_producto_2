<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Do you want to change this schedule?</h2>        
        <form action="<?php echo URLROOT.'/schedules/edit/'.$data['id_schedule']; ?>" method="post">
          <div class="form-group">
            <label for="day">Day: <sup>*</sup></label>
            <input type="date" name="day" class="form-control form-control-lg <?php echo (!empty($data['day_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['day']; ?>">
            <span class="invalid-feedback"><?php echo $data['day_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="time_start">Start time: <sup>*</sup></label>
            <input type="time" step="600" name="time_start" class="form-control form-control-lg <?php echo (!empty($data['time_start_err'])) ? 'is-invalid' : ''; ?>"value="><?php echo $data['time_start']; ?>">
            <span class="invalid-feedback"><?php echo $data['time_start_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="time_end">End time: <sup>*</sup></label>
            <input type="time" step="600" name="time_end" class="form-control form-control-lg <?php echo (!empty($data['time_end_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['time_end']; ?>">
            <span class="invalid-feedback"><?php echo $data['time_end_err']; ?></span>
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