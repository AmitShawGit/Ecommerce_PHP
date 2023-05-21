<?php include 'header.php'?>

  <main>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/s.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/s.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/s.jpg" class="d-block w-100 img-fluid" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    <!--Top Selling-->
    <div class="container pt-5">
      <div class="box pb-3">
        <div class="box1">
          <h5><b>Top Selling Products</b></h5>
        </div>
      </div>
      <div class="row">
        <div class="top-selling owl-carousel owl-theme">
          <?php 
          $select = 'select * from product';
          $selectQuery = mysqli_query($con,$select);
          while($row = mysqli_fetch_assoc($selectQuery)){
            $id = $row['id'];
            $pname = $row['pname'];
            $aprice = $row['aprice'];
            $ofprice = $row['ofprice'];
            $disc = $row['disc'];
            $img = $row['img'];

            echo "
            <div class='item'>
            <a href='product.php?id=$id'>
              <div class='card'>
                <div class='card img-top'>
                  <img src='./admin/imagess/$img' alt='' class='img-fluid'>
                </div>
                <div class='card-body' style='padding:10px'>
                  <div class='title'>
                    <h5>$pname</h5>
                  </div>
                  <div class='price pb-2'>
                    <span class='disprice'><s>$aprice</s></span>
                    <b>$ofprice</b>
                  </div>
                  <div class='percent box'>
                    <p class='text-success'><b>$disc% off</b></p>
                    <div class='imgassure'>
                      <img src='./images/assured.png' alt='' class='img-fluid'>
                    </div>
                  </div>
                  <div class='box'>
                    <p>
                      <i class='fa fa-star text-warning'></i>
                      <i class='fa fa-star text-warning'></i>
                      <i class='fa fa-star text-warning'></i>
                      <i class='fa fa-star text-warning'></i>
                      <i class='fa fa-star text-warning'></i>
                    </p>
                    <p> &nbsp;(25000)</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
            ";
            
          }
          ?>
          
        

        </div>
      </div>
    </div>
    <!--Top Selling-->
    <!--Trending-->
    <div class="container pt-5">
      <div class="box pb-3" style="justify-content: space-between;">
        <div class="box1">
          <h5><b>Top Trending Products</b></h5>
        </div>
        <div class="box2">
        
          <button class="btn btn-outline-primary filter" data-filter="Infinix">Infinix</button>
          <button class="btn btn-outline-primary filter" data-filter="Redmi">Redmi</button>
          <button class="btn btn-outline-primary filter" data-filter="OnePlus">One Plus</button>
          <button class="btn btn-outline-primary filter" data-filter="Realme">Realme</button>
        </div>
      </div>
      <div class="row product">

        <div class="col-md-3 store-item Redmi mt-2" data-item="Redmi">
          <a href="product.php">
            <div class="card">
              <div class="card img-top">
                <img src="./images/p1.png" alt="" class="img-fluid">
              </div>
              <div class="card-body" style="padding:10px">
                <div class="title text-capitalize">
                  <h5>Remdi Note 12 pro+</h5>
                </div>
                <div class="price pb-2">
                  <span class="disprice"><s>$54,000</s></span>
                  <b>$50,000</b>
                </div>
                <div class="percent box">
                  <p class="text-success"><b>26% off</b></p>
                  <div class="imgassure">
                    <img src="./images/assured.png" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="box">
                  <p>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p> &nbsp;(25000)</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 store-item Samsung mt-2" data-item="Samsung">
          <a href="product.php">
            <div class="card">
              <div class="card img-top">
                <img src="./images/p8.png" alt="" class="img-fluid">
              </div>
              <div class="card-body" style="padding:10px">
                <div class="title text-capitalize">
                  <h5>Samsung Galaxy S4</h5>
                </div>
                <div class="price pb-2">
                  <span class="disprice"><s>$15,000</s></span>
                  <b>$8,000</b>
                </div>
                <div class="percent box">
                  <p class="text-success"><b>26% off</b></p>
                  <div class="imgassure">
                    <img src="./images/assured.png" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="box">
                  <p>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p> &nbsp;(25000)</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 store-item OnePlus mt-2" data-item="OnePlus">
          <a href="product.php">
            <div class="card">
              <div class="card img-top">
                <img src="./images/p3.png" alt="" class="img-fluid">
              </div>
              <div class="card-body" style="padding:10px">
                <div class="title text-capitalize">
                  <h5>One Plus Neo</h5>
                </div>
                <div class="price pb-2">
                  <span class="disprice"><s>$45,000</s></span>
                  <b>$30,000</b>
                </div>
                <div class="percent box">
                  <p class="text-success"><b>26% off</b></p>
                  <div class="imgassure">
                    <img src="./images/assured.png" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="box">
                  <p>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p> &nbsp;(25000)</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-3 store-item Infinix mt-2" data-item="Infinix">
          <a href="product.php">
            <div class="card">
              <div class="card img-top">
                <img src="./images/p4.png" alt="" class="img-fluid">
              </div>
              <div class="card-body" style="padding:10px">
                <div class="title text-capitalize">
                  <h5>Infinix Hot 8 Play</h5>
                </div>
                <div class="price pb-2">
                  <span class="disprice"><s>$10,000</s></span>
                  <b>$7,000</b>
                </div>
                <div class="percent box">
                  <p class="text-success"><b>26% off</b></p>
                  <div class="imgassure">
                    <img src="./images/assured.png" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="box">
                  <p>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p> &nbsp;(25000)</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-3 store-item Infinix mt-2" data-item="Infinix">
          <a href="product.php">
            <div class="card ">
              <div class="card img-top">
                <img src="./images/p5.png" alt="" class="img-fluid">
              </div>
              <div class="card-body" style="padding:10px">
                <div class="title text-capitalize">
                  <h5>Infinix Hot 8 Plus</h5>
                </div>
                <div class="price pb-2">
                  <span class="disprice"><s>$10,000</s></span>
                  <b>$7,000</b>
                </div>
                <div class="percent box">
                  <p class="text-success"><b>26% off</b></p>
                  <div class="imgassure">
                    <img src="./images/assured.png" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="box">
                  <p>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p> &nbsp;(25000)</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 store-item Redmi mt-2" data-item="Redmi">
          <a href="product.php">
            <div class="card">
              <div class="card img-top">
                <img src="./images/p6.png" alt="" class="img-fluid">
              </div>
              <div class="card-body" style="padding:10px">
                <div class="title text-capitalize">
                  <h5>Remdi Note 12 pro+</h5>
                </div>
                <div class="price pb-2">
                  <span class="disprice"><s>$54,000</s></span>
                  <b>$50,000</b>
                </div>
                <div class="percent box">
                  <p class="text-success"><b>26% off</b></p>
                  <div class="imgassure">
                    <img src="./images/assured.png" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="box">
                  <p>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p> &nbsp;(25000)</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 store-item Realme mt-2" data-item="Realme">
          <a href="product.php">
            <div class="card">
              <div class="card img-top">
                <img src="./images/p7.png" alt="" class="img-fluid">
              </div>
              <div class="card-body" style="padding:10px">
                <div class="title text-capitalize">
                  <h5>Realme Note </h5>
                </div>
                <div class="price pb-2">
                  <span class="disprice"><s>$60,000</s></span>
                  <b>$50,000</b>
                </div>
                <div class="percent box">
                  <p class="text-success"><b>26% off</b></p>
                  <div class="imgassure">
                    <img src="./images/assured.png" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="box">
                  <p>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                    <i class="fa fa-star text-warning"></i>
                  </p>
                  <p> &nbsp;(25000)</p>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
    <!--Trending-->
    <!--Ads-->
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-6">
          <img src="./images/ad.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
          <img src="./images/ad.jpg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
    <!--Ads-->
    <!--Blog-->
    <div class="container pt-5">
      <div class="box pb-3">
        <div class="box1">
          <h5><b>Blogs</b></h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="./images/p7.png" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./images/p5.png" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="./images/p4.png" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--blog-->
  </main>
 <?php include 'footer.php' ?>
 
 <!-- this is a newbraanch -->