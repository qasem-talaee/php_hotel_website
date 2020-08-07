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
                            <strong class="card-title">Add User</strong>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group">
                                    <input placeholder="Name" type="text" name="name" class="form-control" value="<?php echo ($name); ?>" required>
                                </div>
                                <div class="form-group">
                                    <input placeholder="Email" type="email" name="email" class="form-control" value="<?php echo ($email); ?>" required>
                                </div>
                                <p class="bg-warning text-dark">If you don't want to change password, leave below field empty.</p>
                                <div class="form-group">
                                    <input placeholder="Password" type="password" name="password" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Password Again" type="password" name="password_again" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="admin" <?php if ($status == 'admin'){echo ('selected');} ?>>Admin</option>
                                        <option value="user" <?php if ($status == 'user'){echo ('selected');} ?>>User</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Edit" class="btn btn-outline-primary">
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
