<!DOCTYPE html>
<html lang="en">
<head>
    <title>Harborlights - Free Bootstrap 4 Template by Colorlib</title>
    <?php include ('view/includes/head.php'); ?>
</head>
<body>

<?php include ('view/includes/nav.php'); ?>

<?php include ('view/includes/header.php'); ?>

<?php include ('view/includes/booking_form.php'); ?>

<div class="hero-wrap" style="background-image: url('<?php echo ($base_url); ?>view/images/bg_3.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo ($base_url); ?>">Home</a></span> <span>Book rooms</span></p>
                    <h1 class="mb-4 bread">Book Rooms</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-room" id="info">
    <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Harbor Lights Rooms</span>
                <h2 class="mb-4">Book Room</h2>
            </div>
        </div>
        <div class="container" >
            <?php if ($flag_book == 2){ ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4 class="text-center">Problem!</h4>
                    <p class="text-center">Please try again later.</p>
                </div>
            <?php      }  ?>
            <?php if ($flag_book==1){ ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4 class="text-center">Booking successfully.</h4>
                    <h2 class="text-center">Your key is : <?php echo ($key_num); ?></h2>
                    <p class="text-center">Please write down the key.</p>
                </div>
            <?php      }  ?>
        </div>
        <div class="row container-fluid justify-content-center">
            <div class="col-md-12">
                <form method="post">
                    <div class="form-group">
                        <label>Room information</label>
                        <?php
                        $get_type = "select * from room_type where id=$type_get";
                        $run_type = mysqli_query($con, $get_type);
                        $row_type = mysqli_fetch_array($run_type);
                        $type_name = $row_type['name'];
                        ?>
                        <h2><?php echo ($type_name); ?> with <?php echo ($bed_get); ?> Bed(s)</h2>
                    </div>
                    <div class="form-group">
                        <label>Check-in date</label>
                        <input value="<?php echo ($start_date); ?>" class="form-control" type="date" name="start_date" placeholder="Check-out date">
                    </div>
                    <div class="form-group">
                        <label>Check-out date</label>
                        <input value="<?php echo ($end_date); ?>" class="form-control" type="date" name="end_date" placeholder="Check-out date">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="phone" placeholder="Phone" required>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="submit" value="Book" class="btn btn-primary py-5 py-md-3 px-4 align-self-stretch d-block">
                    </div>
                </form>
            </div>
        </div>
</section><br>


<?php include ('view/includes/footer.php'); ?>

</body>
</html>