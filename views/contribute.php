<?php include 'header.php'; ?>
<div class="container-fluid contribute-section">
  <div class="row g-4 align-items-center">
    <!-- Left: Image -->
    <div class="col-lg-6">
      <img src="views/css/assets/formimage.png" style="width: 400px; height: 400px; object-fit: cover;" alt="Place Image">
    </div>

    <!-- Right: Form -->
    <div class="col-lg-6">
      <form>
        <div class="mb-3">
          <label for="placeName" class="form-label">Place Name</label>
          <input type="text" class="form-control" id="placeName" placeholder="Enter place name">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" rows="4" placeholder="Describe the place"></textarea>
        </div>
        <div class="mb-3">
          <label for="yourName" class="form-label">Your Name</label>
          <input type="text" class="form-control" id="yourName" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label for="imageUpload" class="form-label">Choose Image</label>
          <input type="file" class="form-control" id="imageUpload">
        </div>
        <button type="submit" class="btn btn-success">Contribute</button>
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
