<?php
$header = $db->query("SELECT * FROM header where dil=" . $dil)->fetch(PDO::FETCH_ASSOC);
?>
<header class="fullscreen-menu">
    <div id="header-container">
        <!-- Logo -->
        <div id="logo" class="hide-ball disable-drag">
            <a class="ajax-link" data-type="page-transition" href="index.php">
                <img class="black-logo" src="<?php echo $header['black_logo']; ?>" alt="">
                <img class="white-logo" src="<?php echo $header['white_logo']; ?>" alt="">
            </a>
        </div>
        <!--/Logo -->
        <!-- Navigation -->
        <nav>
            <div class="nav-height">
                <div class="outer">
                    <div class="inner">
                        <ul data-breakpoint="10025" class="flexnav">
                            <li class="link menu-timeline"><a class="" href="index.php">
                                    <div class="before-span"><span data-hover="<?php echo $header['data_hover_home']; ?>"><?php echo $header['data_hover_home']; ?></span></div>
                                </a>

                            </li>
                            <li class="link menu-timeline"><a class="ajax-link active" data-type="page-transition" href="about.php?brideroom">
                                    <div class="before-span"><span data-hover="<?php echo $header['data_hover_bride']; ?>"><?php echo $header['data_hover_bride']; ?></span></div>
                                </a></li>
                            <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition" href="about.php?photoroom">
                                    <div class="before-span"><span data-hover="<?php echo $header['data_hover_photo']; ?>"><?php echo $header['data_hover_photo']; ?></span>
                                    </div>
                                </a></li>

                            <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition">
                                    <div class="before-span"><span data-hover="<?php echo $header['data_hover_portfolyo']; ?>"><?php echo $header['data_hover_portfolyo']; ?></span>
                                    </div>
                                </a>
                                <ul>
                                    <li><a class="ajax-link active" href="contents.php?floral" data-type="page-transition"><?php echo $header['data_hover_floral']; ?></a></li>
                                    <li><a class="ajax-link" href="contents.php?bloom" data-type="page-transition"><?php echo $header['data_hover_bloom']; ?></a></li>
                                    <li><a class="ajax-link" href="contents.php?lemontrees" data-type="page-transition"><?php echo $header['data_hover_lemon']; ?></a></li>
                                </ul>
                            </li>
                            <li class="link menu-timeline"><a class="ajax-link" data-type="page-transition" href="contact.php">
                                    <div class="before-span"><span data-hover="<?php echo $header['data_hover_iletisim']; ?>"><?php echo $header['data_hover_iletisim']; ?></span>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!--/Navigation -->


        <!-- Menu Burger -->
        <div class="button-wrap right menu burger-lines">
            <div class="icon-wrap parallax-wrap">
                <div class="button-icon parallax-element">
                    <div id="burger-wrapper">
                        <div id="menu-burger">
                            <span style="color:white;box-shadow: 0em 0em 0.4em black, 0em 0em 0.1em black"></span>
                            <span style="color:white;box-shadow: 0em 0em 0.4em black, 0em 0em 0.1em black"></span>
                            <span style="color:white;box-shadow: 0em 0em 0.4em black, 0em 0em 0.1em black"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-text sticky right"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;padding-left: 5px;" data-hover="Menu">Menu</span></div>
        </div>
        <div class="button-wrap right menu burger-lines" style="margin-right: 75px;">
            <div class="language" style="display:block">
                <?php
                if ($dil == 1) {
                    echo ' <a href="index.php?dildegistir=2" style="color:red"><div class="button-text right" style="width: 50px; position: absolute;left: 0px;top: 0px;"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;width: 50px;text-align:center;margin-left: 5px;" data-hover="English">EN</span></div></a>';
                } else  if ($dil == 2) {
                    echo ' <a href="index.php?dildegistir=1" style="color:red"><div class="button-text right" style="width: 50px; position: absolute;left: 0px;top: 0px;"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;width: 50px;text-align:center;margin-left: 5px;" data-hover="Türkçe">TR</span></div></a>';
                } else if ($dil == 3) {
                    echo ' <a href="index.php?dildegistir=2" style="color:red"><div class="button-text right" style="width: 50px; position: absolute;left: 0px;top: 0px;"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;width: 50px;text-align:center;margin-left: 5px;" data-hover="English">EN</span></div></a>';
                }
                ?>
            </div>
            <div class="language_mobile" style="display:none">
                <?php
                if ($dil == 1) {
                    echo ' <a href="index.php?dildegistir=2" style="color:red"><div class="button-text right" style="width: 50px; position: absolute;left: 0px;top: 0px;"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;width: 50px;text-align:center;margin-left: 5px;" data-hover="English">EN</span></div></a>';
                } else  if ($dil == 2) {
                    echo ' <a href="index.php?dildegistir=1" style="color:red"><div class="button-text right" style="width: 50px; position: absolute;left: 0px;top: 0px;"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;width: 50px;text-align:center;margin-left: 5px;" data-hover="Türkçe">TR</span></div></a>';
                } else if ($dil == 3) {
                    echo ' <a href="index.php?dildegistir=2" style="color:red"><div class="button-text right" style="width: 50px; position: absolute;left: 0px;top: 0px;"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;width: 50px;text-align:center;margin-left: 5px;" data-hover="English">EN</span></div></a>';
                }
                ?>
            </div>
        </div>
        <div class="button-wrap right menu burger-lines" style="margin-right: 135px;">
            <div class="language" style="display:block">
                <?php
                if ($dil != 3) {
                    echo ' <a href="index.php?dildegistir=3" style="color:red"><div class="button-text right" style="width: 50px; position: absolute;left: 0px;top: 0px;"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;width: 50px;text-align:center;margin-left: 5px;" data-hover="German">DE</span></div></a>';
                } else  if ($dil == 3) {
                    echo ' <a href="index.php?dildegistir=1" style="color:red"><div class="button-text right" style="width: 50px; position: absolute;left: 0px;top: 0px;"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;width: 50px;text-align:center;margin-left: 5px;" data-hover="Türkçe">TR</span></div></a>';
                }
                ?>

            </div>
            <div class="language_mobile" style="display:none">
                <?php
                if ($dil != 3) {
                    echo ' <a href="index.php?dildegistir=3" style="color:red"><div class="button-text right" style="width: 50px; position: absolute;left: 0px;top: 0px;"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;width: 50px;text-align:center;margin-left: 5px;" data-hover="German">DE</span></div></a>';
                } else  if ($dil == 3) {
                    echo ' <a href="index.php?dildegistir=1" style="color:red"><div class="button-text right" style="width: 50px; position: absolute;left: 0px;top: 0px;"><span style="color:white;text-shadow: 0em 0em 0.4em black, 0em 0em 0.4em black;width: 50px;text-align:center;margin-left: 5px;" data-hover="Türkçe">TR</span></div></a>';
                }
                ?>

            </div>
        </div>
        <!--/Menu Burger -->

    </div>
</header>