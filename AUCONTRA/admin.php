<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AUCONTRA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/AUCONTRA_LOGO.ico" rel="icon">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/style4.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
        .logo{
            height:80%;
            width:80%;
            padding-top:10px;
            padding-left:30px;
        }
        .tgl{
            background-color:#344e41;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="assets/img/AUCONTRA.png" class="img-fluid logo" alt="">
                <div class="icon"><img src="assets/img/AUCONTRA_LOGO.png" class="img-fluid" alt=""></div>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    
                    <a href="admin.php">
                        <i class="bi bi-person-fill"></i>
                        Account
                    </a>
                </li>
                <li>
                    <a href="logs.php">
                        <i class="bi bi-file-earmark"></i>
                        Logs
                    </a>
                    <a href="scan.php">
                        <i class="bi bi-qr-code-scan"></i>
                        Scan
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="bi bi-gear-fill"></i>
                        Settings
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Change Password</a>
                        </li>
                        <li>
                            <a href="index.php">Logout</a>
                        </li>
                    </ul>
                </li>
                
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn tgl">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <div class="" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active scan">
                                <a class="nav-link" href="scan.php"> Scan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <table class="table">
                    <thead class="thead">
                    
                        <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Usertype</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once "config.php";
                            $sql = "SELECT * FROM tblaccounts where usertype!='Admin' order by username";
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                    $username = $row['username'];
                                    $mask_number =  str_repeat("*", strlen($row['password']));
                                    echo "<tbody>"; 
                                        echo "<td class='cell100 column2'>{$row['username']}</td>
                                        <td class='cell100 column3'>{$mask_number}</td>
                                        <td class='cell100 column4'>{$row['name']}</td>
                                        <td class='cell100 column3'>{$row['age']}</td>
                                        <td class='cell100 column5'>{$row['usertype']}</td>";
                                        echo "</tr>
                                    </tbody>";
                                    }
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>