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
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo ($base_url); ?>">Home</a></span> <span>Restaurant</span></p>
	            <h1 class="mb-4 bread">Rooms</h1>
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
            <h2 class="mb-4">Hotel Master's Rooms</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
                <?php
                while ($row=mysqli_fetch_array($run_blog)){
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
                                </div>
                            </div>
                        </div>
                    </div>

      <?php          }
                ?>

    		</div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>

                            <?php
                            for ($i=1;$i<$count_page;$i++){ ?>
                                <li><a href="<?php echo ($base_url); ?>rooms/page/<?php echo ($i); ?>/"><?php echo ($i); ?></a></li>
                            <?php       }
                            ?>
                        </ul>
                    </div>
                </div>
            </div><br>
    	</div>
    </section>


    <?php include ('view/includes/footer.php'); ?>
    
  </body>
</html>