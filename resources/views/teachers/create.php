<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Add a New Teacher</h2>        
        <form action="<?php echo URLROOT.'/teachers/create/'; ?>" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="description">Surname: <sup>*</sup></label>
            <input type="text" name="surname" class="form-control form-control-lg <?php echo (!empty($data['surname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['surname']; ?>">

            <span class="invalid-feedback"><?php echo $data['sursurname_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">

            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="nif">NIF: <sup>*</sup></label>
            <input type="text" name="nif" class="form-control form-control-lg <?php echo (!empty($data['nif_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nif']; ?>">
            
            <span class="invalid-feedback"><?php echo $data['nif_err']; ?></span>
          </div>  

          <div class="form-group">
            <label for="nif">Telephone: <sup>*</sup></label>
            <input type="text" name="telephone" class="form-control form-control-lg <?php echo (!empty($data['telephone_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['telephone']; ?>">
            
            <span class="invalid-feedback"><?php echo $data['telephone_err']; ?></span>
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