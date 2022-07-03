<?php include "database.php";
session_start();
if (isset($_SESSION['dil'])) {
	$dil = $_SESSION['dil'];
} else {
	$_SESSION['dil'] = 1;
}
$dil = $_SESSION['dil'];
$get = $db->query("SELECT * from contact where Dil=" . $dil)->fetch(PDO::FETCH_ASSOC);

$method = $_SERVER['REQUEST_METHOD'];
$successsend = "bos";
if ($method == "POST") {
	if ($_POST['sendmessage']) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$comments = $_POST['comments'];


		$ekle = $db->prepare("INSERT INTO mail SET Name=?,PhoneNumber=?,MailAddress=?,Message=?");

		if ($ekle->execute(array($name, $phone, $email, $comments))) {
			$successsend = "true";
		} else {
			$successsend = "false";
		}
	}
}


?>
<!DOCTYPE html>
<html lang="tr">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'code_here', 'auto');
		ga('send', 'pageview');
	</script>

	<title>Brideroom</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />
	<link rel="icon" type="image/ico" href="favicon.ico" />
	<link href="style.css" rel="stylesheet" />
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">


	<style>
		.alert {
			padding: 15px;
			margin-bottom: 20px;
			border-radius: 4px;
			color: #fff;
			text-transform: uppercase;
			font-size: 12px
		}

		.alert_info {
			background-color: #4285f4;
			border: 2px solid #4285f4
		}

		button.close {
			-webkit-appearance: none;
			padding: 0;
			cursor: pointer;
			background: 0 0;
			border: 0
		}

		.close {
			font-size: 20px;
			color: #fff;
			opacity: 0.9;
			font-weight: normal
		}

		.alert_success {
			background-color: #09c97f;
			border: 2px solid #09c97f
		}

		.alert_warning {
			background-color: #f8b15d;
			border: 2px solid #f8b15d
		}

		.alert_error {
			background-color: #f95668;
			border: 2px solid #f95668
		}

		.fade_info {
			background-color: #d9e6fb;
			border: 1px solid #4285f4
		}

		.fade_info .close {
			color: #4285f4
		}

		.fade_info strong {
			color: #4285f4
		}

		.fade_success {
			background-color: #c9ffe5;
			border: 1px solid #09c97f
		}

		.fade_success .close {
			color: #09c97f
		}

		.fade_success strong {
			color: #09c97f
		}

		.fade_warning {
			background-color: #fff0cc;
			border: 1px solid #f8b15d
		}

		.fade_warning .close {
			color: #f8b15d
		}

		.fade_warning strong {
			color: #f8b15d
		}

		.fade_error {
			background-color: #ffdbdb;
			border: 1px solid #f95668
		}

		.fade_error .close {
			color: #f95668
		}

		.fade_error strong {
			color: #f95668
		}
	</style>
</head>

<body class="hidden hidden-ball" data-primary-color="#ff0000">
	<main>
		<!-- Preloader -->
		<?php include "Pieces/preloader.php"; ?>
		<!--/Preloader -->
		<div class="cd-index cd-main-content">
			<!-- Page Content -->
			<div id="page-content" class="" data-bgcolor="#fff">
				<!-- Header -->
				<?php include "Pieces/header.php"; ?>
				<!--/Header -->
				<!-- Content Scroll -->
				<div id="content-scroll">
					<!-- Main -->
					<div id="main">
						<!-- Hero Section -->
						<!--/Hero Section -->
						<!-- Main Content -->
						<div id="main-content">
							<!-- Main Page Content -->
							<div id="main-page-content">
								<div class="content-row light-section full row_padding_left row_padding_right" data-bgcolor="#fff">
									<hr class="white-line has-animation" style="margin-top:85px">

									<div><iframe style="filter: brightness(0.40);filter: grayscale(100%);background-color: rgb(229, 227, 223);position: relative;top: 0%;left: 50%;transform: translate(-50%, -00%);max-height:600px;width: 80%; touch-action: pan-x pan-y;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1506.21390106457!2d29.059161158181993!3d40.97211229482617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac79d791bf403%3A0xf841856a2103aad0!2zR8O2enRlcGUsIEhhdHRhdCBCYWhhdHRpbiBTay4gTm86MTQsIDM0NzMwIEthZMSxa8O2eS_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1630915886946!5m2!1str!2str" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>

								</div>
								<!-- Row -->
								<div class="content-row row_padding_top row_padding_bottom dark-section change-header-color" data-bgcolor="#171717">
									<h1 class="has-mask" data-delay="150"><?= $get['has_mask'] ?></h1>
									<!-- Contact Formular -->
									<div id="contact-formular">
										<div id="message"></div>
										<form method="post" action="">
											<div class="name-box has-animation" data-delay="100">
												<input name="name" type="text" id="name" size="30" value="" placeholder="<?= $get['name'] ?>" required><label class="input_label"></label>
											</div>
											<div class="name-box has-animation" data-delay="100">
												<input name="phone" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" id="phone" size="30" value="" placeholder="<?= $get['phone'] ?>" required><label class="input_label"></label>
											</div>
											<div class="email-box has-animation" data-delay="150">
												<input name="email" type="text" id="email" size="30" value="" placeholder="<?= $get['email'] ?>" required><label class="input_label"></label>
											</div>
											<div class="message-box has-animation" data-delay="100">
												<textarea name="comments" cols="40" rows="4" id="comments" placeholder="<?= $get['comments'] ?>" required></textarea><label class="input_label slow"></label>
											</div>
											<div class="button-box has-animation" data-delay="100">
												<div class="clapat-button-wrap circle parallax-wrap bigger">
													<div class="clapat-button parallax-element">
														<div class="button-border  outline parallax-element-second">
															<input type="submit" name="sendmessage" class="send_message" id="submit" value="<?= $get['sendmessage'] ?>" />
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<!--/Contact Formular -->
								</div>
								<!--/Row -->
								<div class="content-row dark-section full row_padding_left row_padding_right" data-bgcolor="#171717">
									<?php
									if ($successsend == "true") {
										echo ' <div id="message" class="alert fade_success .fade" style="text-align:center">  <strong>' . $get['successmessage'] . '</strong> </div>';
									} elseif ($successsend == "false") {
										echo '<div id="message" class="alert fade_error .fade"  style="text-align:center">  <strong>' . $get['failmessage'] . '</strong> </div>';
									}
									?>
								</div>
								<!-- Row -->
								<div class="content-row light-section row_padding_top" data-bgcolor="#fff">
									<h1 class="has-animation" data-delay="600"><?= $get['has_animation'] ?></h1>
									<hr>
									<hr class="white-line has-animation">
									<hr>
								</div>
								<!--/Row -->
								<!-- Row -->
								<div class="content-row light-section " data-bgcolor="#fff">
									<div class="one_third has-animation" style="text-align: center;" data-delay="250">
										<div class="clapat-icon">
											<i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
										</div>
										<h5 class=""><a href="mailto:info@brideroom.com.tr" class="link"><span><?= $get['mail'] ?></span></a></h5><br>
										<p>Mail</p>
									</div>
									<div class="one_third has-animation" style="text-align: center;" data-delay="200">
										<div class="clapat-icon">
											<i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
										</div>
										<h5 class=""><a class="link" href="<?= $get['adreslink'] ?>" target="_blank" rel="noopener noreferrer"><?= $get['adres'] ?></a></h5>
										<p>Adres</p>
									</div>
									<div class=" one_third last has-animation" style="text-align:center;" data-delay="300">
										<div class="clapat-icon">
											<i class="fa fa-phone fa-2x" aria-hidden="true"></i>
										</div>
										<h5 class="no-margins"><a href="tel:><?= $get['phonenumber'] ?>" class="link" target="_blank" rel="noopener noreferrer"><?= $get['phonenumber'] ?></a></h5>
										<p>Telefon</p>
									</div>
								</div>
								<!--/Row -->
							</div>
							<!--/Main Page Content -->
						</div>
						<!--/Main Content -->
					</div>
					<!--/Main -->
					<!-- Footer -->
					<?php include "Pieces/footer.php"; ?>
					<!--/Footer -->
				</div>
				<!--/Content Scroll -->
				<div id="app"></div>
				<!-- Project Holder -->
				<div id="project-holder">
					<div id="project-data"></div>
				</div>
				<!--/Project Holder -->
			</div>
			<!--/Page Content -->
		</div>
	</main>
	<div class="cd-cover-layer"></div>
	<div id="magic-cursor">
		<div id="ball">
			<div id="ball-drag-x"></div>
			<div id="ball-drag-y"></div>
			<div id="ball-loader"></div>
		</div>
	</div>
	<div id="clone-image"></div>
	<div id="rotate-device"></div>
	<script src="js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.js'></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpK1sWi3J3EbUOkF_K4-UHzi285HyFX5M&sensor=false"></script>
	<script src="js/clapatwebgl.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/scripts.js"></script>



</body>

</html>