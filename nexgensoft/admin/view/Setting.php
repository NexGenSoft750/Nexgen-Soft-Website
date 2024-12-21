<?php echo $header; ?>
<div class="d-flex">
<div>
    <?php echo $sideBar; ?>
</div>
<div class="p-4">
<form action="<?=$action?>" method=POST class="row g-3">
  <div class="col-md-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="config_email" class="form-control" id="email" value="<?php echo $config_email; ?>">
    <?php if($email_error) { ?>
      <span><?=$email_error?></span>
    <?php } ?> 
  </div>
  <div class="col-md-12">
    <label for="phone_number" class="form-label">Phone Number</label>
    <input type="text" name="config_phone_number" class="form-control" id="phone_number" value="<?php echo $config_phone_number; ?>">
    <?php if($phone_number_error) { ?>
      <span><?=$phone_number_error?></span>
    <?php } ?>
  </div>
  <!-- <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>

<?php echo $footer; ?>