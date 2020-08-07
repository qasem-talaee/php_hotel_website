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
                            <strong class="card-title">User contacts data</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Replay</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row=mysqli_fetch_array($run)){
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $email = $row['email'];
                                    $subject = $row['subject'];
                                    $date = $row['date'];
                                    $status = $row['status'];
                                    ?>

                                    <tr>
                                        <td><?php echo ($name); ?></td>
                                        <td><?php echo ($email); ?></td>
                                        <td><?php echo ($subject); ?></td>
                                        <td><?php echo ($date); ?></td>
                                        <td>
                                            <?php
                                            if ($status == 1){
                                                echo ('<img src="'.$base_url.'view/admin/images/ok.png">');
                                            }else{
                                                echo ('<img src="'.$base_url.'view/admin/images/no.jpg">');
                                            }
                                            ?>
                                        </td>
                                        <td><a class="btn btn-primary" href="<?php echo ($base_url); ?>admin/user-contact/replay/<?php echo ($id); ?>/">Replay</a> </td>
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
