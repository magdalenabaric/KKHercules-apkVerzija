<?php
session_start();

$aid = $_SESSION['u_id'];
?>
<!DOCTYPE html>
<html lang="en">



<body id="page-top">


    <div id="wrapper">

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="user-dashboard.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">Vehicle</li>
                    <li class="breadcrumb-item active">Book Vehicle</li>

                </ol>


                <!--Bookings-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-bus"></i>
                        Available Vehicles
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Vehicle Name</th>
                                        <th>Reg No.</th>
                                        <th>Seats</th>
                                        <th>Driver</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    $ret = "SELECT * FROM tms_vehicle  where   v_status ='Available' "; //get all bookings
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    $cnt = 1;
                                    while ($row = $res->fetch_object()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo $row->v_name; ?></td>
                                            <td><?php echo $row->v_reg_no; ?></td>
                                            <td><?php echo $row->v_pass_no; ?> Passengers</td>
                                            <td><?php echo $row->v_driver; ?></td>
                                            <td>
                                                <a href="user-confirm-booking.php?v_id=<?php echo $row->v_id; ?>" class="btn btn-outline-success"><i class="fa fa-clipboard"></i> Book Vehicle</a>
                                            </td>
                                        </tr>
                                    <?php $cnt = $cnt + 1;
                                    } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">
                        <?php
                        date_default_timezone_set("Africa/Nairobi");
                        echo "Generated At : " . date("h:i:sa");
                        ?>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php include("vendor/inc/footer.php"); ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


</body>

</html>