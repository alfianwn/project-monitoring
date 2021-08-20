<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Monitoring</title>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>    
    <!-- load otomatis / realtime -->
    <script type="text/javascript">
      $(document).ready( function(){
        
        setInterval( function(){
          $("#ceksuhu").load("ceksuhu.php");
          $("#cekkelembaban").load("cekkelembaban.php");
          $("#cekldr").load("cekldr.php");
        }, 1000 );
      });

    </script>

  </head>
  <body>
 
    <div class="container" style="text-align: center; margin-top: 70px;">

      <h2>Monitoring Realtime</h2>

      <div style="display: flex; margin-top: 50px">        
        <!-- menampilkan nilai suhu -->
        <div class="card text-center" style="width: 33.33%;">
          <div class="card-header" style="font-size: 30px; font-weight: bold;">
            Suhu
          </div>
          <div class="card-body">
            <h1> <span id="ceksuhu"> 0 </span> </h1>
          </div>
        </div>

        <!-- menampilkan nilai kelembaban -->
        <div class="card text-center" style="width: 33.33%;">
          <div class="card-header" style="font-size: 30px; font-weight: bold;">
            Kelembaban
          </div>
          <div class="card-body">
            <h1> <span id="cekkelembaban"> 0 </span> </h1>
          </div>
        </div>

        <!-- menampilkan nilai LDR -->
        <div class="card text-center" style="width: 33.33%;">
          <div class="card-header" style="font-size: 30px; font-weight: bold;">
            LDR
          </div>
          <div class="card-body">
            <h1> <span id="cekldr"> 0 </span> </h1>
          </div>
        </div>        
      </div>
      
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>