<?php

$footer = $db->query("SELECT * FROM footer where dil=" . $dil)->fetch(PDO::FETCH_ASSOC);
?>
<footer class="hidden" style="background-color:white;">
<br>
    <div id="footer-container" style="top:10px;">
        <div id="backtotop" class="button-wrap left">
            <div style="color:black;" class="icon-wrap parallax-wrap">
                <div style="color:black;" class="button-icon parallax-element">
                    <i class="fa fa-angle-up"></i>
                </div>
            </div>
            <div class="button-text sticky left" style="color:black;"><span style="color:black;" data-hover="<?php echo $footer['data_hover'] ?>"><?php echo $footer['data_hover'] ?></span></div>
        </div>
        <div class="footer-middle">
            <div class="copyright" style="color:black;"><?php echo date("Y"); ?> <?php echo $footer['copyright'] ?></div>
        </div>
        <div style="color:black;" class="socials-wrap">
            <div style="color:black;" class="socials-icon"><i class="fa fa-share-alt" aria-hidden="true"></i></div>
            <div style="color:black;" class="socials-text"><?php echo $footer['socials_text'] ?></div>
            <ul style="color:black;" class="socials">
                <?php
                $getir = $db->prepare("SELECT * FROM socialmedia");
                $getir->execute();
                while ($rows = $getir->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <li style="color:black;"><span style="color:black;" class="parallax-wrap"><a style="color:black;" class="parallax-element" href="<?php echo $rows['Link']; ?>" target="_blank"><?php echo $rows['Platform']; ?></a></span></li>
                <?php }
                ?>
            </ul>
        </div>

    </div>
</footer>