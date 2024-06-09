<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V Hotel - HOME</title>
    <?php require('inc/links.php');?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<style>
  .availability-form{
    margin-top: -50px;
    z-index: 2;
    position: relative;
  }

  @media screen and (max-width: 575px){
    .availability-form{
      margin-top: 25px;
      padding: 0 35px;
    } 
  }
</style>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

<!-- Carousel -->

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" class="w-100 d-block"> 
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" class="w-100 d-block">
      </div>
    </div>
    </div>
  </div>

<!-- check availability form -->

<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-item-end">
          <div class="col-lg-3 mb-3">
          <label  class="form-label" style="font-weight: 500;">Check-in</label>
                <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label  class="form-label" style="font-weight: 500;">Check-out</label>
                <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label  class="form-label" style="font-weight: 500;">Adult</label>
          <select class="form-select shadow-none">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-lg-3 mb-3">
          <label  class="form-label" style="font-weight: 500;">Children</label>
          <select class="form-select shadow-none">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          </div>
          <div class="co-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div> 
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Our Rooms -->
<h2 class="mt-5 pt-5-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top">
        <div class="card-body">
          <h5>Hotel CSS</h5>
          <h6 class="mb-4">IDR250000 per Night</h6> 
          <div class="features mb-4">
            <h6 class="mb-1">features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Rooms 
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Bathroom
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Balcony
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Sofa  
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              TV
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Water Heater  
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Adult
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              1 Children
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/2.png" class="card-img-top">
        <div class="card-body">
          <h5>Hotel HTML</h5>
          <h6 class="mb-4">IDR750000 per Night</h6> 
          <div class="features mb-4">
          <h6 class="mb-1">features</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            3 Rooms 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            2 Bathroom
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            1 Balcony
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            2 Sofa  
          </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              TV
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Water Heater  
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Bathub  
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Dinner  
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              6 Adult
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
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
            <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/3.png" class="card-img-top">
        <div class="card-body">
          <h5>Hotel javacript</h5>
          <h6 class="mb-4">IDR450000 per Night</h6> 
          <div class="features mb-4">
          <h6 class="mb-1">features</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            2 Rooms 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            1 Bathroom
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            1 Balcony
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            2 Sofa  
          </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              TV
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Water Heater  
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Bathub  
            </span>
          </div>
          <div class="guests mb-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              4 Adult
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              2 Children
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>

    </div>
  </div>
</div>

<!-- Our Facilities -->

 <h2 class="mt-5 pt-5-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

 <div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/Water Heater.svg" width="80px">
      <h5 class="mt-3">Water Heater</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/AC.svg" width="80px">
      <h5 class="mt-3">AC</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/TV.svg" width="80px">
      <h5 class="mt-3">TV</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/facilities/pijat.svg" width="80px">
      <h5 class="mt-3">Pijat Terapi</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
    </div>
  </div>
 </div>
  
 <!-- Testimoni -->

 <h2 class="mt-5 pt-5-4 mb-4 text-center fw-bold h-font">Testimoni</h2>

  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/testimoni/jeonjungkook.jpg" width="30px">
            <h6 class="m-0 m-2">JeonJungkook</h6>
          </div>
          <p>
            Sangat Rekomended Kiyowo 
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/testimoni/ning ning.jpg" width="30px">
            <h6 class="m-0 m-2">Ning Ning</h6>
          </div>
          <p>
            Nyaman Banget Sumida 
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/testimoni/IU.jpg" width="30px">
            <h6 class="m-0 m-2">IU</h6>
          </div>
          <p>
            Bintang 5 deh Pokoknya 
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/testimoni/cha eun woo.jpg" width="30px">
            <h6 class="m-0 m-2">ChaEunWoo</h6>
          </div>
          <p>
            Overall bagus cuma kurang di Pijat nya aja
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
      <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
    </div>
  </div>

  <!-- Reach us -->

  <h2 class="mt-5 pt-5-4 mb-4 text-center fw-bold h-font">REACH US</h2>
  
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253497.35555206903!2d107.34775782953493!3d-6.903017587883829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1717417271726!5m2!1sid!2sid" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel: +6281313549142" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+6281313549142
          </a>
          <br>
          <a href="tel: +62882101293124" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+62882101293124
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="https://www.instagram.com/valdric000/" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i>Instagram
            </span>
          </a>
          <br>
          <a href="https://x.com/valdricaiu" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter-x me-1"></i>X
            </span>
          </a>
          <br>
          <a href="https://www.tiktok.com/@vapd19" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-tiktok me-1"></i>Tiktok
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>


<!-- Footer -->

<?php require('inc/footer.php');?>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,

    }
  });

  var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
</script>

</body>
</html>