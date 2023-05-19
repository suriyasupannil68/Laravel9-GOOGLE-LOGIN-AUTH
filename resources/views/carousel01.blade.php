

<!-- <link rel="stylesheet" href="assets/css/style.css "> -->



<style>
  /* Style for the carousel */
#about-carousel {
  position: relative;
  height: 400px;
  overflow: hidden;
}

#about-carousel .carousel-item {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 0.6s ease-in-out;
}

#about-carousel .carousel-item.active {
  opacity: 1;
}

#about-carousel .carousel-control-prev,
#about-carousel .carousel-control-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 1;
}

#about-carousel .carousel-control-prev {
  left: 15px;
}

#about-carousel .carousel-control-next {
  right: 15px;
}

#about-carousel .carousel-control-prev-icon,
#about-carousel .carousel-control-next-icon {
  height: 30px;
  width: 30px;
  outline: black;
  background-size: 100%, 100%;
  border-radius: 50%;
  border: 1px solid black;
  background-image: none;
}

#about-carousel .carousel-control-prev-icon {
  margin-left: -15px;
}

#about-carousel .carousel-control-next-icon {
  margin-right: -15px;
}

</style>
<!--เปิดโคโรเซล-->    

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-wrap="true">


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/rung01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/rung01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/rung01.jpg" class="d-block w-100" alt="...">
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


