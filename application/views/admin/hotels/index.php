<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hotels
            <!--<small>Control panel</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Hotels</li>
        </ol>
    </section>

    <!-- Main conten7799456159t -->
    <section class="content">
        <!-- Main row -->
        <?php echo getMessage(); ?>
        <div class="row">
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-12 connectedSortable">
                <!-- Map box -->
                <div class="box box-danger">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools ">
                            <a type="button" class="btn btn-primary btn-sm  pull-right"
                               data-toggle="tooltip"
                               href="<?php echo base_url($_SESSION['USER_TYPE'] . '/hotels/add'); ?>"
                               title="Add Hotel">
                                <i class="fa fa-plus"></i> Add hotel</a>
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
                                <th>Hotel Code</th>
                                <th>Hotel Name</th>
                                <th>No.of rooms</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (!empty($hotels)) {
                                $i = 1;
                                foreach ($hotels as $hotel) {
                                    ?>
                                    <tr>
                                        <td><?php
                                            echo $i;
                                            ?></td>
                                        <td><?php
                                            echo !empty($hotel['hotelId']) ? $hotel['hotelId'] : '';
                                            ?></td>
                                        <td><?php
                                            echo !empty($hotel['hotelName']) ? $hotel['hotelName'] : '';
                                            ?></td>
                                        <td><?php
                                            echo !empty($hotel['hotelRooms']) ? $hotel['hotelRooms'] : '';
                                            ?></td>
                                        <td></td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">
                                        <div class="text-danger text-center">Hotels doesn't exists !</div>
                                    </td>
                                </tr>
                                <?php
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
        