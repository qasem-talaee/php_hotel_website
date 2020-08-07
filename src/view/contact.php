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
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo ($base_url); ?>">Home</a></span> <span>Contact Us</span></p>
	            <h1 class="mb-4 bread">Contact Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light" >
      <div class="container">
        <div class="row d-flex mb-5 contact-info" id="contact">

          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info rounded bg-white p-4">
	            <p><span>Address:</span> <?php echo ($address); ?></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info rounded bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://<?php echo ($phone); ?>"><?php echo ($phone); ?></a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info rounded bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:<?php echo ($email); ?>"><?php echo ($email); ?></a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info rounded bg-white p-4">
	            <p><span>Website</span> <a href="http://<?php echo ($website); ?>"><?php echo ($website); ?></a></p>
	          </div>
          </div>
        </div>
          <div class="container">
              <?php if ($flag == 1){ ?>
                  <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <h4 class="text-center">The information is imperfect.</h4>
                      <p class="text-center">Please insert your informations.</p>
                  </div>
        <?php      }  ?>
              <?php if ($flag == 2){ ?>
                  <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <h4 class="text-center">Problem!</h4>
                      <p class="text-center">Please try again later.</p>
                  </div>
              <?php      }  ?>
              <?php if ($flag_send==1){ ?>
                  <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <h4 class="text-center">Send successfully.</h4>
                      <p class="text-center">Your message send successfully.we call you soon.Thanks!</p>
                  </div>
              <?php      }  ?>
          </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="<?php echo ($base_url); ?>contact/" class="bg-white p-5 contact-form" method="post">
              <div class="form-group">
                  <span class="text-danger">*</span>
                <input type="text" class="form-control" placeholder="Your Name" name="name" value="<?php echo ($name_form); ?>">
                  <span class="bg-danger text-light"><?php echo ($name_err); ?></span>
              </div>
              <div class="form-group">
                  <span class="text-danger">*</span>
                <input type="text" class="form-control" placeholder="Your Email" name="email" value="<?php echo ($email_form); ?>">
                  <span class="bg-danger text-light"><?php echo ($email_err); ?></span>
              </div>
              <div class="form-group">
                  <span class="text-danger">*</span>
                <input type="text" class="form-control" placeholder="Subject" name="subject" value="<?php echo ($subject); ?>">
                  <span class="bg-danger text-light"><?php echo ($subject_err); ?></span>
              </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo ($phone_form); ?>">
                </div>
              <div class="form-group">
                  <span class="text-danger">*</span>
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"><?php echo ($message); ?></textarea>
                  <span class="bg-danger text-light"><?php echo ($message_err); ?></span>
              </div>
              <div class="form-group">
                <input name="submit" type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>


    <?php include ('view/includes/footer.php'); ?>
    
  </body>
</html>