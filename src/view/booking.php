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
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo ($base_url); ?>">Home</a></span> <span>Search for rooms</span></p>
                    <h1 class="mb-4 bread">Search for Rooms</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-room">
    <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Harbor Lights Rooms</span>
                <?php
                 $get_type_name = "select * from room_type where id=$room_type";
                 $run_type_name = mysqli_query($con, $get_type_name);
                 $row_type_name = mysqli_fetch_array($run_type_name);
                 $room_type_head = $row_type_name['name'];
                ?>
                <h2 class="mb-4">Rooms for : from <?php echo ($start_date); ?> until <?php echo ($end_date); ?> of <?php echo ($room_type_head); ?> with <?php echo ($bed_form); ?> bed</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <?php
            if ($exist == 0){ ?>
                <?php
                while ($row1=mysqli_fetch_array($run_room_exist)){
                    $id = $row1['id'];
                    $begin = new DateTime($start_date);
                    $end = new DateTime($end_date);
                    $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
                    $flag_exist = 0;
                    foreach($daterange as $date){
                        $sql_date = $date->format("Y-m-d");
                        $get_exist_date = "select * from booking where room=$id AND '$sql_date' between start_date AND end_date";
                        $run_exist_date = mysqli_query($con, $get_exist_date);
                        $count_exist_date = mysqli_num_rows($run_exist_date);
                        if($count_exist_date != 0){
                            $flag_exist = 1;
                            break;
                        }
                    }
                    if ($flag_exist == 0){
                        $get_room = "select * from room where id=$id";
                        $run_room = mysqli_query($con, $get_room);
                        while ($row=mysqli_fetch_array($run_room)){
                            $image = $row['image'];
                            $type = $row['type'];
                            $bed = $row['bed'];
                            $price = $row['price'];
                            $number = $row['number'];
                            ####
                            $get_type = "select * from room_type where id=$type";
                            $run_type = mysqli_query($con, $get_type);
                            $row_type = mysqli_fetch_array($run_type);
                            $type_name = $row_type['name'];
                            $star = $row_type['star'];
                            ####
                            $get_bed = "select * from bed where id=$bed";
                            $run_bed = mysqli_query($con, $get_bed);
                            $row_bed = mysqli_fetch_array($run_bed);
                            $count_bed = $row_bed['bed']; ?>

                            <div class="col-lg-6">
                                <div class="room-wrap d-md-flex ftco-animate">
                                    <a href="<?php echo ($base_url); ?>room-detail/<?php echo ($number); ?>/" class="img" style="background-image: url(<?php echo ($base_url); ?>view/images/room-6.jpg);"></a>
                                    <div class="half left-arrow d-flex align-items-center">
                                        <div class="text p-4 text-center">
                                            <p class="star mb-0"><?php for ($i=0;$i<$star;$i++){echo ('<span class="ion-ios-star"></span>');} ?></p>
                                            <p class="mb-0"><span class="price mr-1">$<?php echo ($price); ?></span> <span class="per">per night</span></p>
                                            <h4 class="mb-3"><?php echo ($count_bed); ?> Beds</h4>
                                            <h3 class="mb-3"><?php echo ($type_name); ?></h3>
                                            <p class="pt-1"><a href="<?php echo ($base_url); ?>room-detail/<?php echo ($number); ?>/" class="btn-custom px-3 py-2 rounded">View Details <span class="icon-long-arrow-right"></span></a></p>
                                            <p class="pt-1"><a href="<?php echo ($base_url); ?>book-room/<?php echo ($start_date); ?>/<?php echo ($end_date); ?>/<?php echo ($id); ?>/<?php echo ($room_type); ?>/<?php echo ($bed_form); ?>/" class="btn-custom px-3 py-2 rounded">Book Room <span class="icon-long-arrow-right"></span></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php          }
                   }else{ ?>
                        <div class="container text-center">
                            <h1 class="text-center">No Room Found!</h1>
                        </div>
                <?php  }  }    }else{ ?>
           <div class="container text-center">
               <h1 class="text-center">No Room Found!</h1>
           </div>
        <?php   }
            ?>

    </div>
</section><br>


<?php include ('view/includes/footer.php'); ?>

</body>
</html>