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
                            <strong class="card-title">Replay User Contact</strong>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group text-dark">
                                    <p>Date : <?php echo ($date); ?></p>
                                </div>
                                <hr>
                                <div class="form-group text-dark">
                                    <p>Name : <?php echo ($name); ?></p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input value="<?php echo ($email); ?>" type="email" name="email" class="form-control" required>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input name="phone" class="form-control" type="text" value="<?php echo ($phone); ?>">
                                </div>
                                <hr>
                                <div class="form-group text-dark">
                                    <p>Subject : <?php echo ($subject); ?></p>
                                </div>
                                <hr>
                                <div class="form-group text-dark">
                                    <p>Message : <?php echo ($message); ?></p>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Replay message</label>
                                    <textarea name="replay" class="form-control" required></textarea>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Send" class="btn btn-outline-primary">
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
