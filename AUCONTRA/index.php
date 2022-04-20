<?php
	session_start();
  $showModal = false;
	$inputerror = "";
	if(!isset($account)){
		$user ='';
	}
	if(!isset($password)){
		$pass ='';
	}
	if(isset($_POST['btnlogin'])){
		require_once "config.php";
		$user = trim($_POST['username']);
		$pass = trim($_POST['password']);
		if($user != '' && $pass != ''){
			$sql = "SELECT * FROM tblaccounts WHERE username = '$user'";
			$result = mysqli_query($link, $sql);
			$rows = mysqli_fetch_array($result);	
			if($rows){
				if($rows['password'] == $pass){
					$_SESSION['user'] = $user;
					if($rows['usertype'] == "Admin"){
						header("location: admin.php");
					}
					else{
						header("location: home.php");
					}
					
				}
				else{
					$inputerror = "Wrong password!";
				}
			}
			else{
				$inputerror = "User not found";
			}
		}
		else{
			$inputerror = "Fill up all the fields!";
		}
    if($inputerror!=""){
      $showModal = "true";
    }	
	}
  
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <h1>Welcome to AUCONTRA</h1>
            <h2>COVID contact tracing website for Arellano University</h2>
            <!-- Trigger modal -->
            <a href="#" class="download-btn" data-toggle="modal" data-target="#login">
            Login</a>
            <p style="margin-top:5px;">No account yet? <a href="sign-up.php"><u>Sign up here</u></a></p>

          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-1 hero-img" data-aos="">
          <img src="assets/img/AUCONTRA.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
    
  <!-- Modal -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      
        <div class="modal-body">
          <div class="loginform">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="inputs">
                    <input type="text" value="<?php echo $user; ?>" id="username" name="username" placeholder="   " autocomplete="off">
                    <label class="labels" for="username">Username</label>
                </div>
                <div class="inputs">
                    <input type="password" value="<?php echo $pass; ?>" id="password" name="password" placeholder="   ">
                    <label class="labels" for="password">Password</label>
                    <i class="bi bi-eye-fill icon" id="eye" onclick="passToggle()"></i>   
                    <p class="text-danger"><?php echo $inputerror; ?></p> 
                </div>
                <div class="button">
                    <button class="btn clear" type="button" name="btnclear" id="btnclear">Clear</button>
                    <button class="btn submit" type="submit" name="btnlogin" id="btnlogin">Login</button>
                </div>
            </form>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<?php			
	if(!empty($showModal)) {
		// CALL MODAL HERE
		echo '<script type="text/javascript">
      $("#login").removeClass("fade");
			$(document).ready(function(){
				$("#login").modal("show");
			});
		</script>';
	} 
?>

</body>

</html>