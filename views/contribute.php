<?php include 'header.php'; ?>
<div class="container-fluid contribute-section">
  <div class="row g-4 align-items-center">
    <!-- Left: Image -->
    <div class="col-lg-6">
      <img src="views/css/assets/formimage.png" style="width: 400px; height: 400px; object-fit: cover;" alt="Place Image">
      <div id="response"></div>
    </div>
    
    <!-- Right: Form -->
    <div class="col-lg-6">
      <form id="uploadForm" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="placeName" class="form-label">Place Name</label>
          <input type="text" class="form-control" name="place_name" id="placeName" placeholder="Enter place name" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description"  rows="4" placeholder="Describe the place" required></textarea>
        </div>
        <div class="mb-3">
          <label for="yourName" class="form-label">Your Name</label>
          <input type="text" class="form-control" name="your_name" id="yourName" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label for="imageUpload" class="form-label">Choose Image</label>
          <input type="file" class="form-control" name="image" accept="image/*" id="imageUpload" required>
        </div>
        <button type="submit" class="btn btn-success">Contribute</button>
      </form>
    </div>
  </div>
</div>

<script>
        $(document).ready(function () {
            $('#uploadForm').on('submit', function (e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: 'views/upload.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $('#response').html(response).css({
                            'color': '#198754',
                            'font-weight': 'bold',
                            'padding': 25px 25px,
                        });
                         // Clear the form
                        $('#uploadForm')[0].reset();
                    },
                    error: function () {
                        $('#response').html('An error occurred.').css({
                            'color': '#FA8072',
                            'font-weight': 'bold',
                            'padding': 25px 25px,
                       });
                    }
                });
            });
        });
    </script>
    
<?php include 'footer.php'; ?>
