<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>

    <title>Ela Admin - HTML5 Admin Template</title>
    <?php include ('view/admin/includes/head1.php'); ?>

</head>

<body>
<!-- Left Panel -->
<?php include ('view/admin/includes/left_panel.php'); ?>
<!-- /#left-panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <?php include ('view/admin/includes/header.php'); ?>
    <!-- /#header -->
    <!-- Content -->
    <div class="content">


        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Room type data</strong>
                        </div>
                        <a class="btn btn-primary" href="<?php echo ($base_url); ?>admin/room/add/">Add New</a>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Image</th>
                                    <th>Number</th>
                                    <th>Price</th>
                                    <th>Bed</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row=mysqli_fetch_array($run)){
                                    $id = $row['id'];
                                    $type = $row['type'];
                                    $image = $row['image'];
                                    $number = $row['number'];
                                    $price = $row['price'];
                                    $bed = $row['bed'];
                                    ###
                                    $get_type = "select * from room_type where id=$type";
                                    $run_type = mysqli_query($con, $get_type);
                                    $row_type = mysqli_fetch_array($run_type);
                                    $type_name = $row_type['name'];
                                    ####
                                    $get_bed = "select * from bed where id=$bed";
                                    $run_bed = mysqli_query($con, $get_bed);
                                    $row_bed = mysqli_fetch_array($run_bed);
                                    $bed_count = $row_bed['bed'];
                                    ?>

                                    <tr>
                                        <td><?php echo ($type_name); ?></td>
                                        <td><img src="<?php echo ($base_url); ?>view/images/<?php echo ($image); ?>" width="20%"></td>
                                        <td><?php echo ($number); ?></td>
                                        <td><?php echo ($price); ?></td>
                                        <td><?php echo ($bed_count); ?></td>
                                        <td><a class="btn btn-primary" href="<?php echo ($base_url); ?>admin/room/edit/<?php echo ($id); ?>/">Edit</a> </td>
                                        <td><a class="btn btn-danger" href="<?php echo ($base_url); ?>admin/room/delete/<?php echo ($id); ?>/">Delete</a> </td>
                                    </tr>

                                <?php   }
                                ?>


                                </tbody>
                            </table>
                            <div class="text-center">
                                <?php
                                for ($i=1;$i<$count_page;$i++){ ?>
                                    <a class="btn btn-outline-secondary" href="<?php echo ($base_url); ?>admin/user-contact/page/<?php echo ($i); ?>/"><?php echo ($i); ?></a>
                                <?php      }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->


    </div>
    <!-- /.content -->
    <div class="clearfix"></div>
    <!-- Footer -->
    <?php include ('view/admin/includes/footer.php'); ?>
    <!--Local Stuff-->
</body>
</html>
