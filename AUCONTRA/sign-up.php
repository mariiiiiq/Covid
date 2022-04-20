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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="logo-img" data-aos="">
          <img src="assets/img/AUCONTRA.png" class="img-fluid" alt="">
            <form action="process.php" method="post" class="">
                
                <div class="sgnup sign" style="margin-top:1rem;">
                    <input type="text" value="" id="username" name="username" placeholder="   " autocomplete="off">
                    <label class="labels" for="username">Username</label>
                </div>
                <div class="sgnup sign">
                    <input type="password" value="" id="password" name="password" placeholder="   ">
                    <label class="labels" for="password">Password</label>
                    <i class="bi bi-eye-fill icon" id="eye" onclick="passToggle()"></i>   
                    <p class="text-danger"></p> 
                </div>
                <div class="sgnup sign" >
                    <input type="text" value="" id="name" name="name" placeholder="   " autocomplete="off">
                    <label class="labels" for="name">Name</label>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="sgnup age">
                            <input type="text" value="" id="age" name="age" placeholder="   " autocomplete="off">
                            <label class="labels" for="age">Age</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sgnup bday">
                            <input type="text" class="js-datepicker" value="" id="bday" name="bday" placeholder="   " autocomplete="off">
                            <label class="labels" for="bday">Birthday</label>
                            <i class="bi bi-calendar-fill icon"></i>
                        </div>
                    </div>
                </div>
                <div class="sgnup sign" >
                    <input type="text" value="" id="contactno" name="contactno" placeholder="   " autocomplete="off">
                    <label class="labels" for="contactno">Contact No.</label>
                </div>
                <div class="sgnup sign">
                    <select id="cbUsertype" class="slct" name="cbUsertype" value="" onchange="ChangeDropdowns(this.value);">
                        <option value="" hidden></option>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                    </select>
                    <label class="labels" id="usrtyp">Usertype</label>
                </div>
                <div class="button">
                    <a class="btn cancel" type="button" name="btnCancel" id="btnCancel" href="index.php">Cancel</a>
                    <button class="btn sign-up" type="submit" name="btnSignUp" id="btnSignUp">Sign Up</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="datepicker/jquery.min.js"></script>
    <script src="datepicker/moment.min.js"></script>
    <script src="datepicker/daterangepicker.js"></script>
    <script src="datepicker/global.js"></script>

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
    $(document).ready(function(){
        $('#bday').focus(function(){
            $('#bday').datetimepicker();
        });
    });
    function ChangeDropdowns(value){
        if(value!="")
        {
            document.getElementById("usrtyp").style.WebkitTransform = "translateY(-19px)"; 
        }
        else{
        }
    }
</script>
</body>

</html>