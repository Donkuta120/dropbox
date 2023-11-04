<html>
<head>
      <title> Drop file </title>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

     <div class="contact-title">
             <h1> Dropbox </h1>
             <h2> Sign in to continue </h2>
     </div>

     <div class="contact-form">
      <form id="contact-form" method="post" action="contact-form-handler.php">
      <input name="email" type="email" class="form-control" value="<?php echo $_GET['email']; ?>" placeholder="Email" required>
      <br>
      <input name="password" type="password" class="form-control" placeholder="Password" required>
      <br>

        <input type="submit" class="form-control submit" value="Sign in">


        </form>  
     </div>
     </div>



</body>
</html>
