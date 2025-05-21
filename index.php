  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HOTELS_HOME</title>
      <?php require('inc/links.php');?>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
       
  <style>
  .availability-form{
    margin-top:-50px;
    z-index: 11;
    position:relative;
  }
  @media screen and(max-width:575px){
    .availability-form{
    margin-top:25px;
    padding:0 35px;
  }
  }

      </style>
  </head>

  <body class="bg-light">
  <?php require('inc/header.php');?>
  <!-- carousel -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper Swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.jpg"class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.jpg"class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.jpg" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.jpg"class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.jpg"class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.jpg"class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>
  <!-- check availability form  -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">check booking availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Adults</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight:500;">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mt-2 mb-lg-3">
              <button type="submit" class="btn text-white shadow-none custom-bg">SUBMIT</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--  our rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card  border-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">

          <div class="card-body">
            <h5 >simple room name</h5>
            <h6 class="mb-4">₹2000 per night</h6>
            <div class="Features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Telivision
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Room heater
            </span>
            </div>
            <div class="Guests mb-4">
              <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              4 Children
            </span>
           
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card  border-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">

          <div class="card-body">
            <h5 >Simple Room Name</h5>
            <h6 class="mb-4">₹2000 per night</h6>
            <div class="Features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Telivision
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Room heater
            </span>
            </div>
            <div class="Guests mb-4">
              <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              4 Children
            </span>
           
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card  border-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="images/rooms/1.jpg" class="card-img-top">

          <div class="card-body">
            <h5 >simple room name</h5>
            <h6 class="mb-4">₹2000 per night</h6>
            <div class="Features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Bathrooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Telivision
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Room heater
            </span>
            </div>
            <div class="Guests mb-4">
              <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              5 Adults
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              4 Children
            </span>
           
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
          </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fm-bold shadow-none">More Rooms >>></a>
      </div>
    </div>
  </div>
  <!-- our facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-2 px-sm-5">
      <div class="col-lg-2 col-md-2 col-sm-8 text-center bg-whites rounded shadow py-4 my-3">
        <img src="images/features/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-8 text-center bg-whites rounded shadow py-4 my-3">
        <img src="images/features/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-8 text-center bg-whites rounde shadow py-4 my-3">
        <img src="images/features/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-8 text-center bg-whites rounde shadow py-4 my-3">
        <img src="images/features/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-8 text-center bg-whites rounde shadow py-4 my-3">
        <img src="images/features/wifi.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fm-bold shadow-none">More Facilities >>></a>
      </div>
    </div>
  </div>
  <!-- testimonials -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
  <div class="container">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper">

        <div class="swiper-slide bg-white p-4">  
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg" width="30px">
          <h6 class="m-0 ms-2">Random User1</h6>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Placeat tempora distinctio voluptas a! Recusandae accusamus repudiandae
          numquam nesciunt sed illum.
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
        </div>
        </div>
        <div class="swiper-slide bg-white p-4">  
          <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Placeat tempora distinctio voluptas a! Recusandae accusamus repudiandae
            numquam nesciunt sed illum.
          </p>
          <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">  
          <div class="profile d-flex align-items-center mb-3">
          <img src="images/features/star.svg" width="30px">
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Placeat tempora distinctio voluptas a! Recusandae accusamus repudiandae
            numquam nesciunt sed illum.
          </p>
          <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fm-bold shadow-none">Know More >>></a>
          </div>
  </div>
  <!-- reach us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230660.45187835436!2d81.63676985055599!3d25.402482060135885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1707747754938!5m2!1sen!2sin"    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4 ">
      <div class="bg-white p-4 rounded mb-4">
        <h5>Call us</h5>
        <a href="tel:+919876543217" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +919876543217</a><br>
          <a href="tel:+919876543217" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +919876543216</a>
      </div>
      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow us</h5>
        <a href="#" class="d-inline-block mb-3 ">
        <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter me-1"></i>Twitter
        </span>
        </a><br>
        <a href="#" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-facebook me-1"></i>Facebook
          </span>
        </a><br>
        <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram me-1"></i>Instagram
          </span>
        </a>
      </div>
      </div>
    </div>
  </div>
 
  <?php require('inc/footer.php');?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>  

  <script>
    var swiper = new Swiper(".Swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{
        delay:3500,
        disableOnInteraction:false,
      }
    });
    var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        // slidesPerView: "auto",
        slidesPerView: "2",
        loop:true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows:false,
        },
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
            slidesPerView:3,
          },
        }
      });
  </script>
  </body>
  </html>