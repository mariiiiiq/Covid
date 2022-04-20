<?php
	session_start();
    require_once "config.php";
    $sql = "SELECT * FROM tblaccounts WHERE username = '".$_SESSION['user']."'";
	$result = mysqli_query($link, $sql);
	$rows = mysqli_fetch_array($result);	
    if($rows){
        $name = $rows['name'];
        $contract = $rows['contactnumber'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AUCONTRA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/AUCONTRA_LOGO.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-2" data-aos="">
          <div>
            <?php
                echo "Name: " . $name ."<br>";
                echo "Contact Number: " . $contract;
            ?>
          </div>
        </div>
        <div class="col-lg-3 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-1 hero" data-aos="">
           
        </div>
        <div class="col-lg-3 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-1 hero" data-aos="">
            <?php
				echo "
					<img src='https://chart.googleapis.com/chart?chf=bg,s,FFFFFF00&amp;chs=500x500&cht=qr&chl=$name&choe=UTF-8' class='qrcode'>
				";
			?>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
</script>
</body>

</html>