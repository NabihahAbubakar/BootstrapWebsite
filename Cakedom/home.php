<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabihah's Cakedom</title>
    <link href="cakedom.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>

.card{
text-align: center;
display: inline-block;
margin: 79px;
}
.menu {
  font-family: Castellar;
  text-align: center;
}

footer{
  text-align: center;
}

.carousel-inner{
  display: block;
margin-left: auto;
margin-right: auto;
width: 100%;


}

</style>



  </head>

<body>
    

<!-- Nav starts here -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="../Cakedom/cakedomx.jpg" alt="..." width="30" height="30" class="d-inline-block align-text-top">
      Cakedom
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cake</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cup Cake</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Brownies</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Doughnuts</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cookies</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>  

<!-- Nav ends here -->

<!-- Carousel -->

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../Cakedom/cover1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Cakedom/cover2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../Cakedom/cover3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
<!-- Carousel end-->
<br>
<br>
<!-- Card -->
<h1 class="menu">Menu</h1>
<div class="card" style="width: 18rem;">
  <img src="../Cakedom/cake1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Double chocolate chip cake</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Rs.2200</b></li>
    <div class="card-body">
    <a href="#" class="card-link">Buy</a>
  </div>
  </ul>
</div>


<div class="card" style="width: 18rem;">
  <img src="../Cakedom/cake2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Walnut Cup Cake</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Rs.160</b></li>
    <div class="card-body">
    <a href="#" class="card-link">Buy</a>
  </div>
  </ul>
</div>


<div class="card" style="width: 18rem;">
  <img src="../Cakedom/cake3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Classic Brownie</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Rs.200</b></li>
    <div class="card-body">
    <a href="#" class="card-link">Buy</a>
  </div>
  </ul>
</div>
<footer>No Copyright - <a target="_blank"  href="https://www.instagram.com/cakedom_pk/" >Cakedom.org</a></footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>