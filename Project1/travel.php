<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Anyar Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header2" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">KEPO.in</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto " href="entertainment.php">Entertaiment</a></li>
          <li><a class="nav-link scrollto" href="technology.php">Technology</a></li>
          <li><a class="nav-link scrollto " href="food.php">Food & Beverage</a></li>
          <li><a class="nav-link scrollto" href="fashion.php">Fashion</a></li>
          <li><a class="nav-link scrollto active" href="travel.php">Travel</a></li>
          <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li class="dropdown"><a href="entertainment.php"><span>Entertaiment</span> <i class="bi bi-chevron-left"></i></a>
              <ul>
                <li><a href="#">Film</a></li>
                <li><a href="#">Music</a></li>
                <li><a href="#">Comedy</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Book</a></li>
              </ul>
              <li class="dropdown"><a href="technology.php"><span>Technology</span> <i class="bi bi-chevron-left"></i></a>
                <ul>
                  <li><a href="#">Computer</a></li>
                  <li><a href="#">Smartphone</a></li>
                  <li><a href="#">Accessories</a></li>
                  <li><a href="#">Repair</a></li>
                  <li><a href="#">other</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="food.php"><span>Food & Beverage</span> <i class="bi bi-chevron-left"></i></a>
              <ul>
                <li><a href="#">Indonesian</a></li>
                <li><a href="#">Korean</a></li>
                <li><a href="#">Snack</a></li>
                <li><a href="#">Baverage</a></li>
                <li><a href="#">Food</a></li>
              </ul>
              <li class="dropdown"><a href="fashion.php"><span>Fashion</span> <i class="bi bi-chevron-left"></i></a>
                <ul>
                  <li><a href="#">Male</a></li>
                  <li><a href="#">Female</a></li>
                  <li><a href="#">Kids</a></li>
                  <li><a href="#">Teen</a></li>
                  <li><a href="#">Other</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="travel.php"><span>Travel</span> <i class="bi bi-chevron-left"></i></a>
                <ul>
                  <li><a href="#">Hotels</a></li>
                  <li><a href="#">Restaurant</a></li>
                  <li><a href="#">Plane</a></li>
                  <li><a href="#">Ship</a></li>
                  <li><a href="#">Destination</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- ======= travel Section ======= -->
    <section id="travel" class="travel">
        <div class="container" data-aos="fade-up">
            <div class="section-title2">
                <h2>travel</h2>



                <div class="tambah">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                    Add Article
                    </button>
                    
                    
                </div>

            </div>
            
                <?php 
                require 'connection.php';

                $query = "SELECT * FROM travel";
                $query_run = mysqli_query($db, $query);
                $check_data = mysqli_num_rows($query_run) > 0;

                if($check_data)
                {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                        
                          <div class="entertainment-items">
                            <a id="delete<?php echo $row['id_travel'] ?>">
                              <img src="assets/img/travel/<?php echo $row['id_travel'];?>.jpg" class="apel" alt="gambar db" height="300px" width="300px">
                                <div class="portfolio-info">
                                  <a id="delete2<?php echo $row['id_travel'] ?>">
                                    <h4><?php echo $row['judul']; ?></h4>
                                    <p><?php echo $row['deskripsi']; ?></p>
                                    <p><?php echo $row['kategori']; ?></p>
                                    <div class="updatedata">
                                      <a id="delete3<?php echo $row['id_travel'] ?>">  
                                        <button onclick="editAjax(<?php echo $row['id_travel'];  ?>)"  class="btn btn-danger">edit</button>
                                        <button onclick="deleteAjax(<?php echo $row['id_travel'];  ?>)"  class="btn btn-danger">delete</button>
                                      </a>
                                  </a>
                              </a>
                                </div>
                                </div>
                            </div>
                        <?php
                        ;
                        
                    }
                }
                else
                {
                    echo "error";
                }

                
                ?>
            </div>
    </section><!-- End travel Section -->

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambahkan Artikelmu!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="create_travel.php" method="POST">
        <div class="modal-body ">
            <!-- title -->
            <div class="row mb-3">
                          <label for="judul" class="col-sm-2 col-form-label">
                                      <h9>judul <span style="color: black"><span><span style="color: red">*</span></span></span>
                                      </h9>
                                      </label>
                                      <div class="col-sm-10 col-12 mt-1">
                                          <input type="text" class="form-control" id="judul" name="judul" required="required">
                                      </div>
                                  </div>

                                  <!-- description -->
                                  <div class="row mb-3">
                                      <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                      <div class="col-sm-10 col-12 mt-1">
                                          <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                                      </div>
                                  </div>

                                  
                                  <!-- language_id  -->
                                  <div class="row mb-3">
                                      <label for="kategori" class="col-sm-2 col-form-label">
                                          <h9> kategori <span style="color: black"><span><span
                                                          style="color: red">*</span></span></span></h9>
                                      </label>
                                      <div class="col-sm-10 col-12 mt-1">
                                          <select class="form-select" id="kategori" name="kategori" required="required">
                                              <option value="null" selected>-- masukkan kategori artikel --</option>
                                              <option value="hotel">Hotels</option>
                                              <option value="restaurant">Restaurant</option>
                                              <option value="ship">Ship</option>
                                              <option value="plane">Plane</option>
                                              <option value="destination">Destination</option>
                                          </select>
                                      </div>
                                  </div>
                                  
                                  <!-- image -->
                                  <!-- <div class="container col-md-6">
                                    <div class="mb-5">
                                      <label for="gambar" class="col-sm-2 col-form-label"><h9>gambar</h9><span style="color: black"><span><span
                                                          style="color: red"></span></span></span></label>
                                      <input class="form-control" type="file" name="gambar" onchange="preview()">
                                    </div>
                                  </div> -->
                                  <div class="container col-md-6">
                                      <div class="mb-5">
                                          <label for="Image" class="form-label">Gambar</label>
                                          <input class="form-control" type="file" id="gambar" name="gambar" onchange="preview()">
                                          <button onclick="clearImage()" class="btn btn-primary mt-3">Upload</button>
                                      </div>
                                          <img id="frame" src="" class="img-fluid" />
                                  </div>

                                  <script>
                                      function preview() {
                                          frame.src = URL.createObjectURL(event.target.files[0]);
                                      }
                                      function clearImage() {
                                          document.getElementById('formFile').value = null;
                                          frame.src = "";
                                      }
                                  </script>
              </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="insertdata">Save changes</button>
        </div>
        </div>
    </div>
    </div>






  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
      $('.editbtn').on('click', function(){

        $('#editmodal').modal('show');

          $tr = $(this).closest('h4');

          var data = $tr.children('p').map(function(){
            return $(this).text();  
          }).get();

          console.log(data);

          $('.#update_id').val(data[0])
          $('.#judul').val(data[1])
          $('.#deskripsi').val(data[2])
          $('.#rating').val(data[3])
      });
    });
  </script>

<script type="text/javascript">
	 
	 function deleteAjax(id_travel){
   
       if(confirm('are You sure?')){
         
         $.ajax({

              type:'post',
              url:'delete_travel.php',
              data:{delete_id:id_travel},
              success:function(data){
              
                   $('#delete'+id_travel).hide('slow');
                   $('#delete2'+id_travel).hide('slow');
                   $('#delete3'+id_travel).hide('slow');
              }

         });

       }


	 }

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  


</body>

</html>