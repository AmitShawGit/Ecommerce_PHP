<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CACA</title>
</head>

<body>
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
                                <li>View Product</li>
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
            <div class="container-fluid card mt-2">
                
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="bg-dark text-white">
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Actual Price</th>
                                        
                                        <th>Discount</th>
                                        <th>Offer Price</th>
                                       
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $vale = "select * from orders";
                                        $viewquery = mysqli_query($con,$vale);
                                        while($res = mysqli_fetch_assoc($viewquery)){
                                        $id = $res['id'];
                                        $pname = $res['pname'];
                                        $aPrice = $res['aPrice'];
                                        $disprice = $res['disprice'];
                                        $saleprice = $res['saleprice'];

                                        ?>
                                        <tr>
                                            <td><?php echo $id ?></td>
                                            <td><?php echo $pname ?></td>
                                            <td><?php echo $aPrice ?></td>
                                            <td><?php echo $disprice ?></td>
                                            <td><?php echo $saleprice ?></td>
                                            
                                            <td>
                                            <i class="fa fa-eye"></i>
                                                <i class="fa fa-pen"></i>
                                                
                                                <i class="fa fa-trash"></i>
                                        
                                        </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
         

            </div>
    </section>



</body>

</html>