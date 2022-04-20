<?php
    session_start();
    require_once "config.php";
?>
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
  <script type="text/javascript" src="assets/js/adapter.min.js"></script>
<script type="text/javascript" src="assets/js/vue.min.js"></script>
<script type="text/javascript" src="assets/js/instascan.min.js"></script>
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
                <li >
                    
                    <a href="admin.php">
                        <i class="bi bi-person-fill"></i>
                        Account
                    </a>
                </li>
                <li>
                    <a href="logs.php" >
                        <i class="bi bi-file-earmark"></i>
                        Logs
                    </a>
                </li>
                <li class="active">
                    <a href="scan.php">
                        <i class="bi bi-qr-code-scan"></i>
                        Scan
                    </a>
                </li>
                <li>
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
                <div class="row">
                    <div class="col">
                        <div class="">
                            <video id="preview" width="100%"></video>
                        </div>
                    </div>
                    <div class="col">
                        <form action="" method="post" class="form-horizontal">
                            <input type="text" name="text" id="text" placeholder="Name" class="form-control" readonly>
                        </form>
                        <p id="result" name="result"></p>
                        <div id="details">
                                <button class="btn submit" id="btnScanTemp" name="btnScanTemp"data-toggle="modal" data-target="#scantemp" style="display:none;">
                                Scan Temperature</button>
                        </div>
                            
                    </div>
                </div>                
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead class="thead">
                            
                                <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Temperature</th>
                                <th scope="col">Time</th>
                                <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require_once "config.php";
                                    $sql = "SELECT * FROM tbllogs order by datein DESC, timein DESC";
                                    if($result = mysqli_query($link, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_array($result)){
                                            echo "<tbody>"; 
                                                echo "<td class='cell100 column2'>{$row['name']}</td>
                                                <td class='cell100 column4'>{$row['temp']}</td>
                                                <td class='cell100 column3'>{$row['timein']}</td>
                                                <td class='cell100 column5'>{$row['datein']}</td>";
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
            <!-- Modal -->
            <div class="modal fade" id="scantemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    
                        <div class="modal-body">
                            <div class="scanform">
                                <form method="post" action="process.php">
                                <input type="hidden" name="nm" id="nm" placeholder="Name" class="form-control" value="<?php echo $_SESSION['scannedname'];?>"readonly>
                            
                                    <div class="inputs">
                                        <input type="text" value="" id="txttemp" name="txttemp" placeholder="   " autocomplete="off" autofocus readonly>
                                        <label class="labels" for="txttemp">Temperature</label>
                                    </div>
                                    <div class="button">
                                        <button class="btn submit" type="submit" name="btnSubmit" id="btnSubmit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
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
   <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
            if(cameras.length > 1 ){
                   scanner.start(cameras[1]);
               }
               else if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });
           scanner.addListener('scan',function(c){
               document.getElementById('text').value=c;
               document.getElementById('btnScanTemp').style.display='block'
               $(function() {
                    $("#text").focus();
                });
               
           });
        </script>
        <script>
            
            $(document).ready(function(){
                    $('#text').focus(function(){
                        $.ajax({
                            type:'POST',
                            url:'try.php',
                            data:{
                            name:$('#text').val(),
                            },
                            success:function(data){
                                $('#result').html(data);
                            }
                        });
                    });
                    
            $(document).ready(function(){
                $('.modal').on('shown.bs.modal', function() {
                    
                    $('.modal').delay(5000).queue(function (next) { 
                        $(this).find('[autofocus]').focus();
                        next();
                    });
                });
                
            });
                    
                });
                $(document).ready(function(){
                    $('#txttemp').focus(function(){
                        var delay = 1000;
                        $.ajax({
                            type:'POST',
                            url:'process.php',
                            data:{
                            name:$('#text').val(),
                            },
                            success:function(data){
                                setTimeout(function(){
                                    $('#txttemp').val(data);
                                }, delay);
                            }
                        });	
                    });
                });
        </script>
</body>

</html>