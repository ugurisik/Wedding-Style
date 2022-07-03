<?php
$getbrideroom = $db->query("SELECT * from photoroom where dil=" . $dil)->fetch(PDO::FETCH_ASSOC);
?>
<div id="main">
    <!-- Hero Section -->
    <div id="hero">
        <div id="hero-styles">
            <div id="hero-caption" class="parallax-scroll-caption inline-title">
                <div class="inner">
                    <h5 class="hero-subtitle"><span><?php echo $getbrideroom['hero_subtitle']; ?></span></h5>
                    <h1 class="hero-title"><span><?php echo $getbrideroom['hero_title']; ?></span></h1>
                </div>
            </div>
        </div>
    </div>
    <!--/Hero Section -->


    <!-- Main Content -->
    <div id="main-content">
        <!-- Main Page Content -->
        <div id="main-page-content">

            <!-- Row -->
            <div class="content-row full dark-section" data-bgcolor="#171717">

                <figure class="has-parallax has-animation has-scale-vertical" data-delay="100">
                    <img src="images/photoroom-about.jpg" style=" filter: grayscale(40%);">
                    <div class="parallax-image-content">
                        <div class="outer">
                            <div class="inner" style="padding:10px;">
                                <h4 style="text-shadow: 0em 0em 0.1em black"><?php echo $getbrideroom['has_mask_title']; ?></h4>
                                <h4 style="text-shadow: 0em 0em 0.1em black"><?php echo $getbrideroom['has_mask_subtitle']; ?></h4>
                                <h4 style="text-shadow: 0em 0em 0.1em black"><?php echo $getbrideroom['has_mask_subtitle_2']; ?></h4>
                            </div>
                        </div>
                    </div>
                </figure>

            </div>
            <!--/Row -->


            <!-- Row -->
            <div class="content-row row_padding_top row_padding_bottom dark-section" data-bgcolor="#171717">

                <h1 class="has-mask"><?php echo $getbrideroom['has_mask_services']; ?></h1>

                <hr>
                <hr class="white-line has-animation">
                <hr>

                <dl class="accordion has-animation">
                    <?php
                    $services = $db->prepare("SELECT * FROM services where Dil=$dil and ServicesID=" . $getbrideroom['has_mask_services_id']);
                    $services->execute();
                    while ($rows = $services->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <dt>
                            <span class="link"><?php echo $rows['link'] ?></span>
                            <div class="acc-icon-wrap parallax-wrap">
                                <div class="acc-button-icon parallax-element">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </dt>
                        <dd class="accordion-content"><?php echo $rows['accordion_content'] ?></dd>
                    <?php } ?>
                </dl>

            </div>
            <!--/Row -->






        </div>
        <!--/Main Page Content -->


        <!-- Page Navigation -->
        <div id="page-nav">
            <div class="page-nav-wrap">
                <div class="page-nav-caption">
                    <div class="inner">
                        <a class="page-title next-ajax-link-page" data-type="page-transition" data-firstline="Bize" data-secondline="Ulaşın" href="contact.php">
                            <div class="next-hero-subtitle"><span><?php echo $getbrideroom['next_hero_subtitle']; ?></span></div>
                            <div class="next-hero-title"><span><?php echo $getbrideroom['next_hero_title']; ?></span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/Page Navigation -->

    </div>
    <!--/Main Content -->

</div>