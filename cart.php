<?php session_start() ?>
<?php include 'header.php' ?>
<main>
    <!--catrbox-->
    <div class="container">
        <div class="row mt-4">
            <?php
            $id = $_GET['id'];
            $select = " select * from product where id = $id ";
            $selectQuery = mysqli_query($con, $select);
            $res = mysqli_fetch_assoc($selectQuery);
            $qty = $_COOKIE['qty'];
            ?>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4 border">
                        <img src="<?php echo "./admin/imagess/$res[img]" ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8 border">
                        <h4><b id="pname"><?php echo $res['pname'] ?></b></h4>
                        <h6>(Blue Tide, 6GB RAM, 128GB Storage)</h6>
                        <div class="price pb-2">
                            <span class="disprice"><s><?php echo $res['aprice'] * $qty ?></s></span>
                            <b style="font-size: 25px;"><?php echo $res['ofprice'] * $qty ?></b>
                        </div>
                        <div class="percent box">
                            <p class="text-success"><b><?php echo $res['disc'] ?> %</b></p>
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
                                <li class="text-success"><i class="fa-solid fa-tag fa-fade"></i> Discount on Axix
                                    Bank Card <b>Applied</b></li>
                            </ul>
                        </div>
                        <p><b>Quantity:</b> <?php echo $qty ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border">
                <p class="text-center text-danger"><b>Invoice Section</b></p>
                <div class="box" style="justify-content: space-between;">
                    <div class="box1">
                        <p><b>Product Name: </b></p>
                        <p><b>Offered Price:</b></p>
                        <p><b>Discounted Price:</b></p>
                        <hr>
                        <p><b>Total Price</b></p>
                    </div>
                    <div class="box1 text-right">
                        <p><?php echo $res['pname']  ?></p>
                        <p><?php echo $res['aprice'] * $qty ?></p>
                        <p><?php echo $res['aprice'] * $qty - $res['ofprice'] * $qty ?></p>
                       
                        <hr>
                        <p><?php echo $res['ofprice'] * $qty ?></p>
                    </div>
                </div>
                <button class="btn btn-danger">Cancel</button>
                <button class="btn btn-success" name="placeOrder">Place Order</button>
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
                <div class="item">
                    <a href="product.php">
                        <div class="card">
                            <div class="card img-top">
                                <img src="./images/p1.png" alt="" class="img-fluid">
                            </div>
                            <div class="card-body" style="padding:10px">
                                <div class="title">
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
                <div class="item">
                    <a href="product.php">
                        <div class="card">
                            <div class="card img-top">
                                <img src="./images/p2.png" alt="" class="img-fluid">
                            </div>
                            <div class="card-body" style="padding:10px">
                                <div class="title">
                                    <h5>One Plus+</h5>
                                </div>
                                <div class="price pb-2">
                                    <span class="disprice"><s>$60,000</s></span>
                                    <b>$55,000</b>
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
                <div class="item">
                    <a href="product.php">
                        <div class="card">
                            <div class="card img-top">
                                <img src="./images/p4.png" alt="" class="img-fluid">
                            </div>
                            <div class="card-body" style="padding:10px">
                                <div class="title">
                                    <h5>Infinix Hot 8 Play</h5>
                                </div>
                                <div class="price pb-2">
                                    <span class="disprice"><s>$10,000</s></span>
                                    <b>$9,000</b>
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
                <div class="item">
                    <a href="product.php">
                        <div class="card">
                            <div class="card img-top">
                                <img src="./images/p5.png" alt="" class="img-fluid">
                            </div>
                            <div class="card-body" style="padding:10px">
                                <div class="title">
                                    <h5>Infinix Smart 3 Plus</h5>
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

            </div>
        </div>
    </div>
    <!--Top Selling-->
</main>
<script src="./script/cart.js"></script>
<?php include 'footer.php' ?>
