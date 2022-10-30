
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
    <p class='fs-4 text-center mt-3'>Thank you DARIEL_1202190255 for Reserving</p>
    <p class='fs-5 text-center'>Please double check your reservation details</p>

    <div>
        <div class="container-fluid d-flex justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Booking Number</th>
                        <th>Name</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Car Type</th>
                        <th>Phone Number</th>
                        <th>Service</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <?php
                        error_reporting(0);
                        ini_set('display_errors', 0);
                        $nama = $_POST['nama'];
                        $tipemobil = $_POST['listdata'];
                        $waktu =$_POST['start'];
                        $lama = $_POST['duration'];
                       
                        $tanggalbook = date('d/m/Y', strtotime($_POST['masukintanggal']));
                        $cekout = date('d/m/Y', strtotime("+$lama days", strtotime($_POST['masukintanggal'])));
                        switch ($tipemobil) {
                            case 'Ertiga':
                                $harga = 200000;
                                break;
                            case 'Fortuner':
                                $harga = 400000;
                                break;
                            case 'HI ACE':
                                $harga = 350000;
                                break;
                        }
                        $serviceFee = 0;

                        if (empty($_POST['services'])) {
                            $tambahservice = 0;
                        } else {
                            $tambahservice = $_POST['services'];

                        }

                        if(in_array('Health Protocol', $_POST['services'])){$serviceFee = $serviceFee+ 75000;}
                        if(in_array('Driver', $_POST['services'])){$serviceFee = $serviceFee+ 250000;}
                        if(in_array('Fuel Filled', $_POST['services'])){$serviceFee = $serviceFee+ 300000;                          }

                        $totalPrice = ($lama * $harga) + $serviceFee;
                        $hasilku = $waktu +$lama;

                        echo '
                    <td><strong>PMS/2022/RENT/'  . rand() . '</strong></td>
                    <td>' . $nama . '</td>
                    <td>' . $tanggalbook . '&nbsp;'. $waktu . '</td>
                    <td>' . $cekout  .'&nbsp;'. $waktu . '</td>
                    <td>' . $tipemobil . '</td>
                    <td>' . $_POST['notelp'] . '</td> 
                    <td><ul>';
                        if ($tambahservice == 0) {
                            echo 'NO SERVICES ADDED'; # 
                        } else {
                            for ($i = 0; $i < count($tambahservice); $i++) {
                                echo '<li>' . $tambahservice[$i] . '</li>';
                            }
                        }

                        echo '</ul></td>
                    <td> Rp.' . $totalPrice . '</td>
                    '
                        ?>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

  <footer class="bg-light py-2 text-center"><p class="text-secondary m-0">Dibuat oleh DARIEL_1202190255</p></footer>
</body>
</html>