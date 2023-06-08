<?php session_start() ?>
<?php require 'header.php' ?>

<section class="main-content page-content mt-2" id="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="lead breadcumb">
                    <div class="left-content mt-3">
                        <ul>
                            <li><i class="fa fa-home" id="sidebarCollapse" style="cursor:pointer"></i></li>
                            <li>|</li>
                            <li>User</li>
                            <li>|</li>
                            <li>View User</li>
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
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class="bg-dark text-white">
                            <th>Sl.No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>role</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            $viewquery = "select * from reg";
                            $selectquery = mysqli_query($con, $viewquery) or die("query failed");
                            while ($res = mysqli_fetch_assoc($selectquery)) {


                            ?>
                                <tr>
                                    <td><?php echo $res['id']; ?></td>
                                    <td><?php echo $res['name']; ?></td>
                                    <td><?php echo $res['number']; ?></td>
                                    <td><?php echo $res['email']; ?></td>
                                    <td><?php echo $res['role']; ?></td>
                                    <td>
                                        <i class="fa fa-eye" data-toggle="modal" data-target="#view<?php echo $res['id'] ?>"></i>&nbsp;
                                        <i class="fa fa-pen" data-toggle="modal" data-target="#edit<?php echo $res['id'] ?>"></i>&nbsp;
                                        <i class="fa fa-trash" data-toggle="modal" data-target="#delete<?php echo $res['id'] ?>"></i>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <!--View-->
                                <div class="modal fade " id="view<?php echo $res['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">View User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for=""><b>Name</b></label>
                                                        <p><?php echo $res['name'] ?></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for=""><b>Phone</b></label>
                                                        <p><?php echo $res['number'] ?></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for=""><b>Email</b></label>
                                                        <p><?php echo $res['email'] ?></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for=""><b>Role</b></label>
                                                        <p><?php echo $res['role'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--edit-->
                                <div class="modal fade" id="edit<?php echo $res['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="update.php" method="POST">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">

                                                                <input type="hidden" class="form-control" value="<?php echo $res['id'] ?>" name="id">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Name</label>
                                                                <input type="text" class="form-control" value="<?php echo $res['name'] ?>" name="uname">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Number</label>
                                                                <input type="text" class="form-control" value="<?php echo $res['number'] ?>" name="unumber">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Email</label>
                                                                <input type="text" class="form-control" value="<?php echo $res['email'] ?>" name="umail">

                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" name="update" value="save">

                                            </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="delete<?php echo $res['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="delete.php" method="POST">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" id="" value="<?php echo $res['id']; ?>">
                                                    Are you sure want to delete ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <input type="submit" name="delete" id="" class="btn btn-danger" value="Delete">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->

    <!--delete-->

</section>