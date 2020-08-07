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
                            <strong class="card-title">Add Blog</strong>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="<?php echo ($base_url); ?>admin/blog/add/">
                                <div class="form-group">
                                    <input placeholder="Title" type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Url Freindly" type="text" name="url" class="form-control" required>
                                </div>
                                <p class="bg-warning text-dark">Separate tags with --</p>
                                <div class="form-group">
                                    <label>Tag</label>
                                    <textarea name="tag" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="10" name="desc" class="form-control" id="desc_blog"></textarea>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Add" class="btn btn-outline-primary">
                                </div>
                            </form>
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
