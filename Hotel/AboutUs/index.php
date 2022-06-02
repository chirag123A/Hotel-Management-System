<?php
require '../Signin/connect.php';
@session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="../path/to/flowbite/dist/flowbite.js"></script>
  <script src="https://kit.fontawesome.com/daa7ecc9a8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=My+Soul&family=Satisfy&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <title>Hotel</title>
</head>
<body>
  <header class="text-black-300 bg-white body-font sticky top-0">
    <div id="navbar" class="container mx-auto flex flex-wrap p-3 flex-col md:flex-row items-center">
      <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto text-[16px]">
        <a class="mr-6 hover:text-red-400" href="http://localhost/Hotel/index.php">Home</a>
        <a class="mr-6 hover:text-red-400" href="http://localhost/Hotel/Bookings/index.php">Bookings</a>
        <?php if (!isset($_SESSION['id'])) { echo '<a class="mr-6 hover:text-red-400" href="http://localhost/Hotel/Signin/index.php">Login/Signup </a>'; } else { echo '<a class="mr-6 hover:text-red-400" href="../logout.php">Logout </a>'; } ?>
        <a class="hover:text-red-400" href="index.php">About Us</a>
      </nav>
      <a
        class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-600 lg:items-center lg:justify-center mb-80 md:mb-0">
        <img src="cr.png" class="w-14 mx-0 my-0 px-0 py-0" alt="" />
        <span class="ml-3 text-3xl font-bold logo-text">Burj Al Arab</span>
      </a>
      <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
      <a class="inline-flex items-center bg-gray-100 text-black border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0" href="https://www.figma.com/proto/CRO4S3kpYQzExljZgGVbp5/AL-ARAB-RESTAURANT?node-id=55%3A243&scaling=contain&page-id=0%3A1&starting-point-node-id=55%3A243"> 
          Restaurants
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
      </a>
      </div>
    </div>
  </header>
  <hr style="margin:auto;" color="black" size="1px" width="30%"/>
    <br /><br /><br />
      <div style="margin:auto; width:80%;">
       <div style="width:30%; float:left;">
           <p style="font-family:segoe ui; background-color: rgba(255, 255, 255, .4); padding: 8px; width:100%; margin: auto;">
                Burj Al Arab<br />
                Jumeirah St - Dubai<br />
                PO Box 74147<br />
                Dubai<br />
                UAE<br />
                <b>Phone :</b><a href="tel:8283087576"> 8283087576</a> <br />
                <b>FAX :</b> +91-44 – 23489225<br />
                <b>Help Line :</b> <a href="tel:7009738068"> 7009738068</a> <br />
                <b>Email :</b><a href="mailto:baainfo@jumeirah.com"> baainfo@jumeirah.com</a>
            </p>
        </div>
        <div style="width:67%; float:right;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14447.34913954035!2d55.1852468!3d25.1411914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3da71b879f0e038!2sBurj%20Al%20Arab!5e0!3m2!1sen!2sin!4v1652599505002!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    <br /><br /><br />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <script src="index.js"></script>
</body>
</html>