<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Edit Teacher</h2>        
        <form action="<?php echo URLROOT.'/teachers/edit/'.$data['id_teacher']; ?>" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="description">Surname: <sup>*</sup></label>
            <input type="text" name="surname" class="form-control form-control-lg <?php echo (!empty($data['surname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['surname']; ?>">

            <span class="invalid-feedback"><?php echo $data['surname_err']; ?></span>
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
              <input type="submit" value="Update" class="btn btn-success btn-block">
              
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>