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
                            <strong class="card-title">Menu data</strong>
                        </div>
                        <a class="btn btn-primary" href="<?php echo ($base_url); ?>admin/menu/add/">Add New</a>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row=mysqli_fetch_array($run)){
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $image = $row['image'];
                                    $price = $row['price'];
                                    ?>

                                    <tr>
                                        <td><?php echo ($name); ?></td>
                                        <td><img class="img-fluid" src="<?php echo ($base_url); ?>view/images/<?php echo ($image); ?>" width="20%"></td>
                                        <td><?php echo ($price); ?></td>
                                        <td><a class="btn btn-primary" href="<?php echo ($base_url); ?>admin/menu/edit/<?php echo ($id); ?>/">Edit</a> </td>
                                        <td><a class="btn btn-danger" href="<?php echo ($base_url); ?>admin/menu/delete/<?php echo ($id); ?>/">Delete</a> </td>
                                    </tr>

                                <?php   }
                                ?>


                                </tbody>
                            </table>
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