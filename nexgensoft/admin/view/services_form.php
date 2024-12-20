<?php echo $header; ?>
<style>
  img {
    width: 100px !important;
    height: 60px;
  }

  .textareas{
    height: 200px !important;
  }
</style>
<div class="d-flex">
  <div>
    <?php echo $sideBar; ?>
  </div>
  <div class="p-4">
    <?php if ($message) { ?>
      <div class="alert alert-secondary" role="alert">
        <?php echo $message; ?>
      </div>
    <?php } ?>
    <form action="<?= $action ?>" method="POST" enctype="multipart/form-data" class="row g-3">
      <div class="col-md-12">
        <label for="service_name" class="form-label">Name</label>
        <input type="text" name="service_name" class="form-control" id="service_name" value="<?php echo $service_name; ?>">
        <?php if ($service_name_error) { ?>
          <span style="color: red; display:block; margin-top:15px;"><?= $service_name_error ?></span>
        <?php } ?>
      </div>
      <div class="col-md-12">
        <div class="form-floating">
          <textarea class="form-control textareas" rows="10" cols="90" name="service_description" placeholder="write description here" id="floatingTextareaForDescription"><?php echo $service_description; ?></textarea>
          <label for="floatingTextareaForDescription">Description</label>
        </div>
        <?php if ($service_description_error) { ?>
          <span style="color: red; display:block; margin-top:15px;"><?= $service_description_error ?></span>
        <?php } ?>
      </div>
      <div class="col-md-12">
        <label for="service_slug" class="form-label">Slug</label>
        <input type="text" name="service_slug" class="form-control" id="service_slug" value="<?php echo $service_slug; ?>">
        <?php if ($service_slug_error) { ?>
          <span style="color: red; display:block; margin-top:15px;"><?= $service_slug_error ?></span>
        <?php } ?>
      </div>
      <div class="col-md-12">
        <div class="form-floating">
          <textarea class="form-control textareas" name="service_icon" id="floatingTextareaForIcon"><?php echo $service_icon; ?></textarea>
          <label for="floatingTextareaForDescription">Icon</label>
        </div>
        <?php if ($service_icon_error) { ?>
          <span style="color: red; display:block; margin-top:15px;"><?= $service_icon_error ?></span>
        <?php } ?>
      </div>
      <div class="col-md-12 input-group mb-3">
        <label class="input-group-text" for="inputGroupFile02">Image</label>
        <input type="file" name="service_img" class="form-control" id="inputGroupFile02" onchange="previewImage()">
      </div>

      <img id="imgPreview" src="" alt="Image preview" style="max-width: 100px; max-height: 100px; display: none;">

      <?php if ($service_img_error) { ?>
        <span style="color: red; margin-top:0"><?= $service_img_error ?></span>
      <?php } ?>
      <div class="col-md-12">
        <label for="service_tags" class="form-label">Tags</label>
        <div id="tags-container">
          <?php if ($service_tags) {
            foreach ($service_tags as $key => $tag) {
          ?>
              <input type="text" name="service_tags[]" class="form-control mb-2" id="service_tags" value="<?= $tag ?>">
            <?php }
          } else { ?>
            <input type="text" name="service_tags[]" class="form-control mb-2" id="service_tags">
          <?php } ?>
        </div>
        <button type="button" id="add-tag" class="btn btn-primary mt-2">Add Tag</button>
      </div>
      <?php if ($service_tags_error) { ?>
        <span style="color: red; margin-top:15px"><?= $service_tags_error ?></span>
      <?php } ?>
      <input type="hidden" value="<?= $service_id ?>" name="service_id">
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>

<script>
  const addTagButton = document.getElementById('add-tag');
  const tagsContainer = document.getElementById('tags-container');

  addTagButton.addEventListener('click', function() {
    const newInput = tagsContainer.querySelector('input').cloneNode(true);
    newInput.value = '';
    tagsContainer.appendChild(newInput);
  });

  function previewImage() {
    const fileInput = document.getElementById('inputGroupFile02');
    const imgPreview = document.getElementById('imgPreview');

    const file = fileInput.files[0];

    if (file) {
      const reader = new FileReader();

      reader.onload = function(event) {
        imgPreview.src = event.target.result;
        imgPreview.style.display = 'block';
      };

      reader.readAsDataURL(file);
    } else {
      imgPreview.style.display = 'none';
    }
  }
</script>

<?php echo $footer; ?>