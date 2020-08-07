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
	            <h1 class="mb-4 bread">Restaurant</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
      			<div class="single-slider-resto mb-4 mb-md-0 owl-carousel">
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url(<?php echo ($base_url); ?>view/images/room-4.jpg);"></div>
      				</div>
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url(<?php echo ($base_url); ?>view/images/room-5.jpg);"></div>
      				</div>
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url(<?php echo ($base_url); ?>view/images/room-6.jpg);"></div>
      				</div>
      			</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">About Harbor Lights Hotel</span>
	            <h2 class="mb-4">Harbor Lights Hotel Restaurants</h2>
	          </div>
	          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	          <p><a href="#" class="btn btn-secondary rounded">More info</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-menu bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Harborlights Resto Menu</span>
            <h2>Our Specialties</h2>
          </div>
        </div>
				<div class="row">
                    <?php
                    while ($row=mysqli_fetch_array($run)){
                        $image = $row['image'];
                        $name = $row['name'];
                        $price = $row['price'];
                        $desc = $row['desc_food']; ?>

                        <div class="col-lg-6 col-xl-6 d-flex">
                            <div class="pricing-entry rounded d-flex ftco-animate">
                                <div class="img" style="background-image: url(<?php echo ($base_url); ?>view/images/<?php echo ($image); ?>"></div>
                                <div class="desc p-4">
                                    <div class="d-md-flex text align-items-start">
                                        <h3><span><?php echo ($name); ?></span></h3>
                                        <span class="price">$<?php echo ($price); ?></span>
                                    </div>
                                    <div class="d-block">
                                        <p><?php echo ($desc); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

           <?php         }
                    ?>

        </div>
			</div>
		</section>

  <?php include ('view/includes/footer.php'); ?>
    
  </body>
</html>