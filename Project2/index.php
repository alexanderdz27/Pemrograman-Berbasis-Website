<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        body,
        html {
            margin: 0;
        }

        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("assets/1.gif");
            height: 100%;
            background-position: top;
            background-size: cover;
            background-attachment: fixed;
        }

        @import url('https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Righteous&display=swap');
    </style>
    <title>Streaming27</title>
</head>

<body>
<!-- Modal -->
<div class="modal fade" id="tambahfilm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD FILM :</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="insert.php" method="POST">
        <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Title</span>
                    <input type="text" name="title" class="form-control" placeholder="film title" aria-label="title" aria-describedby="basic-addon1">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Description</span>
                    <textarea name="description" class="form-control" aria-label="description"></textarea>
                </div>

                <div class="row mb-3">
                    <label for="rating" class="col-sm-2 col-form-label">
                        <h9>Rating</h9>
                    </label>
                    <div class="col-sm-10 col-12 mt-1">
                        <select class="form-select" id="rating" name="rating">
                            <option selected="selected">G</option>
                            <option>PG</option>
                            <option>PG-13</option>
                            <option>R</option>
                            <option>NC-17</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="release_year" class="col-sm-2 col-form-label">Release Year</label>
                    <div class="col-sm-10 col-12 mt-1">
                        <input type="number" class="form-control datepicker" id="release_year" name="release_year"
                            step="1" min="0" max="9999">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="language_id" class="col-sm-2 col-form-label">
                        <h9>Language <span style="color: white"><span><span
                                        style="color: red">*</span></span></span></h9>
                    </label>
                    <div class="col-sm-10 col-12 mt-1">
                    <select class="form-select" id="language" name="language">
                            <option>Indonesian</option>
                            <option>العربية</option>
                            <option>English</option>
                            <option>한국어</option>
                            <option>ไทย</option>
                            <option></option>
                    </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="original_language_id" class=" col-sm-2 col-form-label">Original Language</label>
                    <div class="col-sm-10 col-12 mt-1">
                    <select class="form-select" id="original_language" name="original_language">
                            <option>Indonesian</option>
                            <option>العربية</option>
                            <option>English</option>
                            <option>한국어</option>
                            <option>ไทย</option>
                            <option></option>
                    </select>
                    </div>
                </div>

                <div class="row mb-3">
                        <label for="rental_duration" class="col-sm-2 col-form-label">
                            <h9>Rental Duration <span style="color: white"><span><span
                                            style="color: red">*</span></span></span></h9>
                        </label>
                        <div class="col-sm-10 col-12 mt-1">
                            <div class="input-group">
                                <input type="number" class="form-control" id="rental_duration" name="rental_duration"
                                    step="1" value="3" min="0" required="required">
                                <span class="input-group-text">days</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="rental_rate" class="col-sm-2 col-form-label">
                            <h9>Rental Rate <span style="color: white"><span><span
                                            style="color: red">*</span></span></span></h9>
                        </label>
                        <div class="col-sm-10 col-12 mt-1">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="rental_rate" name="rental_rate"
                                    value="4.99" min="0" step="0.01"
                                    aria-label="Dollar amount (with dot and two decimal places)" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="length" class="col-sm-2 col-form-label ">Length</label>
                        <div class="col-sm-10 col-12 mt-1">
                            <div class="input-group">
                                <input type="number" class="form-control" id="length" name="length" min="0">
                                <span class="input-group-text">minutes</span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="replacement_cost" class="col-sm-2 col-form-label">
                            <h9>Replacement Cost <span style="color: white"><span><span
                                            style="color: red">*</span></span></span></h9>
                        </label>
                        <div class="col-sm-10 col-12 mt-1">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="replacement_cost" name="replacement_cost"
                                    step="0.01" value="19.99" min="0" required="required">
                            </div>
                        </div>
                    </div>

            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">BACK</button>
            <button type="submit" name="insertdata" class="btn btn-primary">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
</div>
    <div class="container" style="color: white">
        <h1 id="judul">
        STREAMING 27
        </h1>
        <div class="row">
            <div class="col-md-4">
                <h2>Popular Movies</h2>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2 d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahfilm">
                ADD FIlM
            </button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-5 g-3" id="bikininData">

        </div>
        <div class="d-grid gap-2 mt-4">
            <button type="button" id="bikininLoad" class="btn fw-bold" style="background-image:linear-gradient(to right,yellow,blue); color:white "><i class="bi bi-caret-down-fill"></i> Load More</button>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

        var page=0;
        $(document).ready(function() {
            $("#bikininLoad").click(function(){
                $.get("film.php?begin=0" + page, function(response) {
                $.each(response, function(key, value) {
                    $("#bikininData").append("<div class='col'><div class='card h-100 p-2' style='background-image: linear-gradient(to right,purple,blue);'>" +
                        "<img src='"+ value.thumbnail +"' class='card-img-top' alt='Poster/>" +
                        "<div class='card-body'>" +
                        "<h5 class='card-title'>" + value.title + "</h5>"+
                        
                        "<div class='row'>" +
                        "<div class='col-5'>"+
                            "<p class='card-text'>" + value.rating + "</p>" +
                        "</div>" +
                        "<div class='col-3'><button type='button' class='btn btn-dark'><i class='bi bi-pencil-square'></i></button></div>" +
                        "<div class='col-3'><button type='button' class='btn btn-dark'><i class='bi bi-trash3-fill'></i></button>" +
                        "</div></div></div></div>");
                });
                page +=15
                $("#bikininLoad").html("<i class='bi bi-caret-down-fill'></i> Load More").removeAttr("disabled");
            });
            }).trigger('click');
        });
    </script>
</body>

</html>