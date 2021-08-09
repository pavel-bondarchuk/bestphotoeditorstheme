<?php

//функционал

//вывод каноникала и генерация в страницах hreflang
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$doctype = "<!DOCTYPE html>";
$rtl = "";

//вывод данных для каждого домена
$domain = $_SERVER['HTTP_HOST'];
$fulldomain = "https://$domain/";
$langhtml = "en-US";
$logoname = "BestPhotoEditors.org";
$count_lang = "United States / English"; 
$logo = "<div class='logov'><a href='/' class='header__logo'><span class='logo'>Best<span class='logo2'>Photo</span>Editors.net</span></a></div>";

//то что переводим

$photo_editor = "Photo editor";
$remove_background = "Remove background";
$collage_maker = "Collage maker";
$useful_links = "Useful Links";
$image_editor = "Image editor";
$picture_editor = "Picture editor";
$photoshop_online = "Photoshop online";
$photo_editing_software = "Photo editing software";
$terms_of_service = "Terms of service";
$terms_of_use = "Terms of use";
$cookie_policy = "Cookie policy";
$privacy_policy = "Privacy policy";
$cookie_policy_text = "We use cookies to give you the best experience. Read our";
$cookie_policy_link = "cookie policy";
$agree = "Agree";
$visit_site = "Visit site";
$learn_more = "Learn more";
$verified = "Verified";
$hrefurl = $_SERVER['REQUEST_URI'];
$services = "Services";
$software = "Software";
$other = "Other";
$regions = "This site in other countries/regions:";
//href lang
$hreflang = " ";


$popup_lang = "

";
?>
