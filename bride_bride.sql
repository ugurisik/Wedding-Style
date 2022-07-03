-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 03 Tem 2022, 06:36:35
-- Sunucu sürümü: 5.5.41-MariaDB
-- PHP Sürümü: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bride_bride`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `brideroom`
--

CREATE TABLE `brideroom` (
  `ID` int(11) NOT NULL,
  `hero_subtitle` text COLLATE utf8_turkish_ci NOT NULL,
  `hero_title` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_title` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_subtitle` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_subtitle_2` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_services` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_services_id` int(11) NOT NULL,
  `has_mask_members` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_members_id` int(11) NOT NULL,
  `next_hero_subtitle` text COLLATE utf8_turkish_ci NOT NULL,
  `next_hero_title` text COLLATE utf8_turkish_ci NOT NULL,
  `dil` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `brideroom`
--

INSERT INTO `brideroom` (`ID`, `hero_subtitle`, `hero_title`, `has_mask_title`, `has_mask_subtitle`, `has_mask_subtitle_2`, `has_mask_services`, `has_mask_services_id`, `has_mask_members`, `has_mask_members_id`, `next_hero_subtitle`, `next_hero_title`, `dil`) VALUES
(1, 'WEDDING & CONCEPT DESIGN', 'BRIDEROOM', 'Her ayrıntısı ince ince düşünülmüş... Sizin öykünüz sizin düğününüz...', '2011 yılından bu yana yüzlerce mekanda, bi̇nlerce düğün tasarladık. Bunca tasarim bi̇ze şunu söyledi̇; Düğün tasarlamak, göz i̇şi̇, gönül i̇şi̇, akil i̇şi̇... Si̇zi̇n gözünüzden bakıp, si̇zi̇n gönlünüzden geçeni̇ hi̇ssedi̇p, bunlardan daha da fazlasini tasarlama i̇şi̇! Farkli dokuları, renkleri̇, tarzları her zamanki̇ gi̇bi̇ deği̇l, hi̇ç olmadığı gi̇bi̇ bi̇r araya geti̇rebi̇lmek, bi̇r mekandan \"BÜYÜLÜ BİR ATMOSFER\" yaratmak...', 'Tasarımın, hayatın her anına derinlik kattığına inanıyoruz. Sevginizi, sevdiklerinizle birlikte kutladığınız bu özel gün, en mutlu tasarımları hak ediyor.', 'HİZMETLERİMİZ', 1, 'EKİP ÜYELERİMİZ', 1, 'TANIŞMAK İÇİN SABIRSIZLANIYORUZ!', 'BİZE ULAŞIN', 1),
(2, 'WEDDING & CONCEPT DESIGN', 'BRIDEROOM', 'Every detail has been meticulously thought out... Your story is your wedding...', 'Since 2011, we have designed thousands of weddings in hundreds of venues. All these designs told us; Designing a wedding, eye work, heart work, mind work... It\'s the job of looking through your eyes, feeling what\'s in your heart, and designing even more of these! To be able to bring together different textures, colors, styles like never before, to create a \"MAGIC ATMOSPHERE\" from a space...', 'We believe that design adds depth to every moment of life. This special day where you celebrate your love with your loved ones deserves the happiest designs.', 'OUR SERVICES', 1, 'OUR TEAM MEMBERS', 1, 'WE CAN\'T WAIT TO MEET YOU!', 'CONTACT US', 2),
(3, 'HOCHZEIT & KONZEPTDESIGN', 'BRIDEROOM', 'Jedes Detail ist akribisch durchdacht... Ihre Geschichte ist Ihre Hochzeit...', 'Seit 2011 haben wir Tausende von Hochzeiten in Hunderten von Locations entworfen. All diese Entwürfe sagten uns; Eine Hochzeit entwerfen, Augenarbeit, Herzarbeit, Gedankenarbeit ... Es ist die Aufgabe, durch die Augen zu schauen, zu fühlen, was in deinem Herzen ist, und noch mehr davon zu entwerfen! In der Lage zu sein, verschiedene Texturen, Farben, Stile wie nie zuvor zusammenzubringen, um aus einem Raum eine \"MAGISCHE ATMOSPHÄRE\" zu schaffen...', 'Wir glauben, dass Design jedem Moment des Lebens Tiefe verleiht. Dieser besondere Tag, an dem Sie Ihre Liebe mit Ihren Lieben feiern, verdient die glücklichsten Designs.', 'Unsere Dienstleistungen', 1, 'UNSERE TEAMMITGLIEDER', 1, 'WIR KÖNNEN ES NICHT WARTEN, SIE ZU TREFFEN!', 'KONTAKTIERE UNS', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `has_mask` text COLLATE utf8_turkish_ci NOT NULL,
  `phone` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `comments` text COLLATE utf8_turkish_ci NOT NULL,
  `name` text COLLATE utf8_turkish_ci NOT NULL,
  `sendmessage` text COLLATE utf8_turkish_ci NOT NULL,
  `has_animation` text COLLATE utf8_turkish_ci NOT NULL,
  `mail` text COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `adreslink` text COLLATE utf8_turkish_ci NOT NULL,
  `phonenumber` text COLLATE utf8_turkish_ci NOT NULL,
  `Whatsapp` text COLLATE utf8_turkish_ci NOT NULL,
  `successmessage` text COLLATE utf8_turkish_ci NOT NULL,
  `failmessage` text COLLATE utf8_turkish_ci NOT NULL,
  `Dil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`ID`, `has_mask`, `phone`, `email`, `comments`, `name`, `sendmessage`, `has_animation`, `mail`, `adres`, `adreslink`, `phonenumber`, `Whatsapp`, `successmessage`, `failmessage`, `Dil`) VALUES
(1, 'BİZE ULAŞIN', 'Telefon Numaranız', 'Mail Adresiniz', 'Söylemek İstedikleriniz', 'İsminiz', 'Gönder', 'EN KISA ZAMANDA GÖRÜŞELİM!', 'info@brideroom.com.tr', 'Göztepe Mahallesi  Hattat Bahattin Sokak Park Palas Apt. No: 14  Kadıköy, İstanbul, Türkiye', 'https://goo.gl/maps/3ryWVkdHk1Vq7BWu6', '(0532) 295 53 18', 'https://wa.me/+905322955318?text=Merhaba Didem Kösoğlu ile mi görüşüyorum?', 'Mesajınız başarılı bir şekilde gönderilmiştir.', 'Mesajınız iletilemedi.', 1),
(2, 'GET IN TOUCH', 'Phone number', 'Email Address', 'Your message', 'Name', 'Submit', 'See you ASAP!', 'info@brideroom.com.tr', 'Hattat Bahattin Street Park Palas Apt. No: 14  Kadikoy, Istanbul, Turkey', 'https://goo.gl/maps/3ryWVkdHk1Vq7BWu6', '90 532 295 53 18', 'https://wa.me/+905322955318?text=Merhaba Didem Kösoğlu ile mi görüşüyorum?', 'Your message has been sent successfully.', 'Your message could not be delivered.', 2),
(3, 'in Verbindung treten', 'Telefonnummer', 'E-Mail-Addresse', 'Ihre Nachricht', 'Name', 'einreichen', 'Wir sehen uns so schnell wie möglich!', 'info@brideroom.com.tr', 'Hattat Bahattin Straße Park Palas Wohnung No: 14  Kadikoy, Istanbul, Turkey', 'https://goo.gl/maps/3ryWVkdHk1Vq7BWu6', '90 532 295 53 18', 'https://wa.me/+905322955318?text=Merhaba Didem Kösoğlu ile mi görüşüyorum?', 'Ihre Nachricht wurde erfolgreich gesendet.', 'Ihre Nachricht konnte nicht zugestellt werden.', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content`
--

CREATE TABLE `content` (
  `ID` int(11) NOT NULL,
  `service` text COLLATE utf8_turkish_ci NOT NULL,
  `concept` text COLLATE utf8_turkish_ci NOT NULL,
  `place` text COLLATE utf8_turkish_ci NOT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL,
  `video` text COLLATE utf8_turkish_ci NOT NULL,
  `imageid` int(11) NOT NULL,
  `imagecount` int(11) NOT NULL,
  `imagecaption` text COLLATE utf8_turkish_ci NOT NULL,
  `dil` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `content`
--

INSERT INTO `content` (`ID`, `service`, `concept`, `place`, `content`, `video`, `imageid`, `imagecount`, `imagecaption`, `dil`, `type`) VALUES
(1, 'Hizmet: <br> Wedding', 'Konsept: <br> Floral Heaven', 'Mekan: <br> Adile Sultan Sarayı, İstanbul', 'Çiftimizin \'büyük bir parti havası\' isteğine göre tasarlandı. Baskılı zemin kumaş uygulaması yaparak Türkiye\'de bir ilki gerçekleştirdik.', '', 1, 20, 'Floral Heaven', 1, 1),
(2, 'Hizmet: <br> Wedding', 'Konsept: <br> WITHIN LEMON TREES', 'Mekan: <br> Urla, İzmir', 'Çiftimizin Urla, İzmir\'deki evlerinin limon bahçesini dikkate alarak tasarlandı.', '', 2, 20, 'Within Lemon Trees', 1, 2),
(3, 'Hizmet: <br> Engagement', 'Konsept: <br> Bloom With a View', 'Mekan: <br> Beylerbeyi, İstanbul', 'Çiftimizin pastoral renklerde sade ve şık tasarım istekleri dikkate alınarak tasarlandı.', '', 3, 20, 'Bloom With a View', 1, 3),
(4, 'Hizmet: <br> Wedding', 'Konsept: <br> Floral Heaven', 'Mekan: <br> Adile Sultan Sarayı, İstanbul', 'It was designed according to our couple\'s wish for \'a big wedding party atmosphere\'. We broke new ground in Turkey by applying printed ground fabric.', '', 1, 20, 'Floral Heaven', 2, 1),
(5, 'Hizmet: <br> Wedding', 'Konsept: <br> WITHIN LEMON TREES', 'Mekan: <br> Urla, İzmir', 'It was designed by taking into account the lemon garden of our couple\'s house in Urla, Izmir.\r\n', '', 2, 20, 'Within Lemon Trees', 2, 2),
(6, 'Hizmet: <br> Engagement', 'Konsept: <br> Bloom With a View', 'Mekan: <br> Beylerbeyi, İstanbul', 'It was designed by taking into account the simple and stylish design wishes of our couple in pastoral colors.\r\n', '', 3, 20, 'Bloom With a View', 2, 3),
(7, 'Hizmet: <br> Hochzeit', 'Konsept: <br> Floral Heaven', 'Mekan: <br> Adile Sultan Sarayı, İstanbul', 'Es wurde nach dem Wunsch unseres Paares nach \'großer Hochzeitsfeier-Atmosphäre\' gestaltet. In der Türkei haben wir mit bedrucktem Grundgewebe neue Wege beschritten.', '', 1, 20, 'Floral Heaven', 3, 1),
(8, 'Hizmet: <br> Wedding', 'Konsept: <br> WITHIN LEMON TREES', 'Mekan: <br> Urla, İzmir', 'Es wurde unter Berücksichtigung des Zitronengartens des Hauses unseres Paares in Urla, Izmir, entworfen.\r\n', '', 2, 20, 'Within Lemon Trees', 3, 2),
(9, 'Hizmet: <br> Engagement', 'Konsept: <br> Bloom With a View', 'Mekan: <br> Beylerbeyi, İstanbul', 'Es wurde unter Berücksichtigung der schlichten und stilvollen Gestaltungswünsche unseres Paares in pastoralen Farben gestaltet.\r\n', '', 3, 20, 'Bloom With a View', 3, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content_images`
--

CREATE TABLE `content_images` (
  `ID` int(11) NOT NULL,
  `DosyaYolu` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `content_images`
--

INSERT INTO `content_images` (`ID`, `DosyaYolu`) VALUES
(1, 'images/FLORAL HEAVEN/'),
(2, 'images/WITHIN LEMON TREES/'),
(3, 'images/BLOOM WITH A VIEW/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `data_pattern_image`
--

CREATE TABLE `data_pattern_image` (
  `ID` int(11) NOT NULL,
  `ResimYolu` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `data_pattern_image`
--

INSERT INTO `data_pattern_image` (`ID`, `ResimYolu`) VALUES
(1, 'images/displacement/17.jpg'),
(2, 'images/displacement/16.jpg'),
(3, 'images/displacement/15.jpg'),
(4, 'images/displacement/14.jpg'),
(5, 'images/displacement/13.jpg'),
(6, 'images/displacement/12.jpg'),
(7, 'images/displacement/11.jpg'),
(8, 'images/displacement/10.jpg'),
(9, 'images/displacement/9.jpg'),
(10, 'images/displacement/8.jpg'),
(11, 'images/displacement/7.jpg'),
(12, 'images/displacement/6.jpg'),
(13, 'images/displacement/5.jpg'),
(14, 'images/displacement/4.jpg'),
(15, 'images/displacement/3.jpg'),
(16, 'images/displacement/2.jpg'),
(17, 'images/displacement/1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dil`
--

CREATE TABLE `dil` (
  `ID` int(11) NOT NULL,
  `Dil` text COLLATE utf8_turkish_ci NOT NULL,
  `Kisa` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dil`
--

INSERT INTO `dil` (`ID`, `Dil`, `Kisa`) VALUES
(1, 'Türkçe', 'TR'),
(2, 'İngilizce', 'EN'),
(3, 'German', 'DE');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer`
--

CREATE TABLE `footer` (
  `ID` int(11) NOT NULL,
  `data_hover` text COLLATE utf8_turkish_ci NOT NULL,
  `socials_text` text COLLATE utf8_turkish_ci NOT NULL,
  `copyright` text COLLATE utf8_turkish_ci NOT NULL,
  `dil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `footer`
--

INSERT INTO `footer` (`ID`, `data_hover`, `socials_text`, `copyright`, `dil`) VALUES
(1, 'En Üste Çıkın', 'Takip Edin', '© Brideroom. Tüm hakları saklıdır.', 1),
(2, 'En Üste Çıkın', 'Takip Edin', '© Brideroom. Tüm hakları saklıdır.', 2),
(3, 'En Üste Çıkın', 'Takip Edin', '© Brideroom. Tüm hakları saklıdır.', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `header`
--

CREATE TABLE `header` (
  `ID` int(11) NOT NULL,
  `black_logo` text COLLATE utf8_turkish_ci NOT NULL,
  `white_logo` text COLLATE utf8_turkish_ci NOT NULL,
  `data_hover_home` text COLLATE utf8_turkish_ci NOT NULL,
  `data_hover_bride` text COLLATE utf8_turkish_ci NOT NULL,
  `data_hover_photo` text COLLATE utf8_turkish_ci NOT NULL,
  `data_hover_portfolyo` text COLLATE utf8_turkish_ci NOT NULL,
  `data_hover_floral` text COLLATE utf8_turkish_ci NOT NULL,
  `data_hover_bloom` text COLLATE utf8_turkish_ci NOT NULL,
  `data_hover_lemon` text COLLATE utf8_turkish_ci NOT NULL,
  `data_hover_iletisim` text COLLATE utf8_turkish_ci NOT NULL,
  `dil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `header`
--

INSERT INTO `header` (`ID`, `black_logo`, `white_logo`, `data_hover_home`, `data_hover_bride`, `data_hover_photo`, `data_hover_portfolyo`, `data_hover_floral`, `data_hover_bloom`, `data_hover_lemon`, `data_hover_iletisim`, `dil`) VALUES
(1, 'images/logo.png', 'images/logo-white.png', 'ANASAYFA', 'BRIDEROOM', 'PHOTOROOM', 'PORTFOLYO', 'FLORAL HEAVEN', 'BLOOM WITH A VIEW', 'WITHIN LEMON TREES', 'İLETİŞİM', 1),
(2, 'images/logo.png', 'images/logo-white.png', 'HOME PAGE', 'BRIDEROOM', 'PHOTOROOM', 'PORTFOLIO', 'FLORAL HEAVEN', 'BLOOM WITH A VIEW', 'WITHIN LEMON TREES', 'CONTACT US', 2),
(3, 'images/logo.png', 'images/logo-white.png', 'HOME PAGE', 'BRIDEROOM', 'PHOTOROOM', 'PORTFOLIO', 'FLORAL HEAVEN', 'BLOOM WITH A VIEW', 'WITHIN LEMON TREES', 'CONTACT US', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `home`
--

CREATE TABLE `home` (
  `ID` int(11) NOT NULL,
  `home_slider_id` int(11) NOT NULL,
  `sticky_left` text COLLATE utf8_turkish_ci NOT NULL,
  `sticky_right` text COLLATE utf8_turkish_ci NOT NULL,
  `data_pattern_img_id` int(11) NOT NULL,
  `Dil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `home`
--

INSERT INTO `home` (`ID`, `home_slider_id`, `sticky_left`, `sticky_right`, `data_pattern_img_id`, `Dil`) VALUES
(1, 1, 'ÖNCEKİ', 'SONRAKİ', 8, 1),
(2, 1, 'PREV SLIDE', 'NEXT SLIDE', 8, 2),
(3, 1, 'VORHERIGE FOLIE', 'NÄCHSTE FOLIE', 8, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `home_slider`
--

CREATE TABLE `home_slider` (
  `ID` int(11) NOT NULL,
  `SliderID` int(11) NOT NULL,
  `data_title` text COLLATE utf8_turkish_ci NOT NULL,
  `data_subtitle` text COLLATE utf8_turkish_ci NOT NULL,
  `data_firstline` text COLLATE utf8_turkish_ci NOT NULL,
  `data_secondline` text COLLATE utf8_turkish_ci NOT NULL,
  `href` text COLLATE utf8_turkish_ci NOT NULL,
  `subtitle` text COLLATE utf8_turkish_ci NOT NULL,
  `slide_title` text COLLATE utf8_turkish_ci NOT NULL,
  `slide_img` text COLLATE utf8_turkish_ci NOT NULL,
  `Dil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `home_slider`
--

INSERT INTO `home_slider` (`ID`, `SliderID`, `data_title`, `data_subtitle`, `data_firstline`, `data_secondline`, `href`, `subtitle`, `slide_title`, `slide_img`, `Dil`) VALUES
(1, 1, 'FLORAL HEAVEN', 'WEDDING', 'Göz', 'Atalım', 'contents.php?floral', 'WEDDING', 'FLORAL HEAVEN', 'images/SliderImages/floralheaven(109).jpg', 1),
(2, 1, 'BLOOM WITH A VIEW', 'ENGAGEMENT', 'Göz', 'Atalım', 'contents.php?bloom', 'ENGAGEMENT', 'BLOOM WITH A VIEW', 'images/SliderImages/bloomwithaview(7).jpg', 1),
(3, 1, 'WITHIN LEMON TREES', 'WEDDING', 'Göz', 'Atalım', 'contents.php?lemontrees', 'WEDDING', 'WITHIN LEMON TREES', 'images/SliderImages/withinlemontrees-min.jpg', 1),
(4, 1, 'FLORAL HEAVEN', 'WEDDING', 'Brideroom\'a', 'Let\'s Go to the ', 'contents.php?floral', 'WEDDING', 'FLORAL HEAVEN', 'images/SliderImages/floralheaven(109).jpg', 2),
(5, 1, 'BLOOM WITH A VIEW', 'ENGAGEMENT', 'Brideroom', 'Let\'s Go to the ', 'contents.php?bloom', 'ENGAGEMENT', 'BLOOM WITH A VIEW', 'images/SliderImages/bloomwithaview-min.jpg', 2),
(6, 1, 'WITHIN LEMON TREES', 'WEDDING', 'Brideroom\'a', 'Let\'s Go to the ', 'contents.php?lemontrees', 'WEDDING', 'WITHIN LEMON TREES', 'images/SliderImages/withinlemontrees-min.jpg', 2),
(7, 1, 'FLORAL HEAVEN', 'HOCHZEIT', 'Brideroom', 'Lass uns gehen', 'contents.php?floral', 'HOCHZEIT', 'FLORAL HEAVEN', 'images/SliderImages/floralheaven(109).jpg', 3),
(8, 1, 'BLOOM WITH A VIEW', 'ENGAGEMENT', 'Brideroom', 'Lass uns gehen', 'contents.php?bloom', 'ENGAGEMENT', 'BLOOM WITH A VIEW', 'images/SliderImages/bloomwithaview-min.jpg', 3),
(9, 1, 'WITHIN LEMON TREES', 'WEDDING', 'Brideroom', 'Lass uns gehen', 'contents.php?lemontrees', 'WEDDING', 'WITHIN LEMON TREES', 'images/SliderImages/withinlemontrees-min.jpg', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mail`
--

CREATE TABLE `mail` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_turkish_ci NOT NULL,
  `PhoneNumber` text COLLATE utf8_turkish_ci NOT NULL,
  `MailAddress` text COLLATE utf8_turkish_ci NOT NULL,
  `Message` text COLLATE utf8_turkish_ci NOT NULL,
  `MessageDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mail`
--

INSERT INTO `mail` (`ID`, `Name`, `PhoneNumber`, `MailAddress`, `Message`, `MessageDate`) VALUES
(6, 'UGUR', '05445324115', 'peniaugur80@gmail.com', 'Merhaba', '2021-09-02 09:23:37'),
(7, 'UGUR', '05445324115', 'peniaugur80@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel massa nec ex interdum sagittis vel eget sapien. Aliquam purus dolor, mattis sit amet lacus non, sodales molestie sem. Nam hendrerit, quam tincidunt tempus suscipit, nulla neque facilisis urna, non tempus augue ante vitae tortor. Duis quis est et tellus elementum blandit. Curabitur eget porta urna, non egestas lectus. Nullam non purus molestie, dictum enim non, sagittis arcu. Maecenas nec dui interdum, congue felis a, euismod ante. Maecenas fringilla eros quam, ac laoreet tellus auctor ut. Ut eget aliquet est. Donec fermentum arcu arcu, id condimentum ante dictum eu. Nunc elementum ullamcorper tincidunt. Nullam libero ante, consectetur vel bibendum ut, lacinia vitae tellus. Maecenas massa arcu, venenatis vitae dui at, accumsan finibus mauris.', '2021-09-02 10:27:46'),
(8, 'Gozde Agcakale', '00352691585111', 'gozdeagcakale@gmail.com', 'Merhaba, \r\n\r\nBen Gözde. Partnerimle birlikte Lüksemburg\'da yaşıyoruz ve 2022 yaz döneminde Türkiye’de evlenmeyi planlıyoruz. \r\n\r\nDüğün planlaması icin danışmanlık arayışındayız. Hizmetlerinizle ilgili daha detaylı bilgi almak ve tanışmak icin online bir toplantı ayarlamamız mümkün müdür? \r\n\r\nŞimdiden çok teşekkürler\r\nGözde Ağcakale\r\n+352 691 585 111', '2021-11-06 20:54:29'),
(9, 'Juliana Tekin', '46704064574', 'juliana_tekin@hotmail.com', 'Hello, i would like to arrange my wedding with you. For now my weddingplans in Sweden has been cancled so im looking for another solution. We are about 50-70 guest and can think about any location in Antalya that fits our requirements. We are planning it to be arranged on 15/16th of April 2022. Can this be arranged? Best regards Juliana Tekin', '2021-11-08 12:37:33'),
(10, 'CharlesFrony', '83599386813', 'georgiyfrolov1999364yfi+gk@bk.ru', 'brideroom.com.tr gbuihswdiwyfuwhdiwfbujdaodhwifwjdaqidhwufwudjqvbcnxsiwdui', '2021-11-11 00:58:01'),
(11, 'GeorgeTof', '81855867334', 'irraroactuari@gmx.at', 'Launch Artificial Intelligence with one button and earn from $ 5779 in a day >>>>>>>>>>>>>>  https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc7Wvjo&sa=D&81=51&usg=AFQjCNHj_a66ufJc5MfSABppuo4GGGxh6w   <<<<<<<<<<<', '2021-11-18 13:34:50'),
(12, 'Jasontok', '84818452849', 'davidmok784@minister.com', 'Medical pharmacies * without a doctors prescription \r\n* Customer Support Center 365\\24\\7 \r\n* Delivery methods: EMS, AirMail. \r\n* without a doctor\'s prescription \r\n \r\n<a href=https://is.gd/midbnQ>Pharmaceuticals online</a> \r\n \r\nFurosemide\r\nVoveran\r\nVoveran sr\r\nViagra Super Active\r\nMedrol\r\nED Sample Pack 1\r\nDetrol\r\nMentax\r\nZyloprim\r\nFinax\r\nEpivir-HBV\r\nFemale Cialis\r\nTerramycin\r\nMethotrexate\r\nTenormin\r\nLuvox\r\nCialis Jelly\r\nEmsam\r\nUnisom\r\nLevothroid\r\n', '2021-11-18 18:05:01'),
(13, 'Stevenkex', '81146449922', 'little_misan@yahoo.com.au', 'A few weeks ago, Elon Musk, in an interview, accidentally blabbed about a cryptocurrency trading robot that brings him passive income from $ 13,000 to $ 135,000 per day and asked to remove this moment from the video after filming. \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8aMsu&sa=D&33=85&usg=AFQjCNGiMsVvcKCjtUl1s1o9fbbu24TnPA \r\nBut the operator who filmed all this remembered the name of the trading robot and tried to make money. \r\nOn the same day, he made a deposit of $ 500 and launched a trading robot and after 3 hours his account had $ 3750 and a week later $ 563700. \r\nOn the robot, you earn in the currency of your country, Europe - EUR, Australia - AUD, Canada - CAD, Sweden - SEC and so on. \r\nHurry up to register as after the influx of new users, the administrators decided to stop registering new users from next week. \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8aMsu&sa=D&56=62&usg=AFQjCNGiMsVvcKCjtUl1s1o9fbbu24TnPA', '2021-11-20 11:46:17'),
(14, 'Georgefoutt', '85855361661', 'kornelijignatov4568@yandex.ru', 'http://offeramazon.ru \r\n \r\nI am the owner of an expensive women\'s clothing store, and the quality of the assortment is very important to me. Having visited the warehouse of the company Bad character of a fashionable lady, I was pleasantly surprised by the collections. A good choice, beautiful graceful models, good quality for the price. \r\nhttp://offeramazon.ru/nxa4 ', '2021-11-26 09:05:40'),
(15, 'Anthonymap', '82759148474', 'no.reply.feedbackform@gmail.com', 'Hеllо!  brideroom.com.tr \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd rеquеst еntirеly lаwfully? \r\nWе prоpоsе а nеw lеgаl mеthоd оf sеnding prоpоsаl thrоugh fееdbасk fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh аppеаl аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh соmmuniсаtiоn Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оur sеrviсе fоr frее. Wе will sеnd up tо 50,000 mеssаgеs fоr yоu. \r\nThе соst оf sеnding оnе milliоn mеssаgеs is 49 USD. \r\n \r\nThis lеttеr is сrеаtеd аutоmаtiсаlly. Plеаsе usе thе соntасt dеtаils bеlоw tо соntасt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.', '2021-11-26 17:37:24'),
(16, 'PrinceTew', '87131848129', 'fabihartung@versanet.de', 'According to Binance, this is the best trading robot in the world %#№+ \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&33=91&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ \r\nBecause he is able to make 200% profit every day ;);* \r\nFor example, you replenished your brokerage account with $ 500 (EUR, GBP, etc.) and he earned you from $ 1000 in net income within a day (@\"( \r\nBinance recommends using this particular trading robot for automated trading !(?@ \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&28=47&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ', '2021-11-28 14:47:45'),
(17, 'Justinstora', '82651529436', 'starostindamir4291@yandex.ru', 'Добрый день! \r\nЕсли искали \"Как экономить на покупках?\" - то вы нашли Не переплачивай! \r\nВ данной группе собраны популярные сервисы для экономии ваших денежных средств - Покупайте выгодно! \r\nМы постоянно добавляем новые способы и методы экономии, ПОДПИШИТЕСЬ и следите за новостями! \r\n \r\nЧто бы воспользоваться скидками до 99%, вам всего лишь нужно показать QR код на кассе кассиру или на кассе самообслуживания и попросить списать баллы. \r\nЕй можно расплатиться до 99% суммы чека. \r\nПотратить баллы, можно: \r\n- Магнит (Продукты, Косметика и Аптека) \r\n- Пятерочка \r\n- Перекресток \r\n- Аптека \r\n- Яндекс баллы \r\n- Такси \r\nЭксклюзивные Купоны / Промокоды \r\n \r\nЛибо Купон / Промокод, где совершаете покупку. Публикуем популярные сервисы, скидки до 90% \r\n- Ozon \r\n- Яндекс Маркет \r\n- AliExpress \r\n- СберМегаМаркет \r\n- Biglion \r\n- LetyShops \r\n- iHerb \r\n- Delivery Club \r\n- Самокат \r\n- Burger king \r\n- KFC и др. \r\n \r\nПокупайте Штрихи / Промокоды / Купоны перед покупками! \r\nВалидность 99%! Если не работает - писать в поддержку бота. \r\nПиво и вино тоже можно оплатить баллами, крепкий алкоголь и сигареты нельзя. \r\n \r\nTelegram \r\nhttps://t.me/KabanShopBot?start=36316', '2021-11-28 15:54:26'),
(18, 'PatrickEnsum', '86474835549', 'naturheilpraxis-dw@t-online.de', 'Blockchain recommends to all people who are interested in additional permanent passive income of $ 5000 per day with a cryptocurrency trading robot. \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&01=94&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ \r\nA trading robot is capable of making from 750% to 15000% profit per day ;^(( \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&71=39&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ \r\nThis success was achieved thanks to the advanced developments in the field of artificial intelligence !$;& \r\nTens of thousands of people around the world are already using this trading robot, so start you :+!( \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&50=21&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ \r\nTo start, you need to do just three things: \r\n1. Make a deposit to your brokerage account from $ 500 ?#?@ \r\n2. Launch the trading robot №_:& \r\n3. Receive passive income from $ 5000 per day ;@;* \r\nhttps://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8qvzi&sa=D&04=36&usg=AFQjCNH2QAwQV6sbS1u0SgHiVXKZSKhcKQ', '2021-12-01 02:22:35'),
(19, 'Jamesmag', '84485795225', 'jtom_simmo91@hotmail.com', 'Fast income from one investment from $ 6875 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8ED7K&sa=D&04=16&usg=AFQjCNEY3K5BsQ-mUq_FMcp6hGUAytb7Og <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-04 17:08:31'),
(20, 'JAMES COOK', '88371739659', 'james_cook78@yahoo.com', 'Dear sir/ma \r\nWe are a finance and investment company offering loans at 3% interest rate. We will be happy to make a loan available to your organisation for your project. Our terms and conditions will apply. Our term sheet/loan agreement will be sent to you for review, when we hear from you. Please reply to this email ONLY cookj5939@gmail.com \r\n \r\nRegards. \r\nJames Cook \r\nChairman & CEO Euro Finance & Commercial Ltd', '2021-12-04 23:47:21'),
(21, 'Jamesmag', '88335456858', 'georgeduthie@rocketmail.com', 'Confessions of a Bitcoin billionaire or passive income from $ 9888 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8ED7K&sa=D&20=32&usg=AFQjCNEY3K5BsQ-mUq_FMcp6hGUAytb7Og <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-06 23:33:56'),
(22, 'Jamesmag', '86667657285', 'speedy-bianca@t-online.de', 'Deine Nachbarn verdienen schon von 164000 EUR pro Tag >>>>>>>>>>>>>>>>>>>>>>>>>>> http://www.google.com/url?q=http%3A%2F%2Fgo.nihawiwa.com%2F0bnl&sa=D&79=07&usg=AFQjCNEUPijOi1LFtA_rg0rU0qfVGTKd6A <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-09 01:36:01'),
(23, 'Jamesmag', '83821188441', 'heidelinde.puschitz@aon.at', 'Income from one investment from $ 5585 in a day >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc8Prmu&sa=D&87=53&usg=AFQjCNH_EGwAiiB8MpWHxZlE1C27oj3Rvw <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-12 09:45:44'),
(24, 'Donald Cole', '89399484311', 'lanj7962@gmail.com', 'Good day \r\n \r\nI contacted you some days back seeking your cooperation in a matter regarding funds worth $24 Million, I urge you to get back to me through this email coledd11@cloedcolela.com if you\'re still interested. \r\n \r\nI await your response. \r\n \r\nThanks, \r\n \r\nDonald Cole', '2021-12-13 14:29:09'),
(25, 'Mike Sheldon\r\n', '89639872576', 'no-replyoblild@gmail.com', 'Hi there \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Sheldon\r\n \r\nSpeed SEO Digital Agency', '2021-12-14 21:14:04'),
(26, 'Mike Jones\r\n', '81836291527', 'no-replyoblild@gmail.com', 'Howdy \r\n \r\nI have just took an in depth look on your  brideroom.com.tr for  the current search visibility and saw that your website could use a push. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Jones\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-12-22 09:08:32'),
(27, 'Jamesmag', '83577581782', 'reimondo.wiebeau@freenet.de', 'Deine Kollegen verdienen schon Vor 14700 EUR in der Woche >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc9jD1p&sa=D&56=91&usg=AFQjCNE5-l7dYtpQNDLSz9x2TTehrGGJ2w <<<<<<<<<<<<<<<<<<<<<<<<', '2021-12-22 11:06:11'),
(28, 'Donaldnus', '82711441679', 'babypagan@yahoo.co.uk', 'Hallo. \r\nWenn Sie sich fur diese Art von Verdienst interessieren, dann sollten Sie wissen, dass hier einmalig Investitionen von 500 EUR erforderlich sind (#)= \r\nDaruber hinaus erhalten Sie ab 1500 EUR pro Woche \"%!_ \r\n>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc9jD1p&sa=D&41=07&usg=AFQjCNE5-l7dYtpQNDLSz9x2TTehrGGJ2w <<<<< \r\nDie Essenz des Verdienens besteht darin, Einnahmen aus dem Handel mit Kryptowahrungen in einem automatischen Modus zu erzielen. Selbst wenn alle Markte zusammenbrechen, erhalten Sie Ihr Geld garantiert ab 1500 EUR pro Woche. \r\nNehmen Sie Ihren Platz an der Sonne ein und melden Sie sich an %+%& \r\nBegrenztes Angebot №*)= \r\n>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fc9jD1p&sa=D&57=22&usg=AFQjCNE5-l7dYtpQNDLSz9x2TTehrGGJ2w <<<<<', '2021-12-25 21:20:38'),
(29, 'Mike Lamberts\r\n', '84499923493', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Lamberts\r\n \r\nsupport@digital-x-press.com', '2021-12-28 18:37:35'),
(30, 'Mike Pearcy\r\n', '89191922625', 'no-replyoblild@gmail.com', 'Howdy \r\n \r\nIf you\'ll ever need a permanent increase in your website\'s Domain Authority score, We can help. \r\n \r\nMore info: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\n \r\nThank you \r\nMike Pearcy\r\n \r\nmike@strictlydigital.net', '2022-01-06 21:00:55'),
(31, 'Mike Ramacey\r\n', '88911118451', 'no-replyoblild@gmail.com', 'Greetings \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Ramacey\r\n \r\nSpeed SEO Digital Agency', '2022-01-11 07:20:38'),
(32, 'Jamesmag', '81711824168', 'wolle_schmidt06@hotmail.de', 'Deine Nachbarn verdienen schon Vor 15800 EUR pro Tag >>>>>>>>>>>>>>>>>>>>>>>>>>> https://www.google.com/url?q=https%3A%2F%2Fvk.cc%2Fcaa7WZ&sa=D&10=18&usg=AFQjCNHeDhPmQ6da3c_t6uxfxm4yAdThqw <<<<<<<<<<<<<<<<<<<<<<<<', '2022-01-16 00:00:03'),
(33, 'Express Documents', '88458487752', 'jonathanproducts001@gmail.com', 'We are a Team of IT Experts specialized in the production of Real and authentic Documents such as Passport, Driving License, Covid19 Vaccine Cards, CSCS Cards, Diploma Certificates, PhD\'s, IELTS Certificate, Bachelor  degrees, NCLEX Certificate, MBA, ID Cards, SS Cards, Associate Certificate, University Certificates, Green Cards, Death Certificate, Master Degree, PMP Certificate, Working Permits, Visa\'s etc. Contact us on WhatsApp for more information +49 1590 2969018. or Email us at documentsservicesexperts@gmail.com', '2022-01-18 09:29:20'),
(34, 'Forexovext', '89736994473', 'tendril@pochtampt.com', 'Forex uathghrádaithe. https://ie.system-forex.com', '2022-01-20 14:30:57'),
(35, 'Mike Abramson\r\n', '89898873133', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nI have just took an in depth look on your  brideroom.com.tr for  the current search visibility and saw that your website could use a push. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Abramson\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2022-01-20 18:34:37'),
(36, 'Mike Forster\r\n', '88177312865', 'no-replyoblild@gmail.com', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-01-24 23:03:17'),
(37, 'JefferyCat', '86111839623', 'jaenudinudin84@gmail.com', 'In 3 months Shiba Inu will be worth more than $0.3 and many of SHIB holders will become multimillionaires. \r\nThere is a secret faucet SHIB that gives out from 2 million to 20 million Shiba Coin: 0xF73DC38B1f8C8F138F78479e887507F97Ca693ef \r\nTo receive the coveted coins, you need to send from 1 million Shiba Coin to 10 million Shiba Coin to a secret wallet and the secret faucet will return you the amount 2 times more: 0xF73DC38B1f8C8F138F78479e887507F97Ca693ef', '2022-01-28 02:53:58'),
(38, 'Mike Crossman\r\n', '85821141955', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nIf you\'ll ever need a permanent increase in your website\'s Domain Authority score, We can help. \r\n \r\nMore info: \r\nhttps://www.strictlydigital.net/product/moz-da50-seo-plan/ \r\n \r\nNEW: Ahrefs DR70 plan: \r\nhttps://www.strictlydigital.net/product/ahrefs-seo-plan/ \r\n \r\n \r\nThank you \r\nMike Crossman\r\n \r\nmike@strictlydigital.net', '2022-01-31 16:35:18'),
(39, 'Lina Kulthum', '07432526472', 'itslina28@hotmail.com', 'Dear Sir/Madam, \r\nI hope this email finds you well. \r\n\r\nI found your company details on Instagram and would love for you to assist me in planning my dream destination wedding in my favourite holiday destination; Antalya. \r\n\r\nI’d ideally like to host around 100-150 guests either at an indoor venue, around mid November-this year.\r\n\r\nDo you have any set wedding packages available? If so,please can you provide these to me and highlight what each package includes. \r\n\r\nI look forward to hearing from you soon. \r\n\r\nKindest Regards, \r\nLina', '2022-02-01 12:05:15'),
(40, 'Mike Laird\r\n', '82425145822', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Laird\r\n \r\nsupport@digital-x-press.com', '2022-02-02 14:26:28'),
(41, 'Mike Larkins\r\n', '81123333253', 'no-replyoblild@gmail.com', 'Greetings \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Larkins\r\n \r\nSpeed SEO Digital Agency', '2022-02-08 05:17:53'),
(42, 'Diane Angelori', '81695757983', 'g.a.76.52.7.19@gmail.com', 'Hello \r\n \r\nI\'m Diane Angelori, online trading expert. I want you to know that Online trading (Crypto, Forex and Binary option) is a good thing if you have a good trading strategy, I use to loose a lot of funds in online trading before I got to where I am today. If you need assistance on how to trade and recover back all the money you have lost to your broker and want to be a successful online trader like me, write to me via email below to get an amazing strategy. \r\n \r\nIf you are having problems withdrawing your profit from your Crypt, Forex or Binary option trading account even when you were given a bonus, just contact me, I have worked with some Trade, Regulatory Agencies for 9years, and I have helped a lot of people get back their lost funds from their stubborn brokers successfully and I won\'t stop until I have helped as many as possible. For more info you can contact me via my email address: dianeangelori@protonmail.com', '2022-02-13 02:35:47'),
(43, 'Mike Daniels\r\n', '86763569123', 'no-replyoblild@gmail.com', 'Hi \r\n \r\nI have just checked  brideroom.com.tr for the ranking keywords and saw that your website could use a push. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Daniels\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2022-02-17 11:19:17'),
(44, 'Hennen Robert', '84175472443', 'hnnnrobert@gmail.com', 'Hello Dear, \r\n \r\nGreetings to you and I hope this email meet at your best, I am working directly with a private family portfolio that can provide funding for credible clients with feasible projects. Currently, we have investment funds for viable projects. \r\n \r\nThey are interested in the following: Institution, Library, Hospitals, Green energy, \r\nPower projects, Agriculture and Real Estate. They can also partner with your company on other projects of value. The interest rate and tenure are fantastic. \r\n \r\nYour response is most anticipated if this is of interest to you. \r\nReach me on email: contact@hennenrobert.xyz or \r\n \r\nKind regards, \r\n \r\nHennen Robert \r\nFinancial Consultant \r\nWhatsapp: +1 209 248 1965 \r\nEuroclear Groups \r\nPersonal: hnnnrobert@gmail.com \r\nUrl: http://euroclear.com', '2022-02-20 12:37:56'),
(45, 'Mike Berrington\r\n', '86372855416', 'no-replyoblild@gmail.com', 'Negative SEO attack Services. Deindex bad competitors from Google. It works with any Website, video, blog, product or service. \r\nhttps://www.seo-treff.de/product/derank-seo-service/', '2022-02-21 22:45:02'),
(46, 'Mike Stanley\r\n', '89933115859', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Stanley\r\n \r\nsupport@digital-x-press.com', '2022-02-23 17:54:20'),
(47, 'Mike Gerald\r\n', '82377296752', 'no-replyoblild@gmail.com', 'Greetings \r\n \r\nThis is Mike Gerald\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your brideroom.com.tr SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Gerald\r\n \r\nmike@strictlydigital.net', '2022-03-03 12:26:30'),
(48, 'Mike Peacock\r\n', '85223157612', 'no-replyoblild@gmail.com', 'Hi \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Peacock\r\n \r\nSpeed SEO Digital Agency', '2022-03-09 11:09:31'),
(49, 'Glitter Finance', '84931947845', 'i.dobrovitsky@yandex.com', 'Good afternoon, you have received this letter, because we want the whole world to know and not cooperate with Ilya Vladimirovich Dobrovitsky (David Dobrovitsky), now living in Portugal. \r\nHe is the CEO of Glitter finance and the creator of many fraudulent projects. He stole more than $200,000 from investors, and this is only a small part of those we found, I think the amounts are estimated at tens of millions of dollars. We have all the evidence that we can send to any user upon request for fraud.IlyaDobrovitsky1@protonmail.com \r\nHere are his contacts, we would appreciate it if you complained about him on social networks and so on. \r\nYou can complain about the site https://glitter.finance - here https://supportcenter.godaddy.com/AbuseReport \r\n \r\nhttps://twitter.com/dobrovitsky \r\nhttps://www.linkedin.com/in/ilya-dobrovitsky / \r\ntelegram @DeFiBuilder1 \r\n+1 860 418 9729 \r\n \r\nhttps://www.cryptojobsdaily.com/candidate/ilya-dobrovitsky/ \r\nHis company \r\nhttps://www.companiesintheuk.co.uk/people/ILYA-DOBROVITSKY/81747028 \r\nhttps://ariregister.rik.ee/eng/company/16377882/Glitter-Finance \r\nCurrent: Co-Founder - Amanah DeFi https://amanahdefi.com \r\nPast: Co-Founder - spherium.finance \r\nPast: Co-Founder - BTCD Ltd \r\nPast: CDO - icoda.io', '2022-03-16 01:27:28'),
(50, 'Glitter Finance', '88415282127', 'maxcoins77@gmail.com', 'You have recently received a letter about the CEO of Glitter Finance David (Ilya) Dobrovitsly. We would like to inform you that the conflict has been resolved. The information we sent originally was incorrect and the parties have amicably resolved differences.', '2022-03-16 19:29:49'),
(51, 'Mike Thornton\r\n', '85571572444', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nI have just verified your SEO on  brideroom.com.tr for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Thornton\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2022-03-19 01:14:36'),
(52, 'Richardfaf', '89419981627', 'mnjentzsch@berlin.de', 'How to make money online up to $560000 per month >>>>>>>>>>>>>>  https://telegra.ph/Passive-income-from-5000-per-day---only-in-our-certified-licensed-system-03-20?54549   <<<<<<<<<<<', '2022-03-21 23:00:38'),
(53, 'Elenawob', '81298492355', 'remi1.bisinotto2@gmail.com', 'Install the application and enjoy life: https://2track.info/gdQJ', '2022-03-23 13:21:05'),
(54, 'TebertPaymn', '82638749399', 'j.umandjik.ro@gmail.com', 'Hi Jane. As you asked, I\'m giving you a link where you can meet single girls for sex https://ladieslocation.life/?u=wh5kd06&o=qxpp80k', '2022-03-23 21:42:17'),
(55, 'Mike Jacobson\r\n', '85667963889', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Jacobson\r\n \r\nsupport@digital-x-press.com', '2022-03-23 22:46:38'),
(56, 'Juan Garibaldi', '89387877296', 'info@kaushalganga.org', 'Dear sir/madam \r\n \r\nADEX Industrial Company LLC, would want complete product catalog and price lists, \r\nWe have pictures and specifications we are introducing into our market due to its high demand, \r\nWe want to be sure your company can supply it and of good quality with guarantee and good prices. \r\n \r\nKindly contact us for more information. \r\nReply to: Purchase@adex-uk.net \r\n \r\nBest Regards \r\nJuan Garibaldi \r\nPurchase Supervisor', '2022-03-24 13:36:57'),
(57, 'Forexovext', '84613511113', 'table@pochtampt.com', 'Naučte sa obchodovať na forexe. https://sk.forex-stock-bitcoin-brokers.com', '2022-03-24 16:24:49'),
(58, 'Mike Nathan\r\n', '87674779245', 'no-replyoblild@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your brideroom.com.tr to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Nathan\r\n', '2022-03-25 14:30:57'),
(59, 'RobertHaf', '87862391364', 'birk@iaaeg.de', 'Your Cryptocurrency income from $300086 >>>>>>>>>>>>>>  https://telegra.ph/Confirm-you-are-not-a-bot-03-24?62657   <<<<<<<<<<<', '2022-03-27 00:24:02'),
(60, 'RobertHaf', '87267845651', 'peterdenter@gmx.de', 'Only your income on Binary Options from $369696 >>>>>>>>>>>>>>  https://telegra.ph/Confirm-you-are-not-a-bot-03-24-2?87487   <<<<<<<<<<<', '2022-03-28 20:41:02'),
(61, 'Mike Oakman\r\n', '89147782237', 'no-replyoblild@gmail.com', 'Good Day \r\n \r\nThis is Mike Oakman\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your brideroom.com.tr SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Oakman\r\n \r\nmike@strictlydigital.net', '2022-04-01 19:14:39'),
(62, 'Kaybatdcal', '85121944656', 'sanja.filatov.yg.99s@gmail.com', 'Hi Brain. I haven\'t been fucked for a long time. Maybe you can https://ladieslocation.life/?u=wh5kd06&o=qxpp80k https://like-a-dating.top/yotube/?u=wh5kd06&o=qxpp80k', '2022-04-05 23:55:51'),
(63, 'Kaymqedcal', '86587655156', 'sanja.filatov.yg9.9s@gmail.com', 'Hi Joy. Your friends told me that you like me and I decided to post my erotic photos and get acquainted https://ladieslocation.life/?u=wh5kd06&o=qxpp80k', '2022-04-05 23:55:52'),
(64, 'Kaymaxdcal', '85786363437', 'sanja.filatov.yg9.9.s@gmail.com', 'Hi Luis. It\'s not the first time I\'ve written to you. When will you finally fuck me? I\'m here, find me https://ladieslocation.life/?u=wh5kd06&o=qxpp80k', '2022-04-05 23:55:53'),
(65, 'HenryGline', '89034857663', 'x.i.ayu.d.e.x.i.n.g.qitian@gmail.com', 'One dollar is nothing, but it can grow into $100 here. \r\nhttps://t.me/Crypto2022toolbot', '2022-04-06 04:35:33'),
(66, 'Mike ', '87157258486', 'no-replyoblild@gmail.com', 'Howdy \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike  \r\nSpeed SEO Digital Agency', '2022-04-09 02:58:50'),
(67, 'Mike Stephen\r\n', '85648362234', 'no-replyoblild@gmail.com', 'Hi \r\n \r\nI have just verified your SEO on  brideroom.com.tr for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Stephen\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2022-04-12 06:03:15'),
(68, 'Michaelviady', '81244275951', 'beeonthetop.com@gmail.com', 'Buy Followers, Likes and Views \r\n \r\nGet Thousands of Followers, Likes, Views and more for all you social media channels. \r\nInstagram, Facebook, Tiktok and more.. \r\n \r\nBoost your sales, and get more leads. \r\nhttps://www.beeonthetop.com', '2022-04-12 20:07:53'),
(69, 'Van Gurt', '81963135176', 'vangurt@wadejcollc.com', 'Greetings, \r\n \r\nMy Name is Van Gurt. I am writing to extend a business request for an investment opportunity. \r\n \r\nI will provide exclusive details to you upon your acceptance and response to van.gurt111@gmail.com \r\n \r\nSincerely, \r\nVan Gurt \r\nvan.gurt111@gmail.com \r\nVGPG', '2022-04-14 17:58:05'),
(70, 'HenryGline', '89030869198', 'ultimatehigh02@yahoo.com', 'The best online job for retirees. Make your old ages rich. \r\nhttps://profit-gold-strategy.life/?u=bdlkd0x&o=x7t8nng', '2022-04-14 21:49:53'),
(71, 'HenryGline', '89036593218', 'lsp37601@yahoo.com', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. \r\nhttps://profit-gold-strategy.life/?u=bdlkd0x&o=x7t8nng', '2022-04-14 22:46:06'),
(72, 'HenryGline', '89037680036', 'aaron@ephasic.org', 'The huge income without investments is available. \r\nhttps://profit-gold-strategy.life/?u=bdlkd0x&o=x7t8nng', '2022-04-15 12:55:41'),
(73, 'HenryGline', '89031490619', 'rbrockway@carolina.rr.com', 'Need cash? Launch this robot and see what it can. https://deruyteryachting.nl/gotodate/go', '2022-04-16 11:08:56'),
(74, 'HenryGline', '89036399040', 'crybry@hotmail.com', 'Earning money in the Internet is easy if you use Robot. https://deruyteryachting.nl/gotodate/go', '2022-04-17 21:29:44'),
(75, 'Denniswrict', '85436856194', 'marketing@tradeboard.biz', 'Setting up your business in Vanuatu offers unmatched advantages that include but not limited to: \r\n \r\n•	Vanuatu IBCs are tax exempt \r\n•	Domestic taxation is not payable on the net chargeable profits of Exempt and International Companies \r\n•	Vanuatu does not have party in any double taxation treaty with another country \r\n•	It  is not required to hold annual general meetings \r\n•	There is no need to file annual returns \r\n•	The international companies may name natural or legal person as directors, and may be of any nationality \r\n•	There are no exchange controls in Vanuatu \r\n \r\nAt Trade Board Limited, we can help you setup your business in Vanuatu, open local and international corporate  bank accounts and apply for Financial Dealers License (Forex and digital assets) in addition to citizenship and Permanent Residency services in tax haven tropical paradise. \r\n \r\nVisit our website to learn more about our services: \r\nhttps://tradeboard.biz \r\n \r\nOur support team is always available to respond to your inquiries. \r\n \r\nThank You for your time!', '2022-04-18 22:51:23'),
(76, 'Mike Stephen\r\n', '89346869477', 'no-replyoblild@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your brideroom.com.tr to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Stephen\r\n', '2022-04-19 18:20:05'),
(77, 'HenryGline', '89037763686', 'aof-sa.my@hotmail.com', '# 1 financial expert in the net! Check out the new Robot. https://deruyteryachting.nl/gotodate/go', '2022-04-19 18:21:13'),
(78, 'Kaybardcal', '83832439155', 'sanja.filat.ov.yg99.s@gmail.com', 'Play and fuck virtually right now https://adultgames.life/?u=wh5kd06&o=qxhpmex', '2022-04-19 20:17:24'),
(79, 'Kaymiodcal', '86985377463', 'sanja.filat.ov.yg9.9.s@gmail.com', 'Jerk off non-stop in this adult game https://adultgames.life/?u=wh5kd06&o=qxhpmex', '2022-04-19 23:30:45'),
(80, 'HenryGline', '89034127678', 'wwwlumper1@aol.com', 'One dollar is nothing, but it can grow into $100 here. https://deruyteryachting.nl/gotodate/go', '2022-04-20 10:06:12'),
(81, 'Mike Crossman\r\n', '88589919852', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Crossman\r\n \r\nsupport@digital-x-press.com', '2022-04-20 23:52:49'),
(82, 'Mike Edwards\r\n', '86858288918', 'no-replyoblild@gmail.com', 'Hi there \r\n \r\nThis is Mike Edwards\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your brideroom.com.tr SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Edwards\r\n \r\nmike@strictlydigital.net', '2022-04-25 12:23:43'),
(83, 'Venera', '0041763433890', 'veni_1989@hotmail.com', 'Good evening, I will marry on 12.08.2022 in Ankara, and I would like to change some parts of the decoration at are venue. Are you still available at this date and do you offer your service in Ankara too? Many thanks for a short response. Best regards Venera', '2022-04-25 20:38:03'),
(84, 'Douglasfault', '88891726164', 'collinsdeshon932@gmail.com', 'We have Canadian dollars, US dollars, pounds, Euros and Emirates dirham Available for sale etc. We also have our money in categories, Grade A quality that works at ATMs and bypasses the fake money detector and we also have the normal stage money that was used in jokes, commercials, music and movie videos. These bills are not home made but industrial and professionally manufactured from High Quality IT technicians from US, Russia, Korea and China. Contact us on WhatsApp +44 7459 268535 OR Email us at walterkarl28@gmail.com and Telegram ID \"@Jameskind65\"', '2022-04-27 00:59:55'),
(85, 'AnnieGep', '83351963283', 'michal.endler00@gmail.com', 'Benötigen Sie einen schnellen Barkredit? Ob für eine Situation \r\nNotfall (Krankheitskosten, Fahrzeugersatzkosten, Reparaturkosten usw.) oder für ein Projekt, eine Investitionsmöglichkeit usw.)* \r\nWir bieten Ihnen verschiedene Kreditlösungen von 5.000 € bis 5.000.000 € (mit einem niedrigen Zinssatz von 2 - 3%), um alle Projekte zu finanzieren, die Ihnen wichtig sind ...* \r\n- Schnelle Antwort in weniger als 24/H \r\n- Ohne Verpflichtung \r\n- Kostenlose Anfrage \r\nKontakt: info@socialgrouphelp.com', '2022-04-29 04:58:51'),
(86, 'Mike ', '88943219486', 'no-replyoblild@gmail.com', 'Hi there \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike  \r\nSpeed SEO Digital Agency', '2022-05-02 18:06:17'),
(87, 'Id47hco2wl', '88745754153', 'bevz_1979@inbox.ru', ' Активaция счeта  \r\nПодробнее: https://forms.yandex.ru/u/3cp94wzkl8puuiv1zm97/success/?AAAAAbrideroom.com.trBBBBB', '2022-05-02 21:12:47'),
(88, 'Robeyp', '84175868675', 'robert.b.r.o.wnmoo.nman.s@gmail.com\r\n', '<a href=https://ali.ski/9X3k1>Unusual Led Combination Lock with discount 40%</a>', '2022-05-03 02:38:35'),
(89, 'Kadverical', '87372258459', 'sanja.fila.tov.y.g.99.s@gmail.com', 'My cunt is wet. Fuck me https://ladies-location.life/?u=wh5kd06&o=qxpp80k', '2022-05-04 07:49:46'),
(90, 'Ceybbydcal', '81479982849', 'sanja.fila.tov.y.g.99s@gmail.com', 'Fuck me right now. How much longer to wait here https://ladies-location.life/?u=wh5kd06&o=qxpp80k', '2022-05-04 07:49:48'),
(91, 'Robsmvv', '83828221828', 'ro.bert.bro.w.n.moo.n.m.a.ns@gmail.com\r\n', '<a href=https://bit.ly/39pGpGX>I\'ve found the Love of My Life! And You?!</a>', '2022-05-04 08:42:02'),
(92, 'Robbpjx', '86693513245', 'rob.ert.br.ow.n.moo.n.m.ans@gmail.com\r\n', '<a href=https://bit.ly/37VMIS2>Are You Ready for a Serious Relationship?! Test for You!!!</a>', '2022-05-04 15:09:46'),
(93, 'Robnxnd', '87928782945', 'rob.ertb.ro.wnm.oo.n.ma.n.s@gmail.com\r\n', '<a href=https://ali.ski/uR-0A>Best Fat Freezing Machine with Discount 40%! Free Shipping. Summer is coming!</a>', '2022-05-05 08:36:12'),
(94, 'Olisimyc', '89455332651', 'r.od.rig.u.ez.oliv.i.a1972@gmail.com\r\n', '<a href=https://bit.ly/3vtsbxi>Are you ready for adventure?</a>', '2022-05-06 07:03:19'),
(95, 'Olisaxyc', '89172194652', 'rod.r.igu.e.zolivi.a.19.72@gmail.com\r\n', '<a href=https://ali.ski/Muh9zQ>New Smart Watch Men LIGE with discount 84% and Free Shipping</a> \r\n<a href=https://ali.ski/Muh9zQ><img src=\"https://i.ibb.co/svgJyj1/Clock.png\"></a>', '2022-05-08 00:39:43'),
(96, 'Charlottamhf', '89782585943', 'c.ha.rlottea.nde.r.so.n3.67@gmail.com\r\n', '<a href=https://bit.ly/3FpSPKH>I can\'t wait to show you an unusual pose. In the meantime, pretend I\'m doing it right now. Just don\'t go crazy with desire.</a> \r\n<a href=https://bit.ly/3FpSPKH><img src=\"https://i.ibb.co/VmRJCSZ/17.jpg\"></a>', '2022-05-08 19:35:15'),
(97, 'Robrwo', '83173496663', 'r.obe.rt.b.ro.wn.moon.man.s@gmail.com\r\n', '<a href=https://ukrainatoday.com.ua/s/VOJMN>Interactive map of Hostilities in Ukraine on May 4, 2022 Update every Day</a> \r\n<a href=https://ukrainatoday.com.ua/s/VOJMN><img src=\"https://i.ibb.co/BsVRk5b/karta-boevyh-dejstvij-5maya-1.jpg\"></a>', '2022-05-10 20:39:25'),
(98, 'Olisauak', '83759276817', 'r.od.r.iguezolivi.a.19.72@gmail.com\r\n', '<a href=https://bit.ly/3sgk1GD>The best sex site on the internet. Free Registration!!!</a> \r\n<a href=https://bit.ly/3sgk1GD><img src=\"https://i.ibb.co/rc9dxLX/202297.jpg\"></a>', '2022-05-11 05:32:45'),
(99, 'Mike Livingston\r\n', '87584291858', 'no-replyoblild@gmail.com', 'Good Day \r\n \r\nI have just took an in depth look on your  brideroom.com.tr for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Livingston\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2022-05-11 17:35:20'),
(100, 'Olisbij', '85397849635', 'r.o.d.ri.gue.zo.li.via19.7.2@gmail.com\r\n', '<a href=https://sylnaukraina.com.ua/d/wEaes>Russian combat losses in Ukraine officially Update Every Day. Comparison with other wars</a> \r\n<a href=https://sylnaukraina.com.ua/d/wEaes><img src=\"https://i.ibb.co/XXzR4tg/voina.png\"></a> \r\n<a href=https://sylnaukraina.com.ua/d/wEaes>Read more...</a>', '2022-05-12 06:01:41'),
(101, 'Charlottvbf', '81851969395', 'c.ha.rl.o.tt.ean.de.r.s.o.n.3.6.7@gmail.com\r\n', '<a href=https://bit.ly/3wboJ9P>Are You trying to trick me? Then I\'m ready to get naked and I promise to lose.</a> \r\n<a href=https://bit.ly/3wboJ9P><img src=\"https://i.ibb.co/8PzCsTm/d02478219f65d0d7be2e0c3c27c901fe.jpg\"></a>', '2022-05-12 08:25:45'),
(102, 'Arianalon', '85467857496', 'r.o.b.e.r.t.brow.nm.o.on.m.an.s@gmail.com\r\n', '<a href=https://bit.ly/3L4BXe0>Your voice is driving me crazy. Please say something else.</a> \r\n<a href=https://bit.ly/3L4BXe0><img src=\"https://i.ibb.co/JjxTKwd/946358.jpg\"></a>', '2022-05-12 10:11:10'),
(103, 'Olisiadfn', '89286662797', 'rodrig.uez.ol.iv.i.a197.2@gmail.com\r\n', '<a href=https://bit.ly/3wbzHMf>Did you miss me today? I couldn\'t stop thinking about our plans. You\'re not going to make me wait again, are you?</a>', '2022-05-12 19:58:43'),
(104, 'Anikael', '+380 2391535757', 'anikael@mail.com', 'Hеllо аll, guуsǃ Ι know, my mеѕsаgе mау bе too ѕpесific,\r\nBut mу ѕіѕter found nісe mаn hеrе and thеy mаrrіеd, sо hоw abоut mе?! :)\r\nI am 25 yеars old, Аnika, frоm Ukraine, Ι know Еngliѕh and Germаn languagеs аlso\r\nАnd... Ι havе sрeсіfіc dіsеаsе, named nymрhоmаniа. Whо know whаt is thiѕ, can underѕtand mе (bеtter tо saу іt іmmеdіаtеly)\r\nΑh уеѕ, Ι сoоk very tаѕtyǃ and I lоve nоt onlу сoоk ;))\r\nΙm reаl gіrl, nоt рrоstіtutе, and lоokіng fоr ѕeriouѕ аnd hot relаtionshіp...\r\nАnywау, yоu can fіnd my рrofile here: http://olsulessusign.tk/user/6331/ \r\n', '2022-05-12 20:08:36'),
(105, 'Charlotaoc', '81938949314', 'ch.arl.ot.tea.n.der.son3.6.7@gmail.com\r\n', '<a href=https://bit.ly/3Mm7oBC>Are You tired? Because you’ve been running through my mind all day</a> \r\n<a href=https://bit.ly/3Mm7oBC><img src=\"https://i.ibb.co/DzWWmV0/1610211656-8-p-ochen-krasivie-obnazhennie-devushki-erotik-21.jpg\"></a>', '2022-05-13 20:37:13'),
(106, 'Olisimjd', '89863793338', 'rodr.iguez.o.li.v.i.a.19.72@gmail.com\r\n', '<a href=https://bit.ly/3sfxyy2>Yoohoo, I’m over here! Pick me! Pick me!</a> \r\n<a href=https://bit.ly/3sfxyy2><img src=\"https://i.ibb.co/m0zMVq0/807305.jpg\"></a>', '2022-05-15 09:00:14'),
(107, 'Charlottecza', '85481622446', 'c.h.arl.o.t.t.eande.rs.o.n.36.7@gmail.com\r\n', '<a href=https://bit.ly/3L7KkFE>I know what to offer you tonight. Do you want this night to be unforgettable?</a>', '2022-05-15 16:32:58'),
(108, 'Charlottaxyg', '85612918847', 'ch.a.r.lot.t.ea.n.d.er.s.o.n.367@gmail.com\r\n', '<a href=https://bit.ly/3FpSPKH>I can\'t wait to show you an unusual pose. In the meantime, pretend I\'m doing it right now. Just don\'t go crazy with desire.</a> \r\n<a href=https://bit.ly/3FpSPKH><img src=\"https://i.ibb.co/VmRJCSZ/17.jpg\"></a>', '2022-05-16 05:23:39'),
(109, 'Idzmr05b1s', '89884327133', 'kuzma.avdonin@mail.ru', ' Поступило 209 642 p  \r\nПодробнее: https://google.com?xrgyep648k7xrh3wfianAAAAAbrideroom.com.trBBBBB', '2022-05-16 08:51:55'),
(110, 'Robntiv', '85263395775', 'r.o.bertb.r.o.wn.mo.o.n.m.a.n.s@gmail.com\r\n', '<a href=https://ukr-life.com.ua/s/W2got>The collapse will be Sudden and Catastrophic! Russia will Fall!!!</a> \r\n<a href=https://ukr-life.com.ua/s/W2got><img src=\"https://i.ibb.co/TLgQTrC/fucuiama-1.png\"></a> \r\n<a href=https://ukr-life.com.ua/s/W2got>Read More...</a>', '2022-05-16 17:32:51'),
(111, 'Mike Chesterton\r\n', '83735732265', 'no-replyoblild@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your brideroom.com.tr to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Chesterton\r\n', '2022-05-16 22:11:57'),
(112, 'Mike Adderiy\r\n', '81293183526', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Adderiy\r\n \r\nsupport@digital-x-press.com', '2022-05-17 16:01:11'),
(113, 'Olisambx', '88939543667', '', '<a href=https://bit.ly/3sFQ5DS>Let\'s play a little Tonight, shall We? I can\'t hold back Anymore!!!</a>', '2022-05-19 04:37:45'),
(114, 'Charlottebqv', '86261463896', 'ch.ar.l.ot.t.ea.n.d.ers.on3.67@gmail.com\r\n', '<a href=https://bit.ly/3L7KkFE>I know what to offer you tonight. Do you want this night to be unforgettable?</a>', '2022-05-21 07:30:20');
INSERT INTO `mail` (`ID`, `Name`, `PhoneNumber`, `MailAddress`, `Message`, `MessageDate`) VALUES
(115, 'Mike Samuels\r\n', '86471394617', 'no-replyoblild@gmail.com', 'Good Day \r\n \r\nThis is Mike Samuels\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your brideroom.com.tr SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Samuels\r\n \r\nmike@strictlydigital.net', '2022-05-23 11:32:59'),
(116, 'Kayteroycal', '88173594946', 'sanja.fila.t.o.vy.g.9.9.s@gmail.com', 'My nipples are hard and I\'m caressing my pussy right now. Lick my clitoris https://your-dating-place.life/?u=wh5kd06&o=qxpp80k&m=1', '2022-05-23 17:22:59'),
(117, 'Cegeicucal', '87646858393', 'sanja.fila.t.o.vy.g.99s@gmail.com', 'Fuck me right now. How much longer to wait here https://your-dating-place.life/?u=wh5kd06&o=qxpp80k&m=1', '2022-05-23 18:47:38'),
(118, 'Elizatsh', '84597722812', 'e.l.izabe.t.h.h.ern.a.n.de.z.3.w3@gmail.com\r\n', '<a href=https://bit.ly/3wBgAeN> Let\'s do what You suggested last time. I know how You want it-slow and steady...</a>', '2022-05-24 02:37:03'),
(119, 'Idhktaqfhi', '85711524645', 'axmanova.vera@inbox.ru', ' Бaлaнс зачислен  \r\nПодробнее: https://forms.yandex.ru/u/AAAAAbrideroom.com.trBBBBB/success/', '2022-05-24 07:36:18'),
(120, 'Margaretjic', '89482241911', 'ma.rgare.l.ove.t.r.o.b.ert.s@gmail.com\r\n', '<a href=https://bit.ly/3wboJ9P>Are You trying to trick me? Then I\'m ready to get naked and I promise to lose.</a> \r\n<a href=https://bit.ly/3wboJ9P><img src=\"https://i.ibb.co/m0zMVq0/807305.jpg\"></a>', '2022-05-24 09:44:28'),
(121, 'Charlotmoy', '86429957585', 'c.ha.rl.ottea.n.d.ers.o.n.3.67@gmail.com\r\n', '<a href=https://bit.ly/3Mm7oBC>Are You tired? Because you’ve been running through my mind all day</a> \r\n<a href=https://bit.ly/3Mm7oBC><img src=\"https://i.ibb.co/DzWWmV0/1610211656-8-p-ochen-krasivie-obnazhennie-devushki-erotik-21.jpg\"></a>', '2022-05-24 13:05:56'),
(122, 'Olisknt', '86561658278', 'rodri.gue.zoli.vi.a197.2@gmail.com\r\n', '<a href=https://sylnaukraina.com.ua/d/wEaes>Russian combat losses in Ukraine officially Update Every Day. Comparison with other wars</a> \r\n<a href=https://sylnaukraina.com.ua/d/wEaes><img src=\"https://i.ibb.co/XXzR4tg/voina.png\"></a> \r\n<a href=https://sylnaukraina.com.ua/d/wEaes>Read more...</a>', '2022-05-24 13:33:33'),
(123, 'Dorotnyb', '86733731222', 'a.nders.ondo.ro.thy6.7.1.2@gmail.com\r\n', '<a href=https://goo.su/K89z>Today at our meeting we really need Your firm and resilient Friend, will You take it?</a> \r\n<a href=https://goo.su/K89z><img src=\"https://i.ibb.co/1zxbjMm/6a57cd7176bea16c490db8096d1e108a.webp\"></a>', '2022-05-25 00:28:00'),
(124, 'Olisiaddr', '87486812392', 'rodr.i.g.u.e.z.o.li.v.ia.197.2@gmail.com\r\n', '<a href=https://bit.ly/3lmg8fq>Did you miss me today? I couldn\'t stop thinking about our plans. You\'re not going to make me wait again, are you?</a>', '2022-05-25 14:04:14'),
(125, 'Robwtd', '89654358584', '', '<a href=https://ukrainatoday.com.ua/s/lvhfW>32,340 Burgers And Counting: Man In US Celebrates 50 Years Of Eating Big Macs</a> \r\n<a href=https://ukrainatoday.com.ua/s/lvhfW><img src=\"https://i.ibb.co/23vY8rw/bigmak6.jpg\"></a> \r\n<a href=https://ukrainatoday.com.ua/s/lvhfW>Read More...</a>', '2022-05-26 05:42:17'),
(126, 'Robnwtk', '85217352764', 'ro.b.e.rtbro.w.nm.oon.m.an.s@gmail.com\r\n', '<a href=https://ukr-life.com.ua/s/gI49x>It\'s fantastic!!! Boy, 11, catches world’s biggest carp that’s just a few lbs lighter than him</a> \r\n<a href=https://ukr-life.com.ua/s/gI49x><img src=\"https://i.ibb.co/F56Zk64/fish-2.webp\"></a> \r\n<a href=https://ukr-life.com.ua/s/gI49x>Read More...</a>', '2022-05-28 21:48:09'),
(127, 'Charlotte Gabriel', '84117292593', 'charlottegabriel@stayhome.li', 'Hello, \r\n \r\nI\'m Charlotte Gabriel, An online trading Coash. I want you to know that online trading (Crypto, Forex and Binary option) is a good thing if you have a good trading strategy, I use to lose a lot of funds in online trading before I got to where I am today. If you need assistance on how to trade and recover back all the money you have lost to your broker and want to be a successful online trader like me, write to me via email below to get an amazing strategy. \r\n \r\nIf you are having problems withdrawing your profit from your Crypto, Forex or Binary option trading account even when you were given a bonus, just contact me, I have worked with some Trade, Regulatory Agencies for 9years, and I have helped a lot of people get back their lost funds from their stubborn brokers successfully and I won\'t stop until I have helped as many as possible. For more info you can contact me via my email address: charlgabriel06@gmail.com \r\n \r\nKind Regards, \r\nCharlotte Gabriel. \r\nTrading Consultant.', '2022-05-29 09:20:31'),
(128, 'Mike ', '89214151213', 'no-replyoblild@gmail.com', 'Greetings \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike  \r\nSpeed SEO Digital Agency', '2022-05-30 22:01:19'),
(129, 'Zuki Chang', '83447324152', 'info.meiwa@via.tokyo.jp', 'Hello, \r\n \r\nIf you are based in the United States of America, Meiwa Corporation Co, Ltd urgently needs you to serve as her Spokesperson/Financial Coordinator for its clients in the United States. It\'s a part-time job with a good pay and will only take a few minutes of your time daily, and it will not bring any conflict of interest in case you are working with another company. If interested, contact email: info@meiwacorporations.com \r\n \r\n \r\nBest Regards \r\nZuki Chang \r\nMeiwa Corporation co.Ltd. \r\n3-chome, Chiyoda-ku, \r\nTokyo 100-8311, Japan', '2022-05-31 12:51:24'),
(130, 'Josephiaimsl', '81292381411', 'j.o.s.e.p.hi.n.eg.ut.ie.rr.ez19.90@gmail.com\r\n', '<a href=https://goo.su/5O4dh9B>What\'s up? Chat? I like 30-39 old guys, is it You?</a>', '2022-05-31 16:44:47'),
(131, 'MichaelBlupt', '88922958549', 'mahsunaltuncom@gmail.com', 'http://mahsunaltun.com ile detaylı dijital çözümler için mahsunn.com yada mahsunaltun.com ile ilietişime geçip detaylı bilgi öğrenimi sahibi olabilirsiniz. WEB HOSTİNG, WEB SUNUCU, GRAFİK TASARIM, LOGO TASARIM, MUHASEBE PROGRAMLARI, E-FATURA VE DİĞER TÜM İŞLEM VE GEREKÇELER DAHİLİNDE HİZMET VERİYORUZ. AYRICA MARKET OTOMASYONLARI, HAL TAKİP PROGRAMLARI MUHASEBE PROGRAMLARI ADI ALTINDA HİZMET VERİLMEKTEDİR. Bilgi ve ücretsiz danışmanlık için bizimle iletişime geçin.', '2022-06-01 11:17:26'),
(132, 'Ide5npl8z5', '86431714758', 'polynkina84@list.ru', ' \r\n Оплата найдена,важно  \r\n \r\nПодробнее: https://drive.google.com/file/d/AAAAAbrideroom.com.trBBBBB/view', '2022-06-03 11:36:56'),
(133, 'HenryGline', '89034231745', 'RookTessa9292@o2.pl', 'Yatırımsız büyük gelir şimdi mevcut! https://Gline.bode-roesch.de/Gline ', '2022-06-03 20:24:52'),
(134, 'HenryGline', '89033020058', 'RookTessa9292@o2.pl', 'Bu robot size 7/24 para getirebilir. https://Gline.bode-roesch.de/Gline ', '2022-06-05 00:05:42'),
(135, 'Elizazth', '84582786748', 'e.li.za.be.t.hher.nandez.3.w.3@gmail.com\r\n', '<a href=https://goo.su/yiFLG>Despite the distance, we\'re both going to have a very good time tonight. And you know exactly what it takes.</a>', '2022-06-05 21:18:25'),
(136, 'HenryGline', '89036633451', 'martincph@forum.dk', 'Harika bir kar elde etmenin en yeni yoluna göz atın. https://Gline.bode-roesch.de/Gline ', '2022-06-05 22:53:00'),
(137, 'HenryGline', '89035393262', 'camillaberetehansen@forum.dk', 'Finansal robot zengin insanların en iyi arkadaşıdır. https://Gline.bode-roesch.de/Gline ', '2022-06-06 01:50:18'),
(138, 'Margaretaom', '83345331528', 'mar.ga.rel.ov.e.t.rober.ts@gmail.com\r\n', '<a href=https://goo.su/GPXgt6>I think of you so often, especially at night. Why don\'t you come over and remind me of what we both enjoyed so much last week?</a> \r\n<a href=https://goo.su/GPXgt6><img src=\"https://i.ibb.co/m0zMVq0/807305.jpg\"></a>', '2022-06-06 02:37:46'),
(139, 'HenryGline', '89037529741', 'sukulent@forum.dk', 'Geleceğimizi nasıl zenginleştireceğimizi biliyoruz ve siz biliyor musunuz? https://Gline.bode-roesch.de/Gline ', '2022-06-06 04:46:33'),
(140, 'HenryGline', '89037102317', 'dayzmod@forum.dk', 'Artık iş aramaya gerek yok. Çevrimiçi çalışın. https://Gline.bode-roesch.de/Gline ', '2022-06-06 07:43:38'),
(141, 'HenryGline', '89030085136', 'gas@forum.dk', 'Yatırımsız büyük gelir elde edilebilir. https://Gline.bode-roesch.de/Gline ', '2022-06-06 10:40:42'),
(142, 'HenryGline', '89030444900', 'dennisp77@forum.dk', 'Paraya mı ihtiyacınız var? Buraya kolayca getir! Robotu çalıştırmak için buna basmanız yeterli. https://Gline.bode-roesch.de/Gline ', '2022-06-06 13:39:49'),
(143, 'HenryGline', '89031563123', 'ira90983418@mailme.dk', 'Bu robotu kullanırsanız binlerce dolar garanti edilir. https://Gline.bode-roesch.de/Gline ', '2022-06-06 16:39:41'),
(144, 'HenryGline', '89038342241', 'kabell@mailme.dk', 'Her hafta binlerce dolar kazanmaya başlayın. https://Gline.bode-roesch.de/Gline ', '2022-06-06 19:36:50'),
(145, 'HenryGline', '89037310245', 'leube@forum.dk', 'Binlerce dolar kazan. Finansal robot bunu yapmanıza yardımcı olacak! https://Gline.bode-roesch.de/Gline ', '2022-06-06 22:33:19'),
(146, 'HenryGline', '89034412574', 'avi@mail-online.dk', 'Dolarınızı Robota emanet edin ve 100 dolara nasıl ulaştığını görün. https://Gline.bode-roesch.de/Gline ', '2022-06-07 01:28:07'),
(147, 'Dorothhy', '82991294265', 'an.d.ers.ondo.r.o.th.y.6.71.2@gmail.com\r\n', '<a href=https://goo.su/yllPzYp>Are you lost in thought or in the folds of my skirt?</a>', '2022-06-07 01:56:22'),
(148, 'HenryGline', '89036974117', 'missme@forum.dk', 'İnternetteki en iyi finansal robotu deneyin. https://Gline.bode-roesch.de/Gline ', '2022-06-07 04:28:05'),
(149, 'HenryGline', '89032021254', 'koxbox@forum.dk', 'Her hafta binlerce dolar kazanmaya başlayın. https://Gline.bode-roesch.de/Gline ', '2022-06-07 07:22:59'),
(150, 'HenryGline', '89038698380', 'qweasd-108@mailme.dk', 'Nakit ihtiyacınız var? Bu robotu çalıştır ve neler yapabileceğini gör. https://Gline.bode-roesch.de/Gline ', '2022-06-07 10:18:13'),
(151, 'HenryGline', '89038196781', 'ravrv07@mail.ru', 'Paraya mı ihtiyacınız var? Finansal robot sizin çözümünüzdür. https://Gline.bode-roesch.de/Gline ', '2022-06-07 13:15:16'),
(152, 'HenryGline', '89030402424', 'lnkp_runemand@forum.dk', 'Nakit ihtiyacınız var? Bu robotu çalıştır ve neler yapabileceğini gör. https://Gline.blueliners07.de/Gline ', '2022-06-08 06:59:23'),
(153, 'Jessicakiv', '86141834211', 'jessi.c.a.gi.r.l.p.ete.rs.on@gmail.com\r\n', '<a href=https://goo.su/x8Ev>Did you miss me today? I couldn\'t stop thinking about our plans. You\'re not going to make me wait again, are you?</a>', '2022-06-08 07:19:53'),
(154, 'HenryGline', '89036857684', 'amalie.pouline@forum.dk', 'Robot asla uyumaz. 7/24 sana para kazandırıyor. https://Gline.blueliners07.de/Gline ', '2022-06-08 09:51:54'),
(155, 'Robhgc', '87772345232', '', '<a href=https://ukrainatoday.com.ua/s/lvhfW>32,340 Burgers And Counting: Man In US Celebrates 50 Years Of Eating Big Macs</a> \r\n<a href=https://ukrainatoday.com.ua/s/lvhfW><img src=\"https://i.ibb.co/23vY8rw/bigmak6.jpg\"></a> \r\n<a href=https://ukrainatoday.com.ua/s/lvhfW>Read More...</a>', '2022-06-08 10:03:31'),
(156, 'HenryGline', '89033254188', 'kryloff.alessandro@mailme.dk', 'Finansal Robotu kullanarak çevrimiçi çalışmanıza başlayın. https://Gline.blueliners07.de/Gline ', '2022-06-08 12:48:31'),
(157, 'Charlotdoi', '82593285169', 'cha.rlo.t.te.a.n.d.e.r.son.3.67@gmail.com\r\n', '<a href=https://goo.su/5mp341>I suggest we play truth or dare. But tonight, no truth, just sex...</a>', '2022-06-08 13:06:45'),
(158, 'HenryGline', '89032204428', 'dk@mailme.dk', 'Bu robot her gün yüzlerce dolar kazanmanıza yardımcı olacak. https://Gline.blueliners07.de/Gline ', '2022-06-08 15:48:24'),
(159, 'Mike Jenkin\r\n', '89215588387', 'no-replyoblild@gmail.com', 'Hi there \r\n \r\nI have just checked  brideroom.com.tr for its SEO Trend and saw that your website could use a push. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Jenkin\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2022-06-08 18:19:22'),
(160, 'HenryGline', '89033733059', 'christoph@mail-online.dk', 'Bu Robotu kullanırsanız bilgisayarınız size ek gelir getirebilir. https://Gline.blueliners07.de/Gline ', '2022-06-08 18:45:32'),
(161, 'HenryGline', '89032806964', 'dalle78@forum.dk', 'Paraya mı ihtiyacınız var? Burada kolayca anladın mı? https://Gline.blueliners07.de/Gline ', '2022-06-08 21:43:45'),
(162, 'HenryGline', '89036818178', 'ichbineinber@forum.dk', 'Küçük yatırımlar hızlı bir şekilde tonlarca dolar getirebilir. https://Gline.blueliners07.de/Gline ', '2022-06-09 00:43:56'),
(163, 'HenryGline', '89035070845', 'tatooo@forum.dk', 'Paraya mı ihtiyacınız var? Finansal robot sizin çözümünüzdür. https://Gline.blueliners07.de/Gline ', '2022-06-09 03:40:52'),
(164, 'HenryGline', '89038273144', 'jegheddermulan@forum.dk', 'Herkes bu Botu dava ederek istediği kadar kazanabilir. https://Gline.blueliners07.de/Gline ', '2022-06-09 06:41:58'),
(165, 'HenryGline', '89039295485', 'val_nissen74@mailme.dk', 'Finansal Robot, ağdaki en etkili finansal araçtır! https://Gline.blueliners07.de/Gline ', '2022-06-09 09:38:37'),
(166, 'HenryGline', '89030060990', 'duke-hk8@mailme.dk', 'Gün boyu kazanmaya devam etmek için otomatik robotu deneyin. https://Gline.blueliners07.de/Gline ', '2022-06-09 12:32:40'),
(167, 'HenryGline', '89039049561', 'auuto733@mailme.dk', 'Para kazan, savaş değil! Finansal Robot ihtiyacınız olan şey. https://Gline.blueliners07.de/Gline ', '2022-06-09 15:22:11'),
(168, 'HenryGline', '89030766840', 'frgne@forum.dk', 'Bu Robotu kullanırsanız çevrimiçi iş gerçekten etkili olabilir. https://Gline.blueliners07.de/Gline ', '2022-06-09 18:09:34'),
(169, 'HenryGline', '89035943956', 'polyakov-mihail023@mailme.dk', 'Finansal Robot, ağdaki en etkili finansal araçtır! https://Gline.blueliners07.de/Gline ', '2022-06-10 02:35:31'),
(170, 'HenryGline', '89031794622', 'jsba@forum.dk', 'Daha fazla para kazanmak için Robotu çalıştırmanın en iyi zamanı. https://Gline.blueliners07.de/Gline ', '2022-06-10 13:02:33'),
(171, 'Miocal', '84624661287', 'unmasksisado.r.e.4.8@gmail.com', 'Fuck me right now. How much longer to wait here https://u.to/ne8sHA', '2022-06-10 15:57:00'),
(172, 'HenryGline', '89038356257', 'lars_engel@mailme.dk', 'Nakit ihtiyacınız var? Bu robotu çalıştır ve neler yapabileceğini gör. https://Gline.coronect.de/Gline ', '2022-06-10 17:44:24'),
(173, 'HenryGline', '89031060427', 'camillalager24@forum.dk', 'Nakit ihtiyacınız var? Bu robotu çalıştır ve neler yapabileceğini gör. https://Gline.coronect.de/Gline ', '2022-06-10 20:33:03'),
(174, 'Charlottevpt', '87715951518', 'je.ssi.c.a.gi.r.l.p.et.ers.o.n@gmail.com\r\n', '<a href=https://goo.su/2ypP30>I know what to offer you tonight. Do you want this night to be unforgettable?</a>', '2022-06-10 21:39:22'),
(175, 'HenryGline', '89036618814', 's-kristoffersen@jubiipost.dk', 'Bu finansal robotu kullanırsanız gelecek hakkında endişelenmenize gerek yok. https://Gline.coronect.de/Gline ', '2022-06-10 23:20:59'),
(176, 'HenryGline', '89037602585', 'bodil-louise@forum.dk', 'Finansal robot uyurken sana para getirmeye devam ediyor. https://Gline.coronect.de/Gline ', '2022-06-11 02:10:02'),
(177, 'HenryGline', '89037406479', 'karennielsen@forum.dk', 'Para, para! Finansal robot ile daha fazla para kazanın! https://Gline.coronect.de/Gline ', '2022-06-11 04:59:40'),
(178, 'HenryGline', '89039385570', 'hellemajbrittjacobsen@forum.dk', 'Yarın 1000 dolar kazanmak için bugün 1 dolar yatırım yapın. https://Gline.coronect.de/Gline ', '2022-06-11 07:40:15'),
(179, 'HenryGline', '89030915936', 'jegbestemmer@mail-online.dk', 'Finansal Robotu kullanırsanız para kazanmak çok kolaydır. https://Gline.coronect.de/Gline ', '2022-06-11 10:30:34'),
(180, 'HenryGline', '89031996872', 'kpmailss@mailme.dk', 'Dinlenirken Robotun sana para getirmesine izin ver. https://Gline.coronect.de/Gline ', '2022-06-11 13:18:24'),
(181, 'Liocal', '88893438931', 'unmasksisad.ore48@gmail.com', 'My cunt is wet.. Put your dick in me right now https://xbebz.sweetmlif.net/c/da57dc555e50572d?s1=12179&s2=1471083&j1=1', '2022-06-11 16:03:17'),
(182, 'HenryGline', '89039608393', 'irina1875@mailme.dk', 'Zengin olmak için finansal Bota güvenin. https://Gline.coronect.de/Gline ', '2022-06-11 16:05:06'),
(183, 'HenryGline', '89031411746', 'josholiver03@mailme.dk', 'Zenginler zengindir çünkü bu robotu kullanırlar. https://Gline.coronect.de/Gline ', '2022-06-11 18:54:02'),
(184, 'Kqocal', '85572728751', 'unmasksisad.ore4.8@gmail.com', 'My tits and pussy are flowing right now. Lick them up, I can\'t wait anymore, squirt soon well, ohhhhhh https://xbebz.sweetmlif.net/c/da57dc555e50572d?s1=12179&s2=1471083&j1=1', '2022-06-11 20:38:23'),
(185, 'HenryGline', '89034661331', 'jeopardy_jeppe@forum.dk', 'Hala milyoner değil misin? Finansal robot seni o yapacak! https://Gline.coronect.de/Gline ', '2022-06-11 21:42:41'),
(186, 'HenryGline', '89037742922', 'ccaa01@forum.dk', 'Zengin olmanın en hızlı yolunu bulduk. Burayı bulmak. https://Gline.coronect.de/Gline ', '2022-06-12 00:30:05'),
(187, 'HenryGline', '89039836317', 'thomasnn@mail-online.dk', 'Her gün yüzlerce sırt yapmayı öğrenin. https://Gline.coronect.de/Gline ', '2022-06-12 03:13:47'),
(188, 'HenryGline', '89037415126', 'mianonbo@forum.dk', 'Vay canına! Bu finansal bağımsızlık için en hızlı yoldur. https://Gline.coronect.de/Gline ', '2022-06-12 06:00:36'),
(189, 'HenryGline', '89039776742', 'kmr@forum.dk', 'Robot, finansal bağımsızlık arayan herkes için en iyi yoldur. https://Gline.coronect.de/Gline ', '2022-06-12 08:47:24'),
(190, 'HenryGline', '89039788878', 'mieskarlsen444@mailme.dk', 'Finansal robot uyurken sana para getirmeye devam ediyor. https://Gline.coronect.de/Gline ', '2022-06-12 11:34:18'),
(191, 'HenryGline', '89038859047', 'brickwall@forum.dk', 'Başarı formülü bulunur. Bu konuda daha fazla bilgi edinin. https://Gline.coronect.de/Gline ', '2022-06-12 14:23:03'),
(192, 'HenryGline', '89033617364', 'hoen2@forum.dk', 'Finansal bağımsızlığın en hızlı yolu hakkında bilgi edinin. https://Gline.coronect.de/Gline ', '2022-06-12 17:13:03'),
(193, 'HenryGline', '89031374932', 'sommervejr22@forum.dk', 'Finansal robot zengin insanların en iyi arkadaşıdır. https://Gline.coronect.de/Gline ', '2022-06-12 20:04:18'),
(194, 'HenryGline', '89031424126', 'torisuzaki@mailme.dk', 'Kovulursan endişelenme. Çevrimiçi çalışın. https://Gline.coronect.de/Gline ', '2022-06-12 22:54:24'),
(195, 'HenryGline', '89031385084', 'tommyerling@forum.dk', 'Çevrimiçi para kazanmak istediğiniz her şeyi satın alın. https://Gline.coronect.de/Gline ', '2022-06-13 01:45:25'),
(196, 'HenryGline', '89039441492', 'ligusterhaek@forum.dk', 'Yatırımsız büyük gelir şimdi mevcut! https://Gline.coronect.de/Gline ', '2022-06-13 04:30:35'),
(197, 'HenryGline', '89035486527', 'linkigirla@mailme.dk', 'Birkaç dakika içinde 1 dolardan 1000 dolar kazanın. Finansal robotu hemen çalıştırın. https://Gline.coronect.de/Gline ', '2022-06-13 07:22:56'),
(198, 'HenryGline', '89030160343', 'thodgkis@bigpond.net.au', 'Robot, kazanmak isteyen herkes için en iyi çözümdür. https://Gline.coronect.de/Gline ', '2022-06-13 10:11:36'),
(199, 'HenryGline', '89039013270', 'sander@forum.dk', 'Bu Robotu kullanmak sizi zengin etmenin en iyi yoludur. https://Gline.coronect.de/Gline ', '2022-06-13 13:00:07'),
(200, 'HenryGline', '89036283763', 'venusvej1@forum.dk', 'Bu Robotu yedikten sonra her doların 100 dolara dönüşebilir. https://Gline.coronect.de/Gline ', '2022-06-13 15:47:19'),
(201, 'HenryGline', '89035404819', 'aleks-p72@mailme.dk', 'Sadece bu robotu kullanarak her hafta binlerce dolar kazanmaya başlayın. https://Gline.coronect.de/Gline ', '2022-06-13 18:35:00'),
(202, 'HenryGline', '89033031834', 'mdrossen@forum.dk', 'Bu soğuk kışın evde kalarak internetten para kazanın. https://Gline.coronect.de/Gline ', '2022-06-13 21:15:05'),
(203, 'HenryGline', '89030597830', 'christabelbryant@yahoo.com', 'Harika bir kar elde etmenin en yeni yoluna göz atın. https://Gline.coronect.de/Gline ', '2022-06-14 00:00:56'),
(204, 'HenryGline', '89034848251', 'mil@mail-online.dk', 'Uyurken bile paran çalışıyor. https://Gline.coronect.de/Gline ', '2022-06-14 02:48:08'),
(205, 'HenryGline', '89034420141', 'iortl@mailme.dk', 'Finansal robot sizin başarı formülünüzdür. Bu konuda daha fazla bilgi edinin. https://Gline.coronect.de/Gline ', '2022-06-14 05:35:14'),
(206, 'HenryGline', '89033438668', 'suspekt@forum.dk', 'Yarın 1000 dolar kazanmak için bugün 1 dolar yatırım yapın. https://Gline.coronect.de/Gline ', '2022-06-14 08:18:42'),
(207, 'HenryGline', '89038578614', 'kfjespersen@forum.dk', 'Burada para kazanan başarılı insanlar topluluğuna katılın. https://Gline.coronect.de/Gline ', '2022-06-14 11:00:51'),
(208, 'HenryGline', '89038780212', 'patip2@mailme.dk', 'Finansal robot herkesin istikrarını ve gelirini garanti eder. https://Gline.coronect.de/Gline ', '2022-06-14 13:47:06'),
(209, 'HenryGline', '89039613246', 'helu@forum.dk', 'Zengin olmak için finansal Bota güvenin. https://Gline.coronect.de/Gline ', '2022-06-14 16:26:12'),
(210, 'HenryGline', '89034131494', 'danmankov@jubiipost.dk', 'Sadece tek bir tıklama sizi 1000 dolara dönüştürebilir. https://Gline.coronect.de/Gline ', '2022-06-14 19:06:59'),
(211, 'HenryGline', '89033141696', 'jose08@forum.dk', 'Finansal robot herkesin istikrarını ve gelirini garanti eder. https://Gline.coronect.de/Gline ', '2022-06-14 21:48:01'),
(212, 'HenryGline', '89039711334', 'jens.keblat@mailme.dk', 'Bir çocuk bile bugün bu robotun yardımıyla 100 dolar kazanmayı biliyor. https://Gline.coronect.de/Gline ', '2022-06-15 00:31:07'),
(213, 'Mike Mansfield\r\n', '87683411353', 'no-replyoblild@gmail.com', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your brideroom.com.tr to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Mansfield\r\n', '2022-06-15 00:34:15'),
(214, 'HenryGline', '89031711958', 'rowe@forum.dk', 'Paraya mı ihtiyacınız var? Buraya kolayca getir! Robotu çalıştırmak için buna basmanız yeterli. https://Gline.coronect.de/Gline ', '2022-06-15 03:14:13'),
(215, 'HenryGline', '89037497523', 'avk@forum.dk', 'Bu robot her gün yüzlerce dolar kazanmanıza yardımcı olacak. https://Gline.coronect.de/Gline ', '2022-06-15 06:02:41'),
(216, 'HenryGline', '89038043853', 'charlmil@forum.dk', 'Harika bir kar elde etmenin en yeni yoluna göz atın. https://Gline.coronect.de/Gline ', '2022-06-15 08:49:48'),
(217, 'HenryGline', '89037032450', 'intrancy@mailme.dk', 'Bu robot her gün yüzlerce dolar kazanmanıza yardımcı olacak. https://Gline.coronect.de/Gline ', '2022-06-15 11:35:08'),
(218, 'HenryGline', '89036661537', 'satyren64@forum.dk', 'Para kazan, savaş değil! Finansal Robot ihtiyacınız olan şey. https://Gline.coronect.de/Gline ', '2022-06-15 14:27:24'),
(219, 'HenryGline', '89031981508', 'dianagiulia@forum.dk', 'Çaba harcamadan ek para kazanın. https://Gline.coronect.de/Gline ', '2022-06-15 17:12:54'),
(220, 'HenryGline', '89034162254', '6liv@forum.dk', 'Paranı gün boyu işine yarat. https://Gline.coronect.de/Gline ', '2022-06-15 20:01:14'),
(221, 'HenryGline', '89039574109', 'elenashherbakov@mailme.dk', 'Bu Robotu kullanırsanız para kazanmak son derece kolay olabilir. https://Gline.coronect.de/Gline ', '2022-06-15 22:45:37'),
(222, 'HenryGline', '89035880612', 'li2a2006@mailme.dk', 'Robotu kullanırsanız internette para kazanmak kolaydır. https://Gline.coronect.de/Gline ', '2022-06-16 01:33:18'),
(223, 'HenryGline', '89035227996', 'xzexx@mailme.dk', 'Çevrimiçi iş size harika bir kar getirebilir. https://Gline.coronect.de/Gline ', '2022-06-16 04:20:22'),
(224, 'HenryGline', '89031044422', 'fraektpar9000@forum.dk', 'Finansal Robotu kullanırsanız paranız 7/24 büyümeye devam eder. https://Gline.coronect.de/Gline ', '2022-06-16 07:12:04'),
(225, 'HenryGline', '89034090169', 'ka.j@forum.dk', 'Gelir için sabırsızlanıyor musunuz? Online olmak istiyorum. https://Gline.coronect.de/Gline ', '2022-06-16 09:58:08'),
(226, 'HenryGline', '89035355271', 'tennahansen@mail-online.dk', 'Zengin olmak için finansal Bota güvenin. https://Gline.bode-roesch.de/Gline ', '2022-06-16 12:45:22'),
(227, 'HenryGline', '89035124936', 'mta@jubiipost.dk', 'Bu Botu kullanarak internette para kazanın. Gerçekten işe yarıyor! https://Gline.bode-roesch.de/Gline ', '2022-06-16 15:33:51'),
(228, 'Mike Adamson\r\n', '85875678414', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Adamson\r\n \r\nsupport@digital-x-press.com', '2022-06-16 17:13:51'),
(229, 'HenryGline', '89036182426', 'heigjieopk@forum.dk', 'Bu Robotu kullanırsanız para kazanmak son derece kolay olabilir. https://Gline.bode-roesch.de/Gline ', '2022-06-16 18:23:39'),
(230, 'HenryGline', '89038649035', 'hr.hund@forum.dk', 'Biraz daha paraya mı ihtiyacın var? Robot onları çok hızlı kazanacak. https://Gline.bode-roesch.de/Gline ', '2022-06-16 21:17:06'),
(231, 'HenryGline', '89036494722', 'lidiya1409@mailme.dk', 'Finansal Robotu kullanarak çevrimiçi çalışmanıza başlayın. https://Gline.bode-roesch.de/Gline ', '2022-06-17 00:08:38'),
(232, 'HenryGline', '89032714184', 'kaloo88@forum.dk', 'Ağda para kazanmak artık daha kolay. https://Gline.bode-roesch.de/Gline ', '2022-06-17 03:19:39'),
(233, 'HenryGline', '89037722288', 'tailwind@forum.dk', 'Çevrimiçi gelir, hayalinizi gerçekleştirmenin en kolay yoludur. https://Gline.bode-roesch.de/Gline ', '2022-06-17 06:12:17'),
(234, 'HenryGline', '89031925657', 'heha510@mailme.dk', 'Para kazanmak için kolay bir yol mu arıyorsunuz? Finans robotuna bak. https://Gline.bode-roesch.de/Gline ', '2022-06-17 08:57:33'),
(235, 'HenryGline', '89030179071', 'tina.gade@forum.dk', 'Küçük yatırımlar hızlı bir şekilde tonlarca dolar getirebilir. https://Gline.fannyberlin.se/Gline ', '2022-06-17 11:43:12'),
(236, 'HenryGline', '89033752119', 'joanna999@forum.dk', 'Çoğu başarılı insan zaten Robot kullanıyor. Musun? https://Gline.fannyberlin.se/Gline ', '2022-06-17 14:29:11'),
(237, 'HenryGline', '89036656779', 's-agachev@mailme.dk', 'Evde kalarak dolar kazan ve bu Botu başlat. https://Gline.fannyberlin.se/Gline ', '2022-06-17 17:14:07'),
(238, 'HenryGline', '89031490027', 'mini14@mailme.dk', 'Bu Robotu yedikten sonra her doların 100 dolara dönüşebilir. https://Gline.fannyberlin.se/Gline ', '2022-06-17 22:51:42'),
(239, 'HenryGline', '89030217529', 'yorulmaz_31@forum.dk', 'Dikkat! Finansal robot size milyonlar getirebilir! https://Gline.fannyberlin.se/Gline ', '2022-06-18 01:34:44'),
(240, 'HenryGline', '89032559633', 'gumulie@forum.dk', 'Finansal Robot uyurken bile sizin için çalışıyor. https://Gline.fannyberlin.se/Gline ', '2022-06-18 04:18:42'),
(241, 'HenryGline', '89037687982', 'jaythornton38974@mailme.dk', 'Para kazan, savaş değil! Finansal Robot ihtiyacınız olan şey. https://Gline.fannyberlin.se/Gline ', '2022-06-18 07:05:38'),
(242, 'HenryGline', '89032761007', 'edward348@mailme.dk', 'Evde kalarak dolar kazan ve bu Botu başlat. https://Gline.fannyberlin.se/Gline ', '2022-06-18 09:47:57'),
(243, 'HenryGline', '89037010072', 'eldritch@forum.dk', '7/24 sizin için çalışan otomatik Bota göz atın. https://Gline.fannyberlin.se/Gline ', '2022-06-18 12:34:06'),
(244, 'HenryGline', '89036480003', 'pries@forum.dk', 'Finansal Robotun finansal piyasadaki arkadaşınız olmasına izin verin. https://Gline.fannyberlin.se/Gline ', '2022-06-18 15:22:10'),
(245, 'HenryGline', '89032297283', 'jajs@forum.dk', 'Para kazan, savaş değil! Finansal Robot ihtiyacınız olan şey. https://Gline.fannyberlin.se/Gline ', '2022-06-18 18:08:21'),
(246, 'HenryGline', '89038606331', 'nete@mail-online.dk', 'Bu robot size 7/24 para getirebilir. https://Gline.fannyberlin.se/Gline ', '2022-06-18 21:01:12'),
(247, 'HenryGline', '89033609687', 'ove.to@mailme.dk', 'Çevrimiçi para kazanmak istediğiniz her şeyi satın alın. https://Gline.fannyberlin.se/Gline ', '2022-06-18 23:48:53'),
(248, 'HenryGline', '89038331454', 'djfugl@jubiipost.dk', 'Para kazanmanın en kolay yolu hakkında bilgi edinin. https://Gline.fannyberlin.se/Gline ', '2022-06-19 02:37:12'),
(249, 'HenryGline', '89032191150', 'matthias.r@forum.dk', 'Hala milyoner değil misin? Hemen düzelt! https://Gline.fannyberlin.se/Gline ', '2022-06-19 05:24:13'),
(250, 'HenryGline', '89039398923', 'irina2008i@mailme.dk', 'Hala milyoner değil misin? Hemen düzelt! https://Gline.fannyberlin.se/Gline ', '2022-06-19 07:28:52'),
(251, 'HenryGline', '89034756037', 'to.bi@forum.dk', 'Finansal Robot uyurken bile sizin için çalışıyor. https://Gline.fannyberlin.se/Gline ', '2022-06-19 10:13:10'),
(252, 'HenryGline', '89038999084', 'gummidreng@mail-online.dk', 'Paraya mı ihtiyacınız var? Evinizden çıkmadan kazanın. https://Gline.fannyberlin.se/Gline ', '2022-06-19 12:59:48'),
(253, 'HenryGline', '89036718435', 'walter-11@mailme.dk', 'Bu program ile dizüstü bilgisayarınızı bir finansal araç haline getirin. https://Gline.fannyberlin.se/Gline ', '2022-06-19 15:44:00'),
(254, 'HenryGline', '89037291088', 'issis@mail-online.dk', 'Para kazan, savaş değil! Finansal Robot ihtiyacınız olan şey. https://Gline.fannyberlin.se/Gline ', '2022-06-19 18:25:24'),
(255, 'HenryGline', '89034169161', 'maestrodima@mailme.dk', 'Bu Robotu kullanırsanız para kazanmak son derece kolay olabilir. https://Gline.fannyberlin.se/Gline ', '2022-06-19 21:14:34'),
(256, 'HenryGline', '89034691837', 'adm-dir@mail-online.dk', 'Dikkat! Finansal robot size milyonlar getirebilir! https://borisvonsmercek.de/Gline ', '2022-06-20 00:36:44'),
(257, 'HenryGline', '89039195446', 'fivilkina-olga@mailme.dk', 'Geleceğimizi nasıl zenginleştireceğimizi biliyoruz ve siz biliyor musunuz? https://Gline.baleti-design.fr/Gline ', '2022-06-20 03:26:01'),
(258, 'HenryGline', '89034734714', 'witten@forum.dk', 'Finansal robot herkesin istikrarını ve gelirini garanti eder. https://Gline.compras2u.es/Gline ', '2022-06-20 06:15:18'),
(259, 'HenryGline', '89037185457', 'pkrmads@forum.dk', 'Uyurken bile paran çalışıyor. https://Gline.amalgamas.es/Gline ', '2022-06-20 09:04:50'),
(260, 'HenryGline', '89031294101', 'anne-lund@forum.dk', 'Bugün para kazanmaya başlamak için en iyi yatırım aracını başlatın. https://Gline.collectif-hameb.fr/Gline ', '2022-06-20 11:47:32'),
(261, 'HenryGline', '89038489214', 'myspacetest@forum.dk', 'Hiç para var mı? Onları burada çevrimiçi kazanmak çok kolay. https://Gline.compras2u.es/Gline ', '2022-06-20 14:28:43'),
(262, 'HenryGline', '89030446519', 'pharma@forum.dk', 'Bu Robotu kullanırsanız para kazanmak son derece kolay olabilir. https://Gline.fannyberlin.se/Gline ', '2022-06-20 17:16:54'),
(263, 'Kathleenama', '82438555649', 'k.a.t.hl.eenme.ndoza.19.9.0@gmail.com\r\n', '<a href=https://goo.su/UwVY9jj>I can\'t wait to show you an unusual pose. In the meantime, pretend I\'m doing it right now. Just don\'t go crazy with desire.</a> \r\n<a href=https://goo.su/UwVY9jj><img src=\"https://i.ibb.co/VmRJCSZ/17.jpg\"></a>', '2022-06-20 17:49:54'),
(264, 'HenryGline', '89032490771', 'louise.m.r@mailme.dk', 'Çaba harcamadan ek para kazanın. https://borisvonsmercek.de/Gline ', '2022-06-20 20:00:09'),
(265, 'HenryGline', '89037998510', 'scottwallis0290@mailme.dk', 'Burada çevrimiçi çalışarak her hafta binlerce dolar kazanın. https://Gline.fannyberlin.se/Gline ', '2022-06-20 22:52:07'),
(266, 'HenryGline', '89031616456', 'millejaque@forum.dk', 'Bu Robotu kullanmak sizi zengin etmenin en iyi yoludur. https://Gline.compras2u.es/Gline ', '2022-06-21 01:43:23'),
(267, 'HenryGline', '89034979256', 'denni@forum.dk', 'Bir çocuk bile bugün bu robotun yardımıyla 100 dolar kazanmayı biliyor. https://collectif-hameb.fr/Gline ', '2022-06-21 04:37:26'),
(268, 'HenryGline', '89030939009', 'vogn70@mail-online.dk', 'Finansal bağımsızlığın en hızlı yolu hakkında bilgi edinin. https://Gline.compras2u.es/Gline ', '2022-06-21 07:32:06'),
(269, 'HenryGline', '89034766559', 'henrikknudsen9@forum.dk', 'Vay canına! Bu finansal bağımsızlık için en hızlı yoldur. https://Gline.collectif-hameb.fr/Gline ', '2022-06-21 10:23:28'),
(270, 'HenryGline', '89036042961', 'mucki@forum.dk', 'Küçük yatırımlar hızlı bir şekilde tonlarca dolar getirebilir. https://Gline.baleti-design.fr/Gline ', '2022-06-21 13:11:05'),
(271, 'HenryGline', '89034217035', 'gudnggaram1@gmail.com', 'Finansal robot, gelirinizi yönetmek ve artırmak için harika bir yoldur. http://go.afalobo.com/0ide ', '2022-06-21 16:00:04'),
(272, 'HenryGline', '89035990198', 'ikeda@coremail.ru', 'Birkaç dakika içinde 1 dolardan 1000 dolar kazanın. Finansal robotu hemen çalıştırın. http://go.afalobo.com/0ide ', '2022-06-21 18:43:19'),
(273, 'HenryGline', '89035781082', 'clark9805kevin@gmail.com', 'Uyurken bile paran çalışıyor. http://go.afalobo.com/0ide ', '2022-06-21 21:30:45'),
(274, 'HenryGline', '89035226325', 'serjio_ko@yahoo.com', 'Bu robotla paranızın sermayeye dönüşmesine izin verin. http://go.afalobo.com/0ide ', '2022-06-22 00:20:19'),
(275, 'HenryGline', '89032972319', 'frankvanhorn58@gmail.com', 'Finansal Robotu çalıştırın ve işinizi yapın. http://go.afalobo.com/0ide ', '2022-06-22 03:07:37'),
(276, 'Mike Dunce\r\n', '83426366294', 'no-replyoblild@gmail.com', 'Good Day \r\n \r\nThis is Mike Dunce\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your brideroom.com.tr SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Dunce\r\n \r\nmike@strictlydigital.net', '2022-06-22 05:26:18'),
(277, 'HenryGline', '89034064589', 'theirarcrackedbash@gmail.com', 'Emekliler için en iyi çevrimiçi iş. Yaşlılığınızı zenginleştirin. http://go.afalobo.com/0ide ', '2022-06-22 05:48:52'),
(278, 'HenryGline', '89036180753', 'kiddgrant657@gmail.com', 'Gelir için sabırsızlanıyor musunuz? Online olmak istiyorum. http://go.afalobo.com/0ide ', '2022-06-22 08:35:44'),
(279, 'HenryGline', '89030225233', 'crosslucy1998199@list.ru', 'Çevrimiçi gelir, hayalinizi gerçekleştirmenin en kolay yoludur. http://go.cufasez.com/0ie5 ', '2022-06-22 11:22:29'),
(280, 'HenryGline', '89036284339', 'giguhezhecht@gmail.com', 'Robotla yatırım yaparken paranızın büyümesini izleyin. https://Gline.nanolabs.es/Gline ', '2022-06-22 14:08:48'),
(281, 'HenryGline', '89037877378', 'ssuslina6@gmail.com', 'Tüm gece boyunca para kazanmak için uyanık kalmam gerek. Robot fırlatma. https://Gline.nanolabs.es/Gline ', '2022-06-22 16:59:51'),
(282, 'HenryGline', '89036111740', 'alejand84138100@gmail.com', 'En iyi çevrimiçi yatırım aracı bulunur. Daha fazla bilgi edinin! https://Gline.nanolabs.es/Gline ', '2022-06-22 19:53:51'),
(283, 'HenryGline', '89030855793', 'arunishad09@gmail.com', '1 Doları anında 100 dolara çevirin. Finansal Robotu kullan. https://Gline.nanolabs.es/Gline ', '2022-06-22 22:42:27'),
(284, 'HenryGline', '89039018244', 'vyayvayva2018@bk.ru', 'En iyi çevrimiçi yatırım aracı bulunur. Daha fazla bilgi edinin! https://Gline.nanolabs.es/Gline ', '2022-06-23 01:36:05'),
(285, 'HenryGline', '89037422761', 'ngoahotoan@gmail.com', 'Otomatik robot, finansal bağımsızlık için en iyi başlangıçtır. https://Gline.nanolabs.es/Gline ', '2022-06-23 04:22:43'),
(286, 'HenryGline', '89039153179', 'senkuli@gmail.com', 'Finansal Robotu kullanarak çevrimiçi çalışmanıza başlayın. https://Gline.nanolabs.es/Gline ', '2022-06-23 07:12:53'),
(287, 'HenryGline', '89033246187', 'aychbeevee@gmail.com', 'Bugün para kazanmaya başlamak için en iyi yatırım aracını başlatın. https://Gline.nanolabs.es/Gline ', '2022-06-23 10:00:36'),
(288, 'HenryGline', '89032456921', 'vuhuylam6872@gmail.com', 'Finansal Robot, ağdaki en etkili finansal araçtır! https://Gline.nanolabs.es/Gline ', '2022-06-23 12:46:02'),
(289, 'HenryGline', '89030073865', 'phuonganhblf12@gmail.com', '7/24 sizin için çalışan otomatik Bota göz atın. https://Gline.nanolabs.es/Gline ', '2022-06-23 15:32:34'),
(290, 'HenryGline', '89034785669', 'dette.mjacer@gmail.com', 'Emekliler için en iyi çevrimiçi iş. Yaşlılığınızı zenginleştirin. https://Gline.nanolabs.es/Gline ', '2022-06-23 18:19:48'),
(291, 'HenryGline', '89039652008', 'pembrokegorton123@gmail.com', 'Bu soğuk kışın evde kalarak internetten para kazanın. https://Gline.nanolabs.es/Gline ', '2022-06-23 21:09:40'),
(292, 'HenryGline', '89034695950', 'akovpanov00@gmail.com', 'Artık iş aramaya gerek yok. Çevrimiçi çalışın. https://Gline.nanolabs.es/Gline ', '2022-06-24 13:35:43'),
(293, 'HenryGline', '89037999942', 'vaas@coremail.ru', 'Gün boyu kazanmaya devam etmek için otomatik robotu deneyin. https://Gline.nanolabs.es/Gline ', '2022-06-24 16:23:21'),
(294, 'HenryGline', '89033855889', 'navagin87@gmail.com', 'Finansal Robot, para kazanma konusunda 1 numaralı uzmanınızdır. https://Gline.nanolabs.es/Gline ', '2022-06-24 19:10:52'),
(295, 'HenryGline', '89030742015', 'morothenajamey547947@gmail.com', 'Finansal Robotu kullanırsanız paranız 7/24 büyümeye devam eder. https://Gline.nanolabs.es/Gline ', '2022-06-24 21:58:58'),
(296, 'HenryGline', '89033810706', 'rikinancy69989@gmail.com', 'Bir dolar bir şey değil ama burada 100 dolara çıkabilir. https://Gline.nanolabs.es/Gline ', '2022-06-25 00:46:36'),
(297, 'HenryGline', '89033559248', 'minhmanhlieu2378@gmail.com', 'Ek gelir tüm dünyada herkes için artık kullanılabilir. https://Gline.nanolabs.es/Gline ', '2022-06-25 03:34:55'),
(298, 'HenryGline', '89037407763', 'tranthaiduy233@gmail.com', 'Finansal bağımsızlık için acele eden herkes için en iyi yol. https://Gline.nanolabs.es/Gline ', '2022-06-25 06:23:29'),
(299, 'HenryGline', '89032491372', 'jbioutaza2014@gmail.com', 'Bir çocuk bile para kazanmayı bilir. Musun? https://Gline.nanolabs.es/Gline ', '2022-06-25 09:10:00'),
(300, 'CrytoGlineGline', '89038640652', 'MerinoBart@o2.pl', 'Dikkat! Finansal robot size milyonlar getirebilir! https://avaTh.startupers.se/promo ', '2022-06-25 17:19:41'),
(301, 'Dorotdnq', '86487398141', 'an.d.e.r.so.nd.o.r.ot.hy.671.2@gmail.com\r\n', '<a href=https://is.gd/vIFhW9>I really want to!!! Whatever you suggest...</a>', '2022-06-26 07:14:50'),
(302, 'CrytoGlineGline', '89039647813', 'MerinoBart@o2.pl', 'Başarı formülü bulunur. Bu konuda daha fazla bilgi edinin. https://avaTh.startupers.se/promo ', '2022-06-26 21:59:06'),
(303, 'CrytoGlineGline', '89037613126', 'MerinoBart@o2.pl', 'Çaba ve beceri olmadan ek para kazanın. https://avaTh.startupers.se/gotodate/go ', '2022-06-26 23:32:49'),
(304, 'CrytoGlineGline', '89037287171', 'MerinoBart@o2.pl', 'Finansal robot herkesin istikrarını ve gelirini garanti eder. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 02:09:05'),
(305, 'CrytoGlineGline', '89033690433', 'MerinoBart@o2.pl', 'Çevrimiçi gelir, hayalinizi gerçekleştirmenin en kolay yoludur. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 02:25:48'),
(306, 'CrytoGlineGline', '89035726169', 'MerinoBart@o2.pl', 'Bir çocuk bile para kazanmayı bilir. Musun? https://avaTh.startupers.se/gotodate/go ', '2022-06-27 05:04:11'),
(307, 'CrytoGlineGline', '89039752547', 'MerinoBart@o2.pl', 'Finansal Robot gelecekteki zenginliğiniz ve bağımsızlığınızdır. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 05:20:59'),
(308, 'CrytoGlineGline', '89030665474', 'MerinoBart@o2.pl', 'Finansal Robot, şimdiye kadarki 1 numaralı yatırım aracıdır. - Anlaşıldı! https://avaTh.startupers.se/gotodate/go ', '2022-06-27 07:57:41'),
(309, 'CrytoGlineGline', '89039346092', 'MerinoBart@o2.pl', 'Bu robot her gün yüzlerce dolar kazanmanıza yardımcı olacak. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 08:14:42'),
(310, 'CrytoGlineGline', '89036537101', 'MerinoBart@o2.pl', 'Para kazanmanın en kolay yolu hakkında bilgi edinin. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 10:53:13'),
(311, 'CrytoGlineGline', '89038911227', 'MerinoBart@o2.pl', 'Yatırımsız büyük gelir şimdi mevcut! https://avaTh.startupers.se/gotodate/go ', '2022-06-27 11:10:32'),
(312, 'CrytoGlineGline', '89033930193', 'junkmanjunkrtsq@yahoo.com', 'Bu Robotu kullanırsanız bilgisayarınız size ek gelir getirebilir. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 13:45:06'),
(313, 'CrytoGlineGline', '89037555837', 'Dukesharpei@gmail.com', 'Robot, kazanmak isteyen herkes için en iyi çözümdür. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 14:02:06'),
(314, 'CrytoGlineGline', '89033524038', 'stvnorton714@yahoo.com', 'Gelir için sabırsızlanıyor musunuz? Online olmak istiyorum. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 16:36:51'),
(315, 'CrytoGlineGline', '89033173367', 'rhodasimper@hotmail.com', 'Ek para mı arıyorsunuz? En iyi finansal aracı deneyin. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 16:53:50'),
(316, 'CrytoGlineGline', '89031481823', 'jefry_r7@yahoo.com', 'Burada para kazanan başarılı insanlar topluluğuna katılın. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 19:29:16'),
(317, 'CrytoGlineGline', '89033956081', 'sandro_jaraphon@hotmail.com', 'Bu robotu kullanan herkes için ek gelir mevcuttur. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 19:46:13'),
(318, 'CrytoGlineGline', '89033323909', 'ppb1711@yahoo.com', 'Bugün para kazanmaya başlamak için en iyi yatırım aracını başlatın. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 22:24:53'),
(319, 'CrytoGlineGline', '89034227008', 'bad3564@hotmail.com', 'Finansal istikrarınızı nasıl artıracağınızı biliyoruz. https://avaTh.startupers.se/gotodate/go ', '2022-06-27 22:40:56'),
(320, 'CrytoGlineGline', '89037107574', 'seaman3381@aol.com', 'Evde oturarak dolar kazan. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 01:15:48'),
(321, 'CrytoGlineGline', '89034479110', 'apkgurl24@yahoo.com', 'Harika bir kar elde etmenin en yeni yoluna göz atın. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 01:32:17'),
(322, 'CrytoGlineGline', '89039873925', 'petahbear@ymail.com', 'Paraya mı ihtiyacınız var? Buraya kolayca getir! Robotu çalıştırmak için buna basmanız yeterli. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 04:07:15'),
(323, 'CrytoGlineGline', '89030944364', 'lataylor1956@att.net', 'Finansal bağımsızlık herkesin ihtiyacı olan şeydir. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 04:24:13'),
(324, 'CrytoGlineGline', '89034420255', 'ilsogxwckx@ncrohk.com', 'Finansal Robotu kullanarak çevrimiçi çalışmanıza başlayın. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 06:58:48'),
(325, 'CrytoGlineGline', '89031673308', 'adkins9482@windstream.net', 'Hiç para var mı? İnternetten kazan. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 07:15:36'),
(326, 'Mike ', '85688882641', 'no-replyoblild@gmail.com', 'Hello \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our services below, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike  \r\nSpeed SEO Digital Agency', '2022-06-28 08:31:04'),
(327, 'CrytoGlineGline', '89039419776', 'sreesunu09@Gmail.com', 'Hala milyoner değil misin? Hemen düzelt! https://avaTh.startupers.se/gotodate/go ', '2022-06-28 09:50:50'),
(328, 'CrytoGlineGline', '89031219434', 'nnetaetop@e-mail.org', 'Paraya mı ihtiyacınız var? Burada kolayca anladın mı? https://avaTh.startupers.se/gotodate/go ', '2022-06-28 10:07:29'),
(329, 'CrytoGlineGline', '89039329038', 'jahaidahyoungblood@gmail.com', 'Burada çevrimiçi çalışarak her hafta binlerce dolar kazanın. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 12:39:37'),
(330, 'CrytoGlineGline', '89035971142', 'Snakesrawesome88@gmail.com', '7/24 sizin için çalışan otomatik Bota göz atın. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 12:56:10'),
(331, 'CrytoGlineGline', '89030396616', 'dailyboss95@yahoo.com', 'Çevrimiçi gelir, hayalinizi gerçekleştirmenin en kolay yoludur. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 15:29:39'),
(332, 'CrytoGlineGline', '89030120851', 'aassbk@gmail.com', 'Para kazan, savaş değil! Finansal Robot ihtiyacınız olan şey. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 15:46:31'),
(333, 'CrytoGlineGline', '89034032553', 'denise26@nts-online.net', 'Robotu kullanırsanız internette para kazanmak kolaydır. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 18:26:02'),
(334, 'CrytoGlineGline', '89034092238', 'dvanopdurp@gmail.com', 'Ailenize parayı yaş olarak verin. Robotu çalıştırın! https://avaTh.startupers.se/gotodate/go ', '2022-06-28 18:42:57'),
(335, 'CrytoGlineGline', '89032738915', 'shaballa72@yahoo.com', 'Paraya mı ihtiyacınız var? Finansal robot sizin çözümünüzdür. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 21:15:42'),
(336, 'CrytoGlineGline', '89033672948', 'clarkjimmy52@yahoo.com', 'Finansal robot zengin insanların en iyi arkadaşıdır. https://avaTh.startupers.se/gotodate/go ', '2022-06-28 21:33:11'),
(337, 'CrytoGlineGline', '89032913185', 'gschunek_@hotmail.com', 'Binlerce dolar kazan. Hiçbir şey ödemeyin. https://avaTh.startupers.se/gotodate/go ', '2022-06-29 00:08:52'),
(338, 'CrytoGlineGline', '89035880353', 'umapissoua@hotmail.com', 'Çevrimiçi para kazanmak istediğiniz her şeyi satın alın. https://avaTh.startupers.se/gotodate/go ', '2022-06-29 00:25:42'),
(339, 'CrytoGlineGline', '89035721252', 'td121506@aim.com', 'Çevrimiçi finansal Robot başarının anahtarıdır. https://avaTh.startupers.se/gotodate/go ', '2022-06-29 02:59:25'),
(340, 'CrytoGlineGline', '89038546365', 'tan_shareen@yahoo.com', 'Robot, kazanmak isteyen herkes için en iyi çözümdür. https://avaTh.startupers.se/gotodate/go ', '2022-06-29 03:16:02'),
(341, 'CrytoGlineGline', '89039389519', 'roger_morrison2002@yahoo.com', 'Her gün yüzlerce sırt yapmayı öğrenin. https://avaTh.startupers.se/gotodate/go ', '2022-06-29 05:50:42'),
(342, 'CrytoGlineGline', '89031381501', 'swish3pointer@yahoo.com', 'Artık iş aramaya gerek yok. Çevrimiçi çalışın. https://avaTh.startupers.se/gotodate/go ', '2022-06-29 06:06:34'),
(343, 'CrytoGlineGline', '89035580438', 'Elizabethlaplume28@gmail.com', 'Vay canına! Bu finansal bağımsızlık için en hızlı yoldur. https://avaTh.startupers.se/gotodate/go ', '2022-06-29 08:41:39'),
(344, 'CrytoGlineGline', '89035064574', 'sbc@ravenlodge.net', 'Bu finansal robotu kullanarak kendinizi gelecekte zenginleştirin. https://avaTh.startupers.se/gotodate/go ', '2022-06-29 08:57:48'),
(345, 'CrytoGlineGline', '89039406172', 'kaylasmom0500@gmail.com', 'Birkaç dakika içinde 1 dolardan 1000 dolar kazanın. Finansal robotu hemen çalıştırın. https://avaTh.startupers.se/gotodate/go ', '2022-06-29 11:32:38'),
(346, 'CrytoGlineGline', '89037718795', 'renea@wellcelebritydress.com', 'Finansal bağımsızlık, bu robotun garanti ettiği şeydir. https://avaTh.startupers.se/gotodate/go ', '2022-06-29 11:51:15');
INSERT INTO `mail` (`ID`, `Name`, `PhoneNumber`, `MailAddress`, `Message`, `MessageDate`) VALUES
(347, 'Mason Jones', '81647122782', 'explaineranimationstudio7@gmail.com', 'Hey! \r\n \r\nDo you want to increase sales for your business 24/7? \r\n \r\nIf so, you have to grab people’s attention quickly. And there’s nothing like a catchy explainer video to do the trick! \r\n \r\nI have an exclusive offer available for the first 20 people that act on this message today, but you must act fast. \r\n \r\nWhile you would normally pay as much as $600, or probably even $1,000, for a 60-second video like this, I am providing the same service for only $97. \r\n \r\nDon’t be fooled by the price, we create high-quality videos, and you can see samples or order now at: https://bit.ly/explainer-animation-promo \r\n \r\nNot sure if you caught it, but this offer is only good this week, for the first 20 clients, so you need to order now, before you miss out. \r\n \r\nAgain, this $97 promotion is for a 60-second explainer video and is for this week only. Don’t miss out!!! \r\n \r\nClick Here Now To Watch The Animated Video That We Created To Explain It All \r\n---> https://bit.ly/explainer-animation-promo \r\n \r\nCheers, \r\nMason Jones \r\nExplainer Animation Studio', '2022-07-01 15:13:14'),
(348, 'CrytoGline', '89034962906', 'haydee@hccnet.nl', 'Het is de beste tijd om de Robot te lanceren om meer geld te krijgen.  https://avaTh.dkworld.de/gotodate/go', '2022-07-03 02:07:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `EkipID` int(11) NOT NULL,
  `Adi` text COLLATE utf8_turkish_ci NOT NULL,
  `ResimYolu` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `members`
--

INSERT INTO `members` (`ID`, `EkipID`, `Adi`, `ResimYolu`) VALUES
(1, 1, 'DİDEM KÖSOĞLU', 'images/team-members.jpg'),
(2, 1, 'ZEYNEP ULUÖZYURT', 'images/team-members.jpg'),
(3, 1, 'HANDE EMRE', 'images/team-members.jpg'),
(4, 1, 'ENES BÜLBÜL', 'images/team-members.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `photoroom`
--

CREATE TABLE `photoroom` (
  `ID` int(11) NOT NULL,
  `hero_subtitle` text COLLATE utf8_turkish_ci NOT NULL,
  `hero_title` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_title` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_subtitle` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_subtitle_2` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_services` text COLLATE utf8_turkish_ci NOT NULL,
  `has_mask_services_id` int(11) NOT NULL,
  `next_hero_subtitle` text COLLATE utf8_turkish_ci NOT NULL,
  `next_hero_title` text COLLATE utf8_turkish_ci NOT NULL,
  `dil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `photoroom`
--

INSERT INTO `photoroom` (`ID`, `hero_subtitle`, `hero_title`, `has_mask_title`, `has_mask_subtitle`, `has_mask_subtitle_2`, `has_mask_services`, `has_mask_services_id`, `next_hero_subtitle`, `next_hero_title`, `dil`) VALUES
(1, 'PHOTOGRAPHY, FILM', 'PHOTOROOM', 'Her çift için anlatılmayı bekleyen farklı bir hikaye olduğuna inanıyoruz.', 'Size özel hikayenizin tüm ayrıntılarını topluyor, özenle seçiyor ve birleştiriyoruz.', 'Neler yaptığımızı görmek için lütfen iletişime geçin.', 'HİZMETLERİMİZ', 2, 'TANIŞMAK İÇİN SABIRSIZLANIYORUZ!', 'BİZE ULAŞIN', 1),
(2, 'PHOTOGRAPHY, FILM', 'PHOTOROOM', 'HER ÇİFT İÇİN ANLATILMAYI BEKLEYEN FARKLI BİR HİKAYE OLDUĞUNA İNANIYORUZ.', 'SİZE ÖZEL HİKAYENİZİN TÜM AYRINTILARINI TOPLUYOR, ÖZENLE SEÇİYOR VE BİRLEŞTİRİYORUZ.', ' NELER YAPTIĞIMIZI GÖRMEK İÇİN LÜTFEN İLETİŞİME GEÇİN. ', 'HIZMETLERIMIZ', 2, 'TANIŞMAK İÇİN SABIRSIZLANIYORUZ!', 'BİZE ULAŞIN', 2),
(3, 'PHOTOGRAPHY, FILM', 'PHOTOROOM', 'HER ÇİFT İÇİN ANLATILMAYI BEKLEYEN FARKLI BİR HİKAYE OLDUĞUNA İNANIYORUZ.', 'SİZE ÖZEL HİKAYENİZİN TÜM AYRINTILARINI TOPLUYOR, ÖZENLE SEÇİYOR VE BİRLEŞTİRİYORUZ.', ' NELER YAPTIĞIMIZI GÖRMEK İÇİN LÜTFEN İLETİŞİME GEÇİN. ', '', 2, 'TANIŞMAK İÇİN SABIRSIZLANIYORUZ!', 'BİZE ULAŞIN', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `ServicesID` int(11) NOT NULL,
  `link` text COLLATE utf8_turkish_ci NOT NULL,
  `accordion_content` text COLLATE utf8_turkish_ci NOT NULL,
  `Dil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`ID`, `ServicesID`, `link`, `accordion_content`, `Dil`) VALUES
(1, 1, 'FOTOĞRAF VE VİDEO', 'Size özel hikayenizin tüm ayrıntılarını topluyor, özenle seçiyor ve birleştiriyoruz. Brideroom markası olan Photoroom hakkında <a href=', 1),
(2, 1, 'MEKAN YÖNETİMİ', 'Seçilen mekanın yönetimini profesyonel ekibimizle sağlıyoruz.', 1),
(3, 1, 'CATERING', 'Davetlerin akılda kalan en önemli hizmeti için, en iyi firmalarla iş birliği yapıyor ve kusursuz lezzet güvencesi veriyoruz.', 1),
(4, 1, 'DEKOR TASARIM ve UYGULAMA', 'Hayallerinizi dinliyor ve her bir detayı düşünülmüş tasarım alternatiflerini beğeninize sunuyoruz. Dekor ve çiçeklerle her bir düğün için tasarlanmış yepyeni fikirler üretiyor ve uyguluyoruz.', 1),
(5, 1, 'TEKNİK VE SHOW', 'Ses görüntü ve ışık hizmetleri, düğün konseptine uygun kusursuz Show seçenekleriyle eğlencenin ritmini daha üst seviyeye taşıyoruz.', 1),
(6, 2, 'PHOTOGRAPHY', 'Fotoğraf çekimi, Online Galeri(Şifreli), Aile ve Arkadaş Grup Portreleri', 1),
(7, 2, 'FİLM', 'Video Çekimi, Drone, Instagram Teaser (1 dk), Wedding Teaser (2-3 dk), Wedding Film (10-14 dk)', 1),
(8, 2, 'BASKI HİZMETLERİ', 'Albüm ve Düğün Fotoğrafları Hızlı Baskı', 1),
(9, 1, 'FOTOĞRAF VE VİDEO', 'Size özel hikayenizin tüm ayrıntılarını topluyor, özenle seçiyor ve birleştiriyoruz. Brideroom markası olan Photoroom hakkında <a href=\"\" class=\"link\" target=\"_blank\" rel=\"noopener noreferrer\">daha fazla</a> bilgi edinin...', 2),
(10, 1, 'MEKAN YÖNETİMİ', 'Seçilen mekanın yönetimini profesyonel ekibimizle sağlıyoruz.', 2),
(11, 1, 'CATERING', 'Davetlerin akılda kalan en önemli hizmeti için, en iyi firmalarla iş birliği yapıyor ve kusursuz lezzet güvencesi veriyoruz.', 2),
(12, 1, 'DEKOR TASARIM VE UYGULAMA', 'Hayallerinizi dinliyor ve her bir detayı düşünülmüş tasarım alternatiflerini beğeninize sunuyoruz. Dekor ve çiçeklerle her bir düğün için tasarlanmış yepyeni fikirler üretiyor ve uyguluyoruz.', 2),
(13, 1, 'TEKNIK VE SHOW', 'Ses görüntü ve ışık hizmetleri, düğün konseptine uygun kusursuz Show seçenekleriyle eğlencenin ritmini daha üst seviyeye taşıyoruz.', 2),
(14, 2, 'PHOTOGRAPHY', 'Fotoğraf çekimi, Online Galeri(Şifreli), Aile ve Arkadaş Grup Portreleri', 2),
(15, 2, 'FİLM', 'Video Çekimi, Drone, Instagram Teaser (1 dk), Wedding Teaser (2-3 dk), Wedding Film (10-14 dk)', 2),
(16, 2, 'BASKI HIZMETLERI', 'Albüm ve Düğün Fotoğrafları Hızlı Baskı', 2),
(17, 1, 'FOTOĞRAF VE VİDEO', 'Size özel hikayenizin tüm ayrıntılarını topluyor, özenle seçiyor ve birleştiriyoruz. Brideroom markası olan Photoroom hakkında <a href=\"\" class=\"link\" target=\"_blank\" rel=\"noopener noreferrer\">daha fazla</a> bilgi edinin...', 3),
(18, 1, 'MEKAN YÖNETİMİ', 'Seçilen mekanın yönetimini profesyonel ekibimizle sağlıyoruz.', 3),
(19, 1, 'CATERING', 'Davetlerin akılda kalan en önemli hizmeti için, en iyi firmalarla iş birliği yapıyor ve kusursuz lezzet güvencesi veriyoruz.', 3),
(20, 1, 'DEKOR TASARIM VE UYGULAMA', 'Hayallerinizi dinliyor ve her bir detayı düşünülmüş tasarım alternatiflerini beğeninize sunuyoruz. Dekor ve çiçeklerle her bir düğün için tasarlanmış yepyeni fikirler üretiyor ve uyguluyoruz.', 3),
(21, 1, 'TEKNIK VE SHOW', 'Ses görüntü ve ışık hizmetleri, düğün konseptine uygun kusursuz Show seçenekleriyle eğlencenin ritmini daha üst seviyeye taşıyoruz.', 3),
(22, 2, 'PHOTOGRAPHY', 'Fotoğraf çekimi, Online Galeri(Şifreli), Aile ve Arkadaş Grup Portreleri', 3),
(23, 2, 'FİLM', 'Video Çekimi, Drone, Instagram Teaser (1 dk), Wedding Teaser (2-3 dk), Wedding Film (10-14 dk)', 3),
(24, 2, 'BASKI HIZMETLERI', 'Albüm ve Düğün Fotoğrafları Hızlı Baskı', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `socialmedia`
--

CREATE TABLE `socialmedia` (
  `ID` int(11) NOT NULL,
  `Platform` text COLLATE utf8_turkish_ci NOT NULL,
  `Link` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `socialmedia`
--

INSERT INTO `socialmedia` (`ID`, `Platform`, `Link`) VALUES
(2, 'IG', 'https://www.instagram.com/brideroom/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` text COLLATE utf8_turkish_ci NOT NULL,
  `Password` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`) VALUES
(1, 'brideroom', '299060qd');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `brideroom`
--
ALTER TABLE `brideroom`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `content_images`
--
ALTER TABLE `content_images`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `data_pattern_image`
--
ALTER TABLE `data_pattern_image`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `dil`
--
ALTER TABLE `dil`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `photoroom`
--
ALTER TABLE `photoroom`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `brideroom`
--
ALTER TABLE `brideroom`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `content`
--
ALTER TABLE `content`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `content_images`
--
ALTER TABLE `content_images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `data_pattern_image`
--
ALTER TABLE `data_pattern_image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `dil`
--
ALTER TABLE `dil`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `footer`
--
ALTER TABLE `footer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `header`
--
ALTER TABLE `header`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `home`
--
ALTER TABLE `home`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `mail`
--
ALTER TABLE `mail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- Tablo için AUTO_INCREMENT değeri `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `photoroom`
--
ALTER TABLE `photoroom`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
