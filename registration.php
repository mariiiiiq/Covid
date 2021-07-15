
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<!-- DATE-PICKER -->
<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-registration">
            <form class="registration-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"class="mt-4">
					<span class="registration-form-title">
						Registration
					</span>
                    <div class="row">
						<div class="col-sm-4">
                            <div class="wrap-input100 validate-input" data-validate = "">
                                <select class="input100" name="usertype">
                                    <option value="" disabled selected>User</option>
									<option value="Student">Student</option>
									<option value="Visitor">Visitor</option>
									<option value="Employee">Employee</option>
								</select>
								<span class="symbol-input100">
                                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </span>
							</div>
						</div>
                        
                    </div>
                    <div class="row">
						<div class="col-sm-7">
                            <div class="wrap-input100 validate-input" data-validate = ">">
                                <input class="input100" type="text" name="name" placeholder="Name">
                                <span class="symbol-input100">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </div>
						</div>
						<div class="col-sm-5">
                            <div class="wrap-input100 validate-input" data-validate = ">">
                                <div class="wrap-input100 validate-input" data-validate = "">
                                    <select class="dropdown" name="usertype">
                                        <option value="" disabled selected>Gender</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Prefer not to say">Prefer not to say</option>
                                    </select>
                                    <span class="symbol-dropdown">
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
						</div>
					</div>
                    <div class="row">
						<div class="col-sm-5">
							<div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="id" placeholder="Student No.">
                                <span class="symbol-input100">
                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                </span>
							</div>
						</div>
						<div class="col-sm-7">
                            <div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="department" placeholder="Course">
                                <span class="symbol-input100">
                                    <i class="fa fa-bank" aria-hidden="true"></i>
                                </span>
							</div>
						</div>
					</div>
                    <div class="row">
                        <div class="col-sm-5">
							<div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="age" placeholder="Age">
                                <span class="symbol-input100">
                                    <i class="fa fa-child" aria-hidden="true"></i>
                                </span>
							</div>
						</div>
                        <div class="col-sm-7">
                            <div class="wrap-input100 validate-input" data-validate = "Birthdate is required">
                                <input type="text" class="input100 datepicker-here" data-language='en' data-date-format="yyyy M dd" name="birthdate" id="birthdate" placeholder="Birthdate">
                                <span class="symbol-input100">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
						<div class="col-sm-5">
							<div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="contactno" placeholder="Contact No.">
                                <span class="symbol-input100">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
							</div>
						</div>
                        <div class="col-sm-7">
							<div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="address" placeholder="Address">
                                <span class="symbol-input100">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </span>
							</div>
						</div>
					</div>
                    <div class="row">
						<div class="col-sm-5">
							<div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="username" placeholder="Username">
                                <span class="symbol-input100">
                                    <i class="fa fa-id-badge" aria-hidden="true"></i>
                                </span>
							</div>
						</div>
                        <div class="col-sm-7">
							<div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="email" placeholder="Email">
                                <span class="symbol-input100">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
							</div>
						</div>
					</div>
                    <div class="row">
                        <div class="col-sm-6">
							<div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="password" placeholder="Password">
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="wrap-input100 validate-input">
                                <input class="input100" type="text" name="password" placeholder="Confirm Password">
                                <span class="symbol-input100">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
							</div>
						</div>
					</div>
					<div class="row">
                        <div class="col-sm-4">
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" name="btnlogin">
                                    Login
                                </button>
                            </div>
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

</body>
</html>