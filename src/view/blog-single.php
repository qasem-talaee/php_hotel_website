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

<div class="hero-wrap" style="background-image: url('<?php echo ($base_url); ?>view/images/<?php echo ($image); ?>');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?php echo ($base_url); ?>">Home</a></span> <span class="mr-2"><a href="<?php echo ($base_url); ?>blog/">Blog</a></span> <span>Blog</span></p>
                    <h1 class="mb-4 bread">Blog</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3"><?php echo ($title) ; ?></h2>

                <div class="text-dark">
                    <?php echo ($desc); ?>
                </div>




            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate pl-md-5">

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>
                    <?php
                    while ($row_recent=mysqli_fetch_array($run_recent)){
                        $title = $row_recent['title'];
                        $date = $row_recent['date'];
                        $url = $row_recent['url'];
                        $iamge = $row_recent['image']; ?>

                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(<?php echo ($base_url); ?>view/images/<?php echo ($image); ?>"></a>
                            <div class="text">
                                <h3 class="heading"><a href="<?php echo ($base_url); ?>blog-detail/<?php echo ($url); ?>/"><?php echo ($title); ?></a></h3>
                                <div class="meta">
                                    <div><span class="icon-calendar"></span> <?php echo ($date); ?></div>
                                </div>
                            </div>
                        </div>

              <?php      }
                    ?>

                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <?php
                        for ($i=0;$i<count($tag);$i++){ ?>
                            <a class="tag-cloud-link"><?php echo ($tag[$i]); ?></a>
            <?php            }
                        ?>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
            </div>

        </div>
    </div>
</section> <!-- .section -->

<?php include ('view/includes/footer.php'); ?>

</body>
</html>