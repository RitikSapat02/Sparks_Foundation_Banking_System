<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank-system</title>
</head>
<body class='bg-secondary'>

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>


      <!-- Carosoul part start -->
      <section id="top" class="top">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div>
            <img src="https://images.unsplash.com/photo-1616803140344-6682afb13cda?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fGJhbmt8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=1000&q=60"  alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Banking System</h5>
              <p>Place for your money.</p>
            </div>
         
        </div>
  
      </div>
    </section>
      <!-- CArosoul part end -->

        <!-- middle container start-->
        <section id="services" class="services bg-secondary text-white">
        <div class="container my-5">
            <h1 class="text-dark text-center my-5">Services</h1>
            <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3>See all customers and perform transactions</h3>   
                <div class="container col my-5">
                   <p class="lead">All Customers</p>
                   <a href="all_users.php"><button class="btn btn-info" type="button" >Get Started</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead">All Transaction</p>
                   <a href="transaction.php"><button class="btn btn-info" type="button" >Get Started</button></a>
                </div>
               
              </div>

              <div class="col">
              <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjd8fGJhbmt8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=400&q=60" class="rounded img-fluid float-right" alt="...">
              </div>
            </div>
            </section>


         <!-- footer  -->
        <?php require_once './include/footer.php' ?>  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>