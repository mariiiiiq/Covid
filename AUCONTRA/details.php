<?php
	session_start();
    require_once "config.php";
    if(isset($_POST['text'])){
        $sql = "SELECT * FROM tblaccounts WHERE name = '".$_POST['text']."'";
        $result = mysqli_query($link, $sql);
        $rows = mysqli_fetch_array($result);	
        if($rows){
            $name = $rows['name'];
            $contract = $rows['contactnumber'];
            $sql = "INSERT INTO tbllogs VALUES (?, ?, ?)";
			if($stmt = mysqli_prepare($link, $sql)){
				mysqli_stmt_bind_param($stmt, "sss", $id, $name, $timein);
				date_default_timezone_set("HongKong");
				$id = date("Ym") . date("His");
				$timein = date("h:iA");
    			if(mysqli_stmt_execute($stmt)){

				}
				else{
					echo "Error on inserting logs. Please try again later.";
				}
			}
        }
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
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

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
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="" placeholder="scan temp">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    var state = false;
    function passToggle(){
        if(state){
            document.getElementById("password").setAttribute("type", "password");
            document.getElementById("eye").style.color="#7a797e";
            state = false;
        }
        else{
            document.getElementById("password").setAttribute("type", "text");
            document.getElementById("eye").style.color="#96ce99";
            state = true;
        }
    }
    const txtuser = document.getElementById("username");
    const txtpass = document.getElementById("password");
    const btn = document.getElementById("btnclear");
    btn.addEventListener('click',()=>{
      // clearing the input field
      txtuser.value = "";
      txtpass.value = "";
    })
</script>
</body>

</html>