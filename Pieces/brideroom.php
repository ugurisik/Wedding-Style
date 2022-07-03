<?php

$getbrideroom = $db->query("SELECT * from brideroom where dil=" . $dil)->fetch(PDO::FETCH_ASSOC);
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
                    <img src="images/brideroom-about.jpg" style=" filter: grayscale(40%);">
                    <div class="parallax-image-content">
                        <div class="outer">
                            <div class="inner">
                                <h4 style="text-shadow: 0em 0em 0.2em black, 0em 0em 0.2em black"><?php echo $getbrideroom['has_mask_title']; ?></h4>
                                <h4 style="text-shadow: 0em 0em 0.2em black, 0em 0em 0.2em black"><?php echo $getbrideroom['has_mask_subtitle']; ?></h4>
                                <h4 style="text-shadow: 0em 0em 0.2em black, 0em 0em 0.2em black"><?php echo $getbrideroom['has_mask_subtitle_2']; ?></h4>
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
            <!-- Row -->
            <div class="content-row dark-section row_padding_top row_padding_bottom" data-bgcolor="#222">
            <div class="one_half has-animation" data-delay="250">
                    <h1 class="has-mask"><?php echo $getbrideroom['has_mask_members']; ?></h1>
                    <hr>
                    <hr class="white-line has-animation">
                    <hr>
                    <ul id="team-members-list" data-fx="1">
                        <?php
                        $services = $db->prepare("SELECT * FROM members where EkipID=" . $getbrideroom['has_mask_members_id']);
                        $services->execute();
                        while ($rows = $services->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <li class="hide-ball">
                                
                                <div class="team-member has-animation"><?php echo $rows['Adi'] ?></div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                
                                  
                             
                                
                                <div class="one_half last" style="top: 30%" data-delay="300">
                                    <img style="width:100%" src="images/team-members.jpg" alt="">
                                </div>
               
                <!--
                     <div class="third" id="img_teammember" style="max-width:400px;position: absolute;bottom: 0;left: 0;right: 0;margin: auto;top: 30%;padding-left: 20%;">
                  
                </div>
                    <div class="one_third">
                        <h1 class="has-mask"><?php echo $getbrideroom['has_mask_members']; ?></h1>
                        <hr>
                        <hr class="white-line has-animation">
                        <hr>
                        <ul id="team-members-list" data-fx="1">
                            <?php
                            $services = $db->prepare("SELECT * FROM members where EkipID=" . $getbrideroom['has_mask_members_id']);
                            $services->execute();
                            while ($rows = $services->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <li class="hide-ball" data-img="<?php echo $rows['ResimYolu'] ?>">
                                    <div class="team-member has-animation"><?php echo $rows['Adi'] ?></div>
                                </li>
                            <?php } ?>
                    </ul>
                    </div> -->

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