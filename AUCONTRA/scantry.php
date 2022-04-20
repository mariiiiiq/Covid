<?php //session_start();?>
<html>
    <head>
<script type="text/javascript" src="js/adapter.min.js"></script>
<script type="text/javascript" src="js/vue.min.js"></script>
<script type="text/javascript" src="js/instascan.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <form action="details.php" method="post" class="form-horizontal">
            <label>SCAN QR CODE</label>
            <input type="text" name="text" id="text" readonly placeholder="scan qrcode" class="form-control">
        </form>
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
               document.forms[0].submit();
           });
        </script>
    </body>
</html>