            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>HOTELS-ABOUT</title>
                <?php require('inc/links.php');?>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
                <style>
                  .box
                  {
                    border-top-color:var(--teal) !important
                  }
                </style>
            </head>
            <body class="bg-light">
            <?php require('inc/header.php');?>
            <div class="my-5 px-4">
         <h2 class="fw-bold h-font text-center">ABOUT US</h2>
      <div class="h-line bg-dark "></div>
      <p class="text-center mt-3">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
       Fugit rerum, <br> expedita maiores vero ex quae dolores reiciendis? 
       Id, cupiditate natus!
      </p>
      </div>
          </div>
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem, ipsum dolor sit </h3>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Minus asperiores minima cumque odit eum! Ducimus rerum
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Minus asperiores minima cumque odit eum! Ducimus rerum 
                  </p>
              </div>
              <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
          </div>
            </div>
          </div>
          <!-- about us -->
    <div class="container mt-5">
      <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/hotel.jpg" width="70px">
      <h4 class="mt-3">100+ ROOMS</h4>
    </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/customer.png" width="70px">
      <h4 class="mt-3">200+CUSTOMERS</h4>
    </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/rating.png" width="70px">
      <h4 class="mt-3">150+ REVIEWS</h4>
    </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="images/about/staff.png" width="70px">
      <h4 class="mt-3">200+ STAFFS</h4>
    </div>
        </div>
        </div>
          </div>
     <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
      <div class="container px-4">
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="images/about/team.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

     </div>
              <?php require('inc/footer.php');?>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
      slidesPerView:4,
      spaceBetween:40,
        pagination: {
          el: ".swiper-pagination",
        },
          breakpoints:{
            320 :{
              slidesPerView:1,
            },
            640 :{
              slidesPerView:1,
            },
            768 :{
              slidesPerView:2,
            },
            1024 :{
              slidesPerView:4,
            },
          }
      });
    </script>
              
            </body>
            </html>