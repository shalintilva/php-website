<?php include "../inc/dbinfo.inc"; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
 
  <!-- Favicons-->
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
  <!-- Web fonts-->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
  <!-- CSS vendors-->
  <link rel="stylesheet" href="css/bootstrap-custom.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/tiny-slider.css">
  <link rel="stylesheet" href="css/lity.min.css">
  <link rel="stylesheet" href="css/simplebar.min.css">
  <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css">
  <!-- Main CSS-->
  <link rel="stylesheet" href="css/main.css">
  <!-- CSS Color scheme-->
  <link id="color-scheme" rel="stylesheet" href="css/colors/main-darkgreen.css">
  <!-- Custom CSS (Add your custom CSS styles to this file)-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- removeIf(customizerDist)-->
  <link rel="stylesheet" href="../customizer/main.css">
  <!-- endremoveIf(customizerDist)-->

<title>Get in touch :) by RD</title>

</head>

<body class="theme-dark">

  <!-- Database Connection -->
  <?php

  /* Connect to MySQL and select the database. */
  $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

  if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

  $database = mysqli_select_db($connection, DB_DATABASE);

  /* Ensure that the EMPLOYEES table exists. */
  CreateTable($connection, DB_DATABASE);

  /* If input fields are populated, add a message to the DB. */
  $user_name = htmlentities($_POST['NAME']);
  $user_email = htmlentities($_POST['EMAIL']);
  $user_subject = htmlentities($_POST['SUBJECT']);
  $user_message = htmlentities($_POST['MESSAGE']);

  if (strlen($user_name) || strlen($user_email) || strlen($user_subject) || strlen($user_message)) {
    AddMessage($connection, $user_name, $user_email, $user_subject, $user_message);
  }
?>
 
  <!-- Navbar-->
 
  <!-- Home-->

  <br>
  <br>
  <br>

  
    
      <div class="container">
        
        <div class="row">
          <div class="col-12">
            <div class="lightbox-content">
              <div class="row">
                <div class="col-12">
                  <div class="section-heading page-heading">
                    <h2 class="section-title">Get in Touch</h2>
                    <div class="animated-bar"></div>
                  </div>
                </div>
              </div>
              <!-- Contact section-->
              <div class="contact-section single-section">
                <div class="row">
                  <!-- Contact form-->
                  <div class="col-12 col-lg-7">
                    <form class="contact-form" id="contact-form" action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
                      <h4 class="content-title">Message Me</h4>
                      <div class="row">
                        <div class="col-12 col-md-6 form-group"><input class="form-control"  type="text" name="NAME" placeholder="Name" required=""></div>
                        <div class="col-12 col-md-6 form-group"><input class="form-control"  type="email" name="EMAIL" placeholder="Email" required=""></div>
                        <div class="col-12 form-group"><input class="form-control"  type="text" name="SUBJECT" placeholder="Subject" required=""></div>
                        <div class="col-12 form-group form-message"><textarea class="form-control"  name="MESSAGE" placeholder="Message" rows="5" required=""></textarea></div>
                        <div class="col-12 form-submit"><button class="btn button-main button-scheme"  type="submit" value="Add Data">Send Message</button>
                          <p class="contact-feedback"></p>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- Contact info-->
                  <div class="col-12 col-lg-5">
                    <div class="contact-info">
                      <h4 class="content-title">Contact Info</h4>
                      <p class="info-description">Always available for working on AWS Projects if the right project comes along, Feel free to contact me!</p>
                      <ul class="list-unstyled list-info">
                        <li>
                          <div class="media align-items-center"><span class="info-icon"><i class="icon ion-logo-ionic"></i></span>
                            <div class="media-body info-details">
                              <h6 class="info-type">Name</h6><span class="info-value">Rushi Donga</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-map"></i></span>
                            <div class="media-body info-details">
                              <h6 class="info-type">Location</h6><span class="info-value">Charotar University of Science and Technology</span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-call"></i></span>
                            <div class="media-body info-details">
                              <h6 class="info-type">Call Me</h6><span class="info-value"><a href="tel:+441632967704">+91 8160452829</a></span>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-send"></i></span>
                            <div class="media-body info-details">
                              <h6 class="info-type">Email Me</h6><span class="info-value"><a href="mailto:emma@example.com">rushi.donga.04@gmail.com</a></span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    
  
  <!-- About lightbox-->
  

  
  
  <!-- Blog lightbox-->
  
  <!-- Contact lightbox-->
  
  <!-- removeIf(customizerDist)-->
  
  <!-- endremoveIf(customizerDist)-->
  <!-- Scripts-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/animatedModal.js"></script>
  <script src="js/tiny-slider.js"></script>
  <script src="js/lity.min.js"></script>
  <script src="js/simplebar.min.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/main.js"></script>
  <!-- Custom JS (Add your custom JS scripts to this file)-->
  <script src="js/custom.js"></script>
  <!-- removeIf(customizerDist)-->
  <script src="../customizer/main.js"></script>
  <!-- endremoveIf(customizerDist)-->

<?php

  mysqli_free_result($result);
  mysqli_close($connection);

?>

</body>
</html>


<?php

/* Add an message to the table. */
function AddMessage($connection, $name, $email, $subject, $message) {
   $n = mysqli_real_escape_string($connection, $name);
   $a = mysqli_real_escape_string($connection, $address);
   $s = mysqli_real_escape_string($connection, $subject);
   $m = mysqli_real_escape_string($connection, $message);
  

   $query = "INSERT INTO SGP (NAME, ADDRESS, SUBJECT, MESSAGE) VALUES ('$n', '$a', '$s', '$m');";

   if(!mysqli_query($connection, $query)) echo("<p>Error adding Message data.</p>");
}

/* Check whether the table exists and, if not, create it. */
function CreateTable($connection, $dbName) {
  if(!TableExists("SGP", $connection, $dbName))
  {
     $query = "CREATE TABLE SGP (
         ID int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         NAME VARCHAR(45),
         ADDRESS VARCHAR(90),
         SUBJECT VARCHAR(90),
         MESSAGE VARCHAR(90)
       )";

     if(!mysqli_query($connection, $query)) echo("<p>Error creating table.</p>");
  }
}

/* Check for the existence of a table. */
function TableExists($tableName, $connection, $dbName) {
  $t = mysqli_real_escape_string($connection, $tableName);
  $d = mysqli_real_escape_string($connection, $dbName);

  $checktable = mysqli_query($connection,
      "SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_NAME = '$t' AND TABLE_SCHEMA = '$d'");

  if(mysqli_num_rows($checktable) > 0) return true;

  return false;
}
?>        