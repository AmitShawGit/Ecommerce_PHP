<?php session_start() ?>
<?php include 'header.php' ?>
<section class="main-content page-content mt-2" id="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="lead breadcumb">
          <div class="left-content mt-3">
            <ul>
              <li><i class="fa fa-home" id="sidebarCollapse" style="cursor:pointer"></i></li>
              <li>|</li>
              <li>Product</li>
              <li>|</li>
              <li>Add Product</li>
            </ul>
          </div>
          <div class="right-content mt-3">
            <div class="dropdown">

              <img src="./img/profile.png" alt="" class="dropdown-toggle img-fluid" type="button" data-toggle="dropdown" aria-expanded="false" style="    margin-top: -15px;
    margin-right: 25px;width: 61px;">

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><?php echo " Mr " . $_SESSION['username']; ?></a>
                <a class="dropdown-item" href="logout.php">Log Out</a>

              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container-fluid pt-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <form action="" method=POST enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Product Name <span class="text-danger">*</span></label>
                <input type="text" name="productName" id="" class="form-control">
              </div>

              <div class="form-group">
                <label for="">Actual Price<span class="text-danger">*</span></label>
                <input type="text" name="actualPrice" id="actualPrice" class="form-control" oninput="percentage()">
              </div>

              <div class="form-group">
                <label for="">Offer Price <span class="text-danger">*</span></label>
                <input type="text" name="offerPrice" id="offerPrice" class="form-control" oninput="percentage()">
              </div>
              <div class="row d-flex align-items-center">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="">Discount</label>
                      <p id="discount"></p>
                    </div>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="discount" id="">
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="input-file">
                      <div class="btn btn-info" type="button">Upload <i class="fa fa-upload"></i></div>
                    </label>
                    <input type="file" style="display:none;" id="input-file" name="pimage">
                  </div>
                </div>
              </div>

              <input type="submit" class="btn btn-primary" name="add" value="Save">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card img-top">
            <img src="../images/p7.png" alt="" class="img-fluid">
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
                <img src="../images/assured.png" alt="" class="img-fluid">
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
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="adressTax">
              <ul>
                <?php 
                $select = "select * from product ORDER BY id DESC LIMIT 5";
                $query = mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($query)){
                  $id = $row['id'];
                  $pname = $row['pname'];
                  $aprice = $row['aprice'];
                  $ofprice = $row['ofprice'];
                  $disc = $row['disc'];

               echo"
                   <li>
                  <div class='showBox'>
                    <div class='box'>
                      <div class='box1'>
                        <p><b>$pname</b></p>
                      </div>

                    </div>
                    <div class='box' style='justify-content: space-between;'>
                      <div class='box1'>
                        <p><b>Offer Price</b>: $ofprice</p>
                      </div>
                      <div class='box1'>
                        <p><b>Discount</b>: <span class='text-success'>$disc %</span></p>
                      </div>

                    </div>
                  </div>
                </li>
                ";
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>
</section>


</body>

</html>
<?php
include 'connection.php';
if (isset($_POST['add'])) {
  $productName = mysqli_real_escape_string($con, $_POST['productName']);
  $actualPrice = mysqli_real_escape_string($con, $_POST['actualPrice']);
  $offerPrice = mysqli_real_escape_string($con, $_POST['offerPrice']);
  $discount = mysqli_real_escape_string($con, $_POST['discount']);

  $pimage =  $_FILES["pimage"]["name"];
  $tempname = $_FILES["pimage"]["tmp_name"];
  $folder = "imagess/".$pimage;
  $image_move = move_uploaded_file($tempname, $folder);

  $insert = "insert into product(pname,aprice,ofprice,disc,img) value('$productName','$actualPrice','$offerPrice','$discount','$pimage')";
  $insertquery = mysqli_query($con,$insert);

  if($insertquery){
    ?>
    <script>
      alert('product inserted')
    </script>
    <?php }
      else{
        ?>
        <script>
          alert('product insertion failed')
        </script>
        <?php
      }
    }
  
?>