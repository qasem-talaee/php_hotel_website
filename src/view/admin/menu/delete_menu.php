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
                            <strong class="card-title">Delete Menu</strong>
                        </div>
                        <div class="card-body text-center">
                            <h1>Are you sure?</h1>
                            <h5>You want to delete <strong><?php echo ($name); ?></strong></h5>
                            <hr>
                            <div class="row">
                                <div class="col-5 container-fluid">
                                    <a class="btn btn-outline-success btn-block" href="<?php echo ($base_url); ?>admin/menu/">No, come back</a>
                                </div>
                                <div class="col-5 container-fluid">
                                    <a class="btn btn-outline-danger btn-block" href="<?php echo ($base_url); ?>admin/menu/delete-action/<?php echo ($id); ?>/">Yes, delete this</a>
                                </div>
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
