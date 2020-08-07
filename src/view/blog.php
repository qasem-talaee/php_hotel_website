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
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
	            <h1 class="mb-4 bread">Our Stories</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
            <?php
            while ($row=mysqli_fetch_array($run_blog)){
                $date = $row['date'];
                $url = $row['url'];
                $title = $row['title'];
                $image = $row['image']; ?>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="<?php echo ($base_url); ?>blog-detail/<?php echo ($url); ?>/" class="block-20 rounded" style="background-image: url('<?php echo ($base_url); ?>view/images/<?php echo ($image); ?>');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><?php echo ($date); ?></div>
                            </div>
                            <h3 class="heading"><a href="<?php echo ($base_url); ?>blog-detail/<?php echo ($url); ?>/"><?php echo ($title); ?></a></h3>
                            <a href="<?php echo ($base_url); ?>blog-detail/<?php echo ($url); ?>/" class="btn btn-secondary rounded">More info</a>
                        </div>
                    </div>
                </div>

        <?php    }  ?>

        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>

                  <?php
                  for ($i=1;$i<$count_page;$i++){ ?>
                      <li><a href="<?php echo ($base_url); ?>blog/page/<?php echo ($i); ?>/"><?php echo ($i); ?></a></li>
      <?php       }
                  ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php include ('view/includes/footer.php'); ?>
    
  </body>
</html>