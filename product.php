<?php include "header.php" ?>
  <main>
    <div class="container">
      <div class="row mt-4">
      <?php 

          $id = $_GET["id"];
          $select = "select * from product where id = $id ";
          $selectQuery = mysqli_query($con,$select);
          
          $res= mysqli_fetch_assoc($selectQuery);
           

          ?>
        <div class="col-md-6  mt-1">
          <div class="border">
            <img src="<?php echo "./admin/imagess/$res[img]" ?>"alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6">
          <div class="description">
            <h2><b><?php echo $res["pname"]; ?></b></h2>
            <h5> (Blue Tide, 6GB RAM, 128GB Storage)</h5>

            <p class="text-info">Be the first to Review this product</p>
            <div class="price pb-2">
              <span class="disprice"><s><?php echo $res['aprice'] ?></s></span>
              <b style="font-size: 25px;"><?php echo $res['ofprice'] ?></b>
            </div>
            <div class="percent box">
              <p class="text-success"><b><?php echo $res['disc'] ?>% off</b></p>
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
              <p> &nbsp;(25000 reviews)</p>
            </div>
            <div class="AdressTax">
              <ul>
                <li class="text-success"><i class="fa-solid fa-tag fa-fade"></i> Discount on Axix Bank Card</li>
                <li class="text-success"><i class="fa-solid fa-tag fa-fade"></i> Discount on Replacement</li>
                <li class="text-success"><i class="fa-solid fa-tag fa-fade"></i> Discount on Colours</li>
                <li class="text-success"><i class="fa-solid fa-tag fa-fade"></i> Discount on Online Payment</li>
              </ul>
            </div>
            <div class="box" style="justify-content: space-around;">
              <div class="box1">
                <div class="delivery text-center">
                  <i class="fa-solid fa-truck"></i>
                </div>
                <div class="text-center">
                  <p>24Hrs <br> Delivery</p>
                </div>
              </div>
              <div class="box1">
                <div class="delivery text-center">
                  <i class="fa-solid fa-recycle"></i>
                </div>
                <div class="text-center">

                  <p>7days <br> Return Policy</p>
                </div>
              </div>
              <div class="box1">
                <div class="delivery text-center">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div class="text-center">
                  <p>Easy <br> Customer Support</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label for="qty">Quantity <span class="text-danger">*</span></label>
                <select name="" id="qty" class="form-control">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mt-2">
                <a href="<?php echo "cart.php?id=$id" ?>" class="btn btn-warning" style="width: 276px;" onclick="selectqty()">Add to Cart</a>
              </div>
              <div class="col-md-6 mt-2">
                <a href="<?php echo "cart.php?id=$id" ?>" class="btn btn-success" style="width: 276px;" onclick="selectqty()">Buy Now</a>
              </div>
            </div>


          </div>
        </div>
       
         
      </div>
      <div class="row pt-3">
        <div class="col-md-12">
          <p class="about-product">
          <h3><b>About Product</b></h3>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam porro harum iure repellat minima cum veniam
          totam, quae ipsam doloremque nemo delectus ratione. Molestias autem rerum odio quam illo officia alias
          accusamus quasi delectus laboriosam error a voluptas numquam corporis maiores totam dolore veniam, eaque fuga,
          labore deserunt dolorum, voluptatum debitis. Laudantium, incidunt optio, vero laborum distinctio ipsa facere
          omnis aliquid iure eos animi ullam ipsam et dolorem accusantium rerum ea praesentium numquam eaque possimus
          mollitia officia inventore porro. Sit tenetur reprehenderit rerum libero eaque aut consequuntur ipsa. Fugit,
          alias doloremque enim repellat blanditiis officia facere corrupti totam qui iste <span
            style="color:blue">more...</span>
          </p>
        </div>
      </div>
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
  </main>
<?php include "footer.php" ?>

