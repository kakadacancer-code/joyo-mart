<?php get_header(); ?>
<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<Body>
<section class="hero">
    <div class="hero-text">
        <h1>Delicious,<br>Salty and Sweet</h1>
        <p>Grab your Lay's Salted Caramel today!</p>
        <button class="btm">More</button>
    </div>
</section>

<section class="section">
  <h3>Feature</h3>
  <div class="line"></div>
  <div class="grid-2">
    <a href="#">
      <div class="card">
        <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/k-bread.jpg" alt="Oreo">
        </div>
        <div class="card-txt">
            <h2>Red Velvet</h2>
            <p>Deliciously classic bread.</p>
        </div>
    </div>
    </a>
    <a href="#">
      <div class="card">
        <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/k-bread1.jpg" alt="Oreo">
        </div>
        <div class="card-txt">
            <h2>Chocolate Bueno</h2>
            <p>Deliciously classic bread.</p>
        </div>
    </div>
    </a>
    <a href="#">
      <div class="card">
        <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/k-bread2.jpg" alt="Oreo">
        </div>
        <div class="card-txt">
            <h2>Chocolate Chip</h2>
            <p>Deliciously classic Oreo.</p>
        </div>
    </div>
    </a>
    <a href="#">
      <div class="card">
        <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/k-bread3.jpg" alt="Oreo">
        </div>
        <div class="card-txt">
            <h2>Matcha Pistache</h2>
            <p>Deliciously classic Oreo.</p>
        </div>
    </div>
    </a>
    
  </div>
</section>


<section class="section">
  <h3>Category</h3>
  <div class="line"></div>
  <div class="grid-2">
      <a href="">
        <div class="card-image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bakery.jpg" alt="Oreo">
            <div class="card-txt-center">
              <h2>Bakery</h2>
          </div>
      </div>
      </a>
      <a href="">
        <div class="card-image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/breand.jpg" alt="Oreo">
            <div class="card-txt-center">
              <h2>Korean Bread</h2>
          </div>
      </div>
      </a>
      <a href="">
        <div class="card-image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cookies.jpg" alt="Oreo">
            <div class="card-txt-center">
              <h2>Cookies</h2>
          </div>
      </div>
      </a>
      <a href="">
        <div class="card-image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/snack.jpg" alt="Oreo">
            <div class="card-txt-center">
              <h2>Snacks</h2>
          </div>
      </div>
      </a>
    </div>
</section>


<section class="section">
  <h3>Latest</h3>
  <div class="line"></div>
  <div class="slider-box">
  <button class="btn left" onclick="moveLeft()">‹</button>

  <div class="slider" id="slider">
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/oreo.jpg" alt="Oreo">
      <h3>Oreo</h3>
      <p>Deliciously classic Oreo.</p>
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/oreo1.jpg.jpg" alt="Oreo">
      <h3>Oreo</h3>
      <p>Deliciously classic Oreo.</p>
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/oreo2.jpg" alt="Oreo">
      <h3>Oreo</h3>
      <p>Deliciously classic Oreo.</p>
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/background.jpg" alt="Oreo">
      <h3>Oreo</h3>
      <p>Deliciously classic Oreo.</p>
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/oreo.jpg" alt="Oreo">
      <h3>Oreo</h3>
      <p>Deliciously classic Oreo.</p>
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/oreo1.jpg.jpg" alt="Oreo">
      <h3>Oreo</h3>
      <p>Deliciously classic Oreo.</p>
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/oreo2.jpg" alt="Oreo">
      <h3>Oreo</h3>
      <p>Deliciously classic Oreo.</p>
    </div>

    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/background.jpg" alt="Oreo">
      <h3>Oreo</h3>
      <p>Deliciously classic Oreo.</p>
      <button><i class="fa-sharp fa-solid fa-plus"></i></button>
    </div>
  </div>

  <button class="btn right" onclick="moveRight()">›</button>
</div>

<section class="offer">
  <h3>Special Offer</h3>
  <p>Up to 20% off</p>
</section>




<script>
  const slider = document.getElementById("slider");

  function moveLeft() {
    slider.scrollLeft -= 270; 
  }

  function moveRight() {
    slider.scrollLeft += 270; 
  }
</script>


</Body>
<?php get_footer(); ?>