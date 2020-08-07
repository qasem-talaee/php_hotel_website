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
                            <strong class="card-title">Edit Room</strong>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" action="<?php echo ($base_url); ?>admin/room/edit/<?php echo ($id); ?>">
                                <input type="hidden" name="id" value="<?php echo ($id); ?>">
                                <div class="form-group">
                                    <label>Room Type</label>
                                    <select class="form-control" name="type">
                                        <?php
                                        while ($row_type = mysqli_fetch_array($run_type)){
                                            $type_id = $row_type['id'];
                                            $type_name = $row_type['name']; ?>
                                            <option <?php if ($type_id == $type){echo ('selected');} ?> value="<?php echo ($type_id); ?>"><?php echo ($type_name); ?></option>
                                        <?php           }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Room Bed</label>
                                    <select class="form-control" name="bed">
                                        <?php
                                        while ($row_bed = mysqli_fetch_array($run_bed)){
                                            $bed_id = $row_bed['id'];
                                            $bed_name = $row_bed['bed']; ?>
                                            <option <?php if ($bed_id == $bed){echo ('selected');} ?> value="<?php echo ($bed_id); ?>"><?php echo ($bed_name); ?></option>
                                        <?php           }
                                        ?>
                                    </select>
                                </div>
                                <p class="bg-warning text-dark">If you don't want to change image, leave below field empty.</p>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?php echo ($base_url); ?>view/images/<?php echo ($image); ?>" class="img-fluid">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input value="<?php echo ($number); ?>" placeholder="Number" type="number" name="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input value="<?php echo ($price); ?>" placeholder="Price per night" step="0.01" type="number" name="price" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input value="<?php echo ($count); ?>" placeholder="Count" type="number" name="count" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input value="<?php echo ($size); ?>" placeholder="Size" type="number" name="size" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input value="<?php echo ($view); ?>" placeholder="View" type="text" name="view" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tag</label>
                                    <p class="bg-warning text-dark">Separate tags with -- </p>
                                    <textarea name="tag" required class="form-control"><?php echo ($tag); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="10" name="desc" class="form-control" id="desc_room"><?php echo ($desc); ?></textarea>
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
<script>
    history.pushState(null, null, '<?php echo ($base_url); ?>admin/room/<?php echo ($id); ?>/');
</script>
