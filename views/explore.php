<?php include 'header.php'; ?>
<div class="container-fluid  exploresection">
  <!-- Heading -->
  <div class="row mb-5">
    <div class="col text-center text-success">
      <h2 style=" font-family: 'Sofia', sans-serif; color:#34C759;">Explore The Destinations in Thiruvananthapuram District</h2>
    </div>
  </div>

  <!-- Content Row -->
   
  <div class="row align-items-start g-4"  id="placesList"></div> 

  </div> 
   


<script>
        function loadPlaces() {
            $.ajax({
                url: 'views/fetch_places.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    let html = '';
                    if (data.length > 0) {
                        data.forEach(function (place) {
                            html += `                           
                                   <div class="col-md-1 text-center">
                                    <div class="slno-circle">${place.id}</div>
                                   </div>
                                   <div class="col-md-11">
                                    <div class="title-text">${place.place_name}</div>
                                    <div class="explore-content">
                                     <img src="views/${place.image_path}" style="width: 400px; height: 400px; object-fit: cover;" alt="Lake" class="explore-img" />
                                     <p class="mt-3 mt-md-0">
                                      ${place.description}
                                     </p>
                                   </div>
                                   <div style="padding-top: 10px;">
                                     <h4><i>Contributed By ${place.your_name} on ${place.created_at}</i></h4>
                                  </div>
                                  </div>
                                  
                                 
                                  
                            `;
                        });
                    } else {
                        html = '<p>No places uploaded yet.</p>';
                    }
                    $('#placesList').html(html);
                },
                error: function () {
                    $('#placesList').html('<p>Error loading data.</p>');
                }
            });
        }

        // Load places on page load
        $(document).ready(function () {
            loadPlaces();
        });
    </script>
<?php include 'footer.php'; ?>