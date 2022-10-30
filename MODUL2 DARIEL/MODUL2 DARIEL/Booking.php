<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <section id="home">
   
<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark ">
      <div class="mx-auto d-flex">
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Booking.php">Booking</a>
          </li>

        </ul>
      </div>
      </div>
    </nav>

  </section>
  <section id="about"> 
    <br><br><br>
   <center><h3> Rent Your Car Here</h3></center> 

    <div class="container-fluid text-center">

      <div class="mt-1 row " style="padding:50px;text-align:justify">
          
          <div class="col-sm-6 py-5">
                <div class="p-5">

                   <div class="container">
                    <div class="img-card">
                        <?php
                        if (!empty($_GET['img'])) {
                           echo '<img class="img-fluid roomPreview prev" src="https://' . $_GET['img'] . '" alt="404 NOT FOUND">';
                        }
                        ?>
                    </div>

                </div>
                </div>
            </div>

            <div class="col-sm-6 px-2">
               
                    <form method="post" action="Mybooking.php">
                        <div class="form-group">
                            <label for="inputNama" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputNama" placeholder="Nama Anda" name="nama" value="DARIEL_1202190255" required readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inDate" class="col-sm-3 col-form-label">Book Date</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="inputDate" placeholder="mm/dd/yyyy" name="masukintanggal">
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="inputNama" class="col-sm-3 col-form-label">Start Time</label>
                            <div class="col-sm-12">
                                <input type="time" class="form-control" id="inputNama" placeholder="--:-- --" name="start" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDuration" class="col-sm-3 col-form-label">Duration (days   )</label>
                            <div class="col-sm-12">
                                <input required name="duration" placeholder="Duration" class="form-control" type="number" min="1" aria-describedby="days">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12 col-form-label" for="sel1">Car Type</label>
                            <div class="col-sm-12">
                                <?php
                                if (empty($_GET['car'])) {
                                    echo '
                                <select name="listdata" class="form-control" id="listdata" onchange="change_image()">
                                   <option id="1" value="Ertiga">
                                        Ertiga</option>
                                    <option id="2" value="Fortuner">
                                        Fortuner</option>
                                    <option id="3" value="HI ACE">
                                        HI ACE</option>
                                </select>';
                                } else {
                                    $tipemobilnyakayaknya = $_GET['car'];
                                    $stat = is_null($tipemobilnyakayaknya);
                                    if ($stat != 1) {
                                        echo '
                                        
                                <input readonly name="listdata" type="text" class="form-control disabled"  id="listdata"  value="' . $tipemobilnyakayaknya . '" required>';
                                    } else {
                                        echo '    <div class="col-sm-12">
                                <select name="listdata" class="form-control" id="listdata" onchange="change_image()">
                                  <option id="1" value="Ertiga">
                                        Ertiga</option>
                                    <option id="2" value="Fortuner">
                                        Fortuner</option>
                                    <option id="3" value="HI ACE">
                                        HI ACE</option>
                                </select>
                            </div>';
                                    }
                                }
                                ?>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 col-form-label">Phone Number :</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputPhone" placeholder="Nomor Telpon" name="notelp" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 col-form-label" for="sel1">Add Service(s)</label>
                            <div class="col-sm-12">

                                <input type="checkbox" name="services[]" value="Health Protocol"> Health Protocol / Rp 75.000 <br>
                                <input type="checkbox" name="services[]" value="Driver"> Driver / Rp. 250.000 <br>
                                <input type="checkbox" name="services[]" value="Fuel Filled"> Fuel Filled / Rp.300.000 <br>
                                </fieldset>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-sm-12 py-3">
                                <button type="submit" name="submit" id="btn-submit" class="btn btn-primary btn-block" style="width:100% ">Book</button>
                            </div>
                        </div>

                    </form>
            </div>
        </div>
    </div>
</section>

  <footer class="bg-light py-2 text-center"><p class="text-secondary m-0">Dibuat oleh DARIEL_1202190255</p></footer>
</body>
</html>