<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Bookings
            <!--                <small>Control panel</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-12 connectedSortable">
                <!-- Map box -->
                <div class="box box-danger">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools ">
<!--                            <a type="button" class="btn btn-primary btn-sm  pull-right"-->
<!--                               data-toggle="tooltip"-->
<!--                               href="--><?php //echo base_url($_SESSION['USER_TYPE'] . 'hotels/add'); ?><!--" title="Date range">-->
<!--                                <i class="fa fa-plus"></i> Add hotel</a>-->

                        </div>
                        <!-- /. tools -->

                        <h3 class="box-title">

                        </h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Sr.no</th>
                                <th>Booking Id</th>
                                <th>Hotel(Room)</th>
                                <th>Customer</th>
                                <th>Customer Email</th>
                                <th>Rooms</th>
                                <th>In</th>
                                <th>Out</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (!empty($bookings)) {
                                $i=1;
                                foreach ($bookings as $booking) {
                                    ?>
                                    <tr>
                                        <td><?php echo @$i;?></td>
                                        <td><?php echo @$booking['bookingId'];?></td>
                                        <td><?php echo @$booking['hotelId'];?></td>
                                        <td><?php echo @$booking['bookedCustomer'];?></td>
                                        <td><?php echo @$booking['bookedEmail'];?></td>
                                        <td><?php echo @$booking['bookedRooms'];?></td>
                                        <td><?php echo date('jS M, Y',strtotime(@$booking['bookingCheckIn']));?></td>
                                        <td><?php echo date('jS M, Y',strtotime(@$booking['bookingCheckOut']));?></td>

                                    </tr>
                                    <?php
                                    $i++;
                                }
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body-->
                </div>
                <!-- /.box -->
            </section>
            <!--  col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

