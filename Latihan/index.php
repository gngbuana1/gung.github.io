<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha3/css/bootstrap.min.css" integrity="sha384-qpLOZaMdFgR3Rs0bW0mzW+PAN9Z6pqZQ/QHzg8fsd6GnsrLmb6Wnz2oLTsnUqW0F" crossorigin="anonymous">
  <title>latihan</title>
  <style>
    .swiper-slide {
      text-align: center;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      max-width: 100%;
      height: auto;
    }

    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }

    .card-text {
      margin-bottom: 1rem;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      padding: 0.5rem 1rem;
    }

    .btn-warning:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }
    /* Tampilan untuk perangkat dengan lebar layar 768px atau lebih besar */
@media (min-width: 768px) {
  .about-us {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }
}

/* Tampilan untuk perangkat dengan lebar layar 576px atau lebih besar */
@media (min-width: 576px) {
  .about-us {
    flex-direction: column;
    align-items: center;
  }
}

/* Tampilan untuk tombol Submit pada form kontak */
.contact-us .submit-button {
  display: block;
  width: 100%;
  margin-top: 10px;
  text-align: center;
}
    .testimonial {
      background-color: orange;
      color: white;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .testimonial h4 {
      color: white;
    }

    .testimonial p {
      color: white;
    }

    .review-stars {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      margin-bottom: 10px;
    }

    .review-stars input[type="radio"] {
      display: none;
    }

    .review-stars label {
      color: #ccc;
      font-size: 24px;
      cursor: pointer;
      margin: 0 2px;
    }

    .review-stars label:before {
      content: "\2605";
    }

    .review-stars input[type="radio"]:checked ~ label {
      color: gold;
    }

    @media (max-width: 767px) {
      .testimonial {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; ">
    <div class="container">
      <div class="navbar-logo"><img src="foto/logo.png" alt="" style="width: 150px; height: 70px;"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="foto/1.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="foto/2.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="foto/3.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="container mt-4">
  <h3 class="text-center">PRODUCT</h3>
  <li class="nav-item dropdown" style="list-style-type: none;">
  <a class="nav-link dropdown-toggle text-danger custom-dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Brand
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" onclick="filterProducts('')">All</a></li>
    <li><a class="dropdown-item" onclick="filterProducts('hp')">HP</a></li>
    <li><a class="dropdown-item" onclick="filterProducts('asus')">Asus</a></li>
    <li><a class="dropdown-item" onclick="filterProducts('lenovo')">Lenovo</a></li>
    <li><a class="dropdown-item" onclick="filterProducts('msi')">MSI</a></li>
    <li><a class="dropdown-item" onclick="filterProducts('acer')">Acer</a></li>
  </ul>
</li>
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-brand="hp">
        <div class="card" style="width: 18rem;">
          <img src="foto/hp.jpg" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">HP</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-warning">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-brand="asus">
        <div class="card" style="width: 18rem;">
          <img src="foto/asus.jpg" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Asus</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-warning">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-brand="lenovo">
        <div class="card" style="width: 18rem;">
          <img src="foto/lenovo.jpg" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Lenovo</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-warning">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-brand="msi">
        <div class="card" style="width: 18rem;">
          <img src="foto/msi.jpg" class="card-img-top" alt="Product 4">
          <div class="card-body">
            <h5 class="card-title">MSI</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-warning">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-brand="acer">
        <div class="card" style="width: 18rem;">
          <img src="foto/acer.webp" class="card-img-top" alt="Product 5">
          <div class="card-body">
            <h5 class="card-title">Acer</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="btn btn-warning">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiper', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    },
  });

  function filterProducts(brand) {
    var slides = document.getElementsByClassName('swiper-slide');
    for (var i = 0; i < slides.length; i++) {
      var slide = slides[i];
      var slideBrand = slide.getAttribute('data-brand');
      if (brand === '' || slideBrand.includes(brand)) {
        slide.style.display = 'block';
      } else {
        slide.style.display = 'none';
      }
    }
    swiper.update(); // Refresh swiper layout
  }
</script>
  <div class="about mt-5" id="about">
    <div class="main">
      <img src="foto/logo.png" alt="">
      <div class="about-text">
        <h1>About Us</h1>
        <h5><span>GADGE</span>TOP</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum porro libero aliquid non ducimus dolorem quia, cum repellendus, molestias voluptatem, vero dolore illum. Illum iusto recusandae nostrum! Tenetur aliquam accusamus aperiam enim sapiente quia, minus eaque aut esse quod, ut accusantium. Quaerat, nulla. Rem, veniam omnis magnam earum quod voluptatum, reprehenderit possimus voluptas at mollitia provident velit dignissimos ipsum quaerat maxime amet accusamus delectus nihil? Id, suscipit delectus officia est distinctio nostrum soluta nihil odit sit expedita excepturi quidem dolores maiores quae explicabo? Nesciunt nihil ea minima excepturi! Maiores doloribus reprehenderit vitae similique a magnam, error fuga iusto voluptate veniam.</p>
      </div>
    </div>
  </div>
  <div class="contact mb-5" id="contact">
    <div class="container">
      <h3 class="mb-5">Contact Us</h3>
      <div class="row single-form g-0">
        <div class="col-sm-12 col-lg-6">
          <div class="left">
          </div>
        </div>
        <div class="col-sm-12 col-lg-6">
          <div class="right">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Message</label>
                <textarea type="text" class="form-control" id="exampleInputPassword1"></textarea>
              </div>
              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
      <div class="container mt-5">
                          <h1 class="text-center m-5">Testimoni</h1>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="testimonial">
          <h4>John Doe</h4>
          <div class="review-stars">
            <input type="radio" id="star1" name="rating" checked />
            <label for="star1"></label>
            <input type="radio" id="star2" name="rating" />
            <label for="star2"></label>
            <input type="radio" id="star3" name="rating" />
            <label for="star3"></label>
            <input type="radio" id="star4" name="rating" />
            <label for="star4"></label>
            <input type="radio" id="star5" name="rating" />
            <label for="star5"></label>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet luctus mauris.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="testimonial" style="background-color: orange;">
          <h4>Jane Smith</h4>
          <div class="review-stars">
            <input type="radio" id="star6" name="rating" checked />
            <label for="star6"></label>
            <input type="radio" id="star7" name="rating" />
            <label for="star7"></label>
            <input type="radio" id="star8" name="rating" />
            <label for="star8"></label>
            <input type="radio" id="star9" name="rating" />
            <label for="star9"></label>
            <input type="radio" id="star10" name="rating" />
            <label for="star10"></label>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet luctus mauris.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="testimonial" style="background-color: orange; color: white;">
          <h4>John Smith</h4>
          <div class="review-stars">
            <input type="radio" id="star11" name="rating" checked />
            <label for="star11"></label>
            <input type="radio" id="star12" name="rating" />
            <label for="star12"></label>
            <input type="radio" id="star13" name="rating" />
            <label for="star13"></label>
            <input type="radio" id="star14" name="rating" />
            <label for="star14"></label>
            <input type="radio" id="star15" name="rating" />
            <label for="star15"></label>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet luctus mauris.</p>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>