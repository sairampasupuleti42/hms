<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Customers
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
                                <th>Customer Id</th>
                                <th>Name of Customer</th>
                                <th>Email</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (!empty($customers)) {
                                $i=1;
                                foreach ($customers as $customer) {
                                    ?>
                                    <tr>
                                        <td><?php
                                            echo $i;
                                            ?></td>
                                        <td><?php
                                            echo @$customer['customerId'];
                                            ?></td>
                                        <td><?php
                                            echo @$customer['customerName'];
                                            ?></td>
                                        <td><?php
                                            echo @$customer['customerEmail'];
                                            ?></td>

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
        