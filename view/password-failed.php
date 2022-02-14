
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style3.css">
    <!-- Link per Icona -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>



  <div class="container">
    <input type="checkbox" id="flip">
   
    <div class="forms">
        <div class="form-content">
          <p>You don't have access to this page, you will be redirected to the login page after 10 seconds</p>
          <?php header("refresh:5;url=login.php"); ?>
      </div>    
    
    </div>
  </div>




</body>
</html>


