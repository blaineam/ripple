<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
function curPageURL() {
$pageURL = 'http';
if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80") {
$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
} else {
$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
}
return $pageURL;
}
if($_GET['s'] == "charity"){
$current_url1 = str_replace("&s=charity", "", curPageURL());
}elseif ($_GET['s'] == "date"){
$current_url1 = str_replace("&s=date", "", curPageURL());
}else{
}
if(isset($current_url1)){
$current_url3 = str_replace("www.", "", $current_url1);
}else{
$current_url3 = str_replace("www.", "", curPageURL());
}
$current_url = preg_replace('/&page=[0-9]+/', '', $current_url3);
if($_GET['s'] == "charity"){
$current_location1 = str_replace("&s=date", "", curPageURL());
}elseif ($_GET['s'] == "date"){
$current_location1 = str_replace("&s=charity", "", curPageURL());
}else{
}
if(isset($current_url1)){
$current_location3 = str_replace("www.", "", $current_location1);
}else{
$current_location3 = str_replace("www.", "", curPageURL());
}
$current_location = preg_replace('/&page=[0-9]+/', '', $current_location3);
$current_link1 = str_replace("&", "&amp;",$current_location);
$current_link2 = str_replace("http://", "",$current_link1);
$current_link = str_replace("/", "%2F",$current_link2);
$mlink="http://ripple.techyowl.com/";
$clink="http://ww6.aitsafe.com/cf/add.cfm?userid=83284138&amp;return=" . $current_link . "&amp;";
$connect = mysql_connect("localhost","rippletechyowl","PW") or die("Couldn't connect");
mysql_select_db("rippletechyowl") or die("couldnt find database");
if ($_GET['p'] == "store") {
$title = "Store";
$display = "";
$storeinfo = "showme";
$promoslider = "hideme";
$news= "hideme";
$events= "hideme";
$about= "hideme";
$home= "hideme";
$storemenu= "showme";
}elseif ($_GET['p'] == "about") {
$title = "About";
$display = "WHERE gender = '0'";
$about= "showme";
$promoslider = "showme";
$news= "hideme";
$events= "hideme";
$home= "hideme";
$storeinfo= "hideme";
$storemenu= "hideme";
}elseif ($_GET['p'] == "events") {
$title = "Events";
$display = "WHERE gender = '0'";
$events= "showme";
$promoslider = "showme";
$news= "hideme";
$about= "hideme";
$home= "hideme";
$storeinfo= "hideme";
$storemenu= "hideme";
}elseif ($_GET['p'] == "news") {
$title = "News";
$display = "WHERE gender = '0'";
$news= "showme";
$promoslider = "showme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$storeinfo= "hideme";
$storemenu= "hideme";
}elseif ($_GET['p'] == "necklaces") {
$title = "Necklaces | Store";
$display = "WHERE type = 'necklace'";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "hideme";
$storemenu= "showme";
}elseif ($_GET['p'] == "headbands") {
$title = "Headbands | Store";
$display = "WHERE type = 'headband'";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "hideme";
$storemenu= "showme";
}elseif ($_GET['p'] == "earrings") {
$title = "Earrings | Store";
$display = "WHERE type = 'earring'";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "hideme";
$storemenu= "showme";
}elseif ($_GET['p'] == "watches") {
$title = "Watches | Store";
$display = "WHERE type = 'watch'";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$storeinfo= "hideme";
$promoslider = "hideme";
$storemenu= "showme";
}elseif ($_GET['p'] == "bracelets") {
$title = "Bracelets | Store";
$display = "WHERE type = 'bracelet'";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$storeinfo= "hideme";
$promoslider = "hideme";
$storemenu= "showme";
}elseif ($_GET['p'] == "rings") {
$title = "Rings | Store";
$display = "WHERE type = 'ring'";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$storeinfo= "hideme";
$promoslider = "hideme";
$storemenu= "showme";
}elseif ($_GET['p'] == "charms") {
$title = "Charms | Store";
$display = "WHERE type = 'charm'";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$storeinfo= "hideme";
$promoslider = "hideme";
$storemenu= "showme";
}elseif ($_GET['p'] == "misc") {
$title = "Misc | Store";
$display = "WHERE type = 'misc'";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$storeinfo= "hideme";
$promoslider = "hideme";
$storemenu= "showme";
}elseif ($_GET['c'] == "charitycharms"){
$title = "Charity Charms | Store";
$display = "WHERE charity = 'Charity Charms'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "charitycharms";
}elseif ($_GET['c'] == "cangles") {
$title = "Cangles | Store";
$display = "WHERE charity = 'Cangles'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "cangles";
}elseif ($_GET['c'] == "wewood") {
$title = "WeWood | Store";
$display = "WHERE charity = 'WeWood'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "wewood";
}elseif ($_GET['c'] == "brilliantearth") {
$title = "Brilliant Earth | Store";
$display = "WHERE charity = 'Brilliant Earth'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "brilliantearth";
}elseif ($_GET['c'] == "beadforlife") {
$title = "Bead For Life | Store";
$display = "WHERE charity = 'Bead For Life'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "beadforlife";
}elseif ($_GET['c'] == "bullets2bandages") {
$title = "Bullets 2 Bandages | Store";
$display = "WHERE charity = 'Bullets 2 Bandages'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "bullets2bandages";
}elseif ($_GET['c'] == "fallingwhistles") {
$title = "Falling Whistles | Store";
$display = "WHERE charity = 'Falling Whistle'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "fallingwhistles";
}elseif ($_GET['c'] == "flexwatches") {
$title = "Flex Watches | Store";
$display = "WHERE charity = 'Flex Watches'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "flexwatches";
}elseif ($_GET['c'] == "johnhardy") {
$title = "John Hardy | Store";
$display = "WHERE charity = 'John Hardy'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "johnhardy";
}elseif ($_GET['c'] == "handsforafrica") {
$title = "Hands For Africa | Store";
$display = "WHERE charity = 'Hands For Africa'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "handsforafrica";
}elseif ($_GET['c'] == "newspaperjewelry") {
$title = "Newspaper Jewelry | Store";
$display = "WHERE charity = 'Newspaper Jewelry'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "newspaperjewelry";
}elseif ($_GET['c'] == "notforsale") {
$title = "Not For Sale | Store";
$display = "WHERE charity = 'Not For Sale'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "notforsale";
}elseif ($_GET['c'] == "nightlight") {
$title = "Night Light | Store";
$display = "WHERE charity = 'Night Light'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "nightlight";
}elseif ($_GET['c'] == "projecthavehope") {
$title = "Project Have Hope | Store";
$display = "WHERE charity = 'Project Have Hope'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "projecthavehope";
}elseif ($_GET['c'] == "shawnwarren") {
$title = "Shawn Warren | Store";
$display = "WHERE charity = 'Shawn Warren'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
$charity = "shawnwarren";
}else {
$title = "Home";
$display = "WHERE gender = '0'";
$home = "showme";
$promoslider = "showme";
$storemenu= "hideme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$storeinfo="hideme";
}if ($_GET['s'] == "date") {
$sort = "date";
} elseif ($_GET['s'] == "charity") {
$sort = "charity";
}else {
$sort = "id";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php
if ($detect->isMobile()) {
$mobilemeta = "
<meta name='viewport' content='width=device-width,initial-scale=1,maximum-scale=1'>
";
echo $mobilemeta;
}
?>
<title>Ripple Inc. | <?php echo $title; ?></title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $mlink; ?>ss.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function(){
$("#scroller").simplyScroll({customClass: 'vert',orientation: 'vertical',auto: true,autoMode: 'loop',frameRate: 20,speed: 2});
$('#line').css({"height":$("#content").height()});
$('.vert').css({"height":$("#content").height()});
$('.simply-scroll-clip').css({"height":$("#content").height()});
});
</script>
<style type="text/css">
<?php
if ($detect->isTablet()) {
$tabletcss = '.hideme{display:none;}
.showme{display:block;}
*{border:0px;position:relative;list-style:none;margin:0;padding:0;z-index:0;font-family:Verdana,Helvetica,sans-serif;}
html,body{width:100%;height:100%;}
#header,#body,#footer{position:relative;width:100%;clear:both;}
#header{min-height:225px;background-color:#A3DDFF;padding-top:25px;-webkit-box-shadow: 0px 5px 20px -2px #7D7D7D;box-shadow: 0px 5px 20px -2px #7D7D7D; }
#footer{background-color:#C8DAA4;margin-top:25px; padding-top:25px;-webkit-box-shadow: 0px -5px 20px -2px #7D7D7D;box-shadow: 0px -5px 20px -2px #7D7D7D;}
a:link {text-decoration:none;color:#851010;}
a:visited {color:#851010;}
a:hover {text-decoration:underline;color:#851010;}
a:active {text-decoration:underline;color:#C8DAA4;}
.wrapper{min-width:1024px;max-width:1024px;margin:0 auto; padding:12px;}
#logo{width:300px;float:left;display:block;margin-bottom:20px;}
#menu ul li a:hover {text-decoration:underline;color:#C8DAA4;}
#menu{float:right;width:700px;display:block;margin-top:135px;right:0px;}
#menu ul{list-style:none;}
#menu ul li{float:left;padding-bottom:15px;margin-left:10px;}
#menu ul li a span{-webkit-box-shadow: inset 0px 0px 10px 0px #7D7D7D;box-shadow: inset 0px 0px 10px 0px #7D7D7D; bottom:0px;min-height:48px;padding:15px;margin-left:10px;margin-right:10px;font-size:large;background-color:#C8DAA4;border-top-left-radius:10px; border-top-right-radius:10px;border-bottom-left-radius:10px; border-bottom-right-radius:10px;}
#menu ul li a span:hover{background-color:#851010;}
#sidebar{min-height:500px;position:relative;width:200px;float:left;padding-right:25px;display:block;}
#line{border-left:2px #A3DDFF solid;-webkit-box-shadow: -1px 0px 3px 0px #7D7D7D;box-shadow: -1px 0px 3px 0px #7D7D7D;width:0px;}
#content{margin-bottom:25px;min-height:500px;width:720px;padding:25px;padding-top:0px;display:block; }
#body{min-height:500px;margin-top:25px;margin-bottom:25px;}
#footer div{position:relative;display:block;}
#footercontent{min-height:225px;width:500px;margin-left:auto;margin-right:auto;text-align:left;}
#contact{width:200px;padding-right:25px;}
#contact a:link {text-decoration:none;color:#851010}
#contact a:visited {text-decoration:none;color:#851010}
#disclaimer{width:200px;margin-left:25px;}
#hometitle{width:670px;font-size:x-large;margin-bottom:25px;}
#hometext{width:670px;}
div[id*=title]{width:670px;font-size:x-large;margin-bottom:25px;}
div[id*=btext]{width:670px;}
#content.div{width:670px;}
.fleft{float:left;}
.fright{float:right;}
.item{width:200px;height:600px;margin-right:25px;float:left;margin-bottom:25px;z-index: 50;-webkit-border-radius: 7px;border-radius: 7px;overflow:hidden;}
.itemimage, .itemdetails{width:100%;height:50%;position:relative;overflow:hidden;}
.itemimage img{width:100%;height:100%;z-index: 51;}
.itemdetails{background-color:#A3DDFF; z-index: 52;}
.itemdetails h4, .itemdetails p{position:relative;padding:10px;}
.ac{position:absolute;bottom:10px;right:5px;opacity:1;z-index:60;}
.ac input{-webkit-box-shadow: inset 0px 0px 10px 0px #7D7D7D;box-shadow: inset 0px 0px 10px 0px #7D7D7D; bottom:0px;min-height:30px;padding:5px;margin-left:5px;margin-right:5px;font-size:medium;background-color:#C8DAA4;border-top-left-radius:10px; border-top-right-radius:10px;border-bottom-left-radius:10px; border-bottom-right-radius:10px}
.price{position:absolute;bottom:10px;left:15px;}
.simply-scroll-container {position: relative;}
.simply-scroll-clip {position: relative;overflow: hidden;}
.simply-scroll-list {overflow: hidden;margin: 0;padding: 0;list-style: none;}	
.simply-scroll-list li {padding: 0;margin: 0;list-style: none;}	
.simply-scroll-list li img {border: none;display: block;}
.vert {width: 200px;height: 500px;}
.vert .simply-scroll-clip {width: 200px;height: 500px;}
.vert .simply-scroll-list li {width: 200px;height: 335px; padding-bottom:10px;margin-top:10px;border-bottom:thin solid #CCCCCC;}
.fpimg{-webkit-border-radius: 7px;border-radius: 7px;overflow:hidden;}
.fbrands{width:300px;padding-top:25px;padding-right:25px;display:block;float:left;}
.fbrands img{width:275px;}
div.pagination {padding: 3px;margin: 3px;z-index:-20;}
div.pagination a {padding: 2px 5px 2px 5px;margin: 2px;border: 1px solid #A3DDFF;text-decoration: none;color: #851010;-webkit-border-radius: 5px;border-radius: 5px;}
div.pagination a:hover, div.pagination a:active {border: 1px solid #A3DDFF;color: #851010;}
div.pagination span.current {padding: 2px 5px 2px 5px;margin: 2px;border: 1px solid #851010;font-weight: bold;background-color: #C8DAA4;color: #851010;-webkit-border-radius: 5px;border-radius: 5px;}
div.pagination span.disabled {padding: 2px 5px 2px 5px;margin: 2px;border: 1px solid #851010;color: #DDD;-webkit-border-radius: 5px;border-radius: 5px;}
.item .itemdetails{opacity:1;-webkit-transition: all 0.5s ease;-moz-transition: all 0.5s ease;-o-transition: all 0.5s ease;}
.item .itemdetails:hover{opacity:1;}
#eotm{-webkit-border-radius: 7px;border-radius: 7px;overflow:hidden;width:250px;}
#fline{border-left:2px #A3DDFF solid;-webkit-box-shadow: -1px 0px 3px 0px #7D7D7D;box-shadow: -1px 0px 3px 0px #7D7D7D;width:0px;height:100px}
#social{position:absolute;top:5px;right:50px;}
#social a{float:right;margin-right:10px;opacity:1.0;}
#social a:hover{opacity:0.5;}
img, .itemdetails{border-radius: 15px;-moz-border-radius: 15px;-webkit-border-radius: 15px;}
#msm{display:none;}
#ms{display:block;}
';
echo $tabletcss;
}elseif ($detect->isMobile()) {
$mobilecss = '.hideme{display:none;}
.showme{display:block;}
*{border:0px;position:relative;list-style:none;margin:0;padding:0;z-index:0;font-family:Verdana,Helvetica,sans-serif;}
html,body{width:100%;height:100%;}
#header,#body,#footer{position:relative;width:100%;clear:both;}
#header{background-color:#A3DDFF;-webkit-box-shadow: 0px 5px 20px -2px #7D7D7D;box-shadow: 0px 5px 20px -2px #7D7D7D;min-height:325px;}
#footer{bottom:0px;background-color:#C8DAA4;margin-top:25px; padding-top:25px;-webkit-box-shadow: 0px -5px 20px -2px #7D7D7D;box-shadow: 0px -5px 20px -2px #7D7D7D;}
a:link {text-decoration:none;color:#851010;}
a:visited {color:#851010;}
a:hover {text-decoration:underline;color:#851010;}
a:active {text-decoration:underline;color:#C8DAA4;}
.wrapper{min-width:100%;max-width:100%;margin:0 auto; padding:5px;}
#logo{width:100%;float:none;display:block;}
#menu ul li a:hover {text-decoration:underline;color:#C8DAA4;}
#menu{float:none;width:100%;display:block;margin-top:5px;right:0px;}
#menu ul{list-style:none;}
#menu ul li{float:left;padding-bottom:5px;margin-left:5px;margin-bottom:10px;}
#menu ul li a span{-webkit-box-shadow: inset 0px 0px 5px 0px #7D7D7D;box-shadow: inset 0px 0px 5px 0px #7D7D7D; bottom:0px;min-height:30px;padding:5px;margin-left:5px;margin-right:5px;font-size:large;background-color:#C8DAA4;border-top-left-radius:5px; border-top-right-radius:5px;border-bottom-left-radius:5px; border-bottom-right-radius:5px;}
#menu ul li a span:hover{background-color:#851010;}
#sidebar{position:relative;width:100%;float:none;display:block;}
#content{margin-bottom:25px;width:100%;padding-top:0px;display:block;float:none;}
#body{margin-top:25px;margin-bottom:25px;}
#footer div{position:relative;display:block;}
#footercontent{width:100%;margin-left:auto;margin-right:auto;text-align:left;}
#contact{width:100%;padding-right:25px;float:none;}
#contact a:link {text-decoration:none;color:#851010}
#contact a:visited {text-decoration:none;color:#851010}
#disclaimer{width:100%;float:none;}
#hometitle{width:100%;font-size:x-large;margin-bottom:25px;}
#hometext{width:100%;margin:0px;}
div[id*=title]{width:100%;font-size:x-large;margin-bottom:25px;}
div[id*=btext]{width:100%;margin:0px;}
#content.div{width:100%;margin:0px;}
.fleft{float:none;}
.fright{float:none;}
.item{width:200px;height:600px;margin-right:25px;float:left;margin-bottom:25px;z-index: 50;-webkit-border-radius: 7px;border-radius: 7px;overflow:hidden;}
.itemimage, .itemdetails{width:100%;height:50%;position:relative;overflow:hidden;}
.itemimage img{width:100%;height:100%;z-index: 51;}
.itemdetails{background-color:#A3DDFF; z-index: 52;}
.itemdetails h4, .itemdetails p{position:relative;padding:10px;}
.ac{position:absolute;bottom:10px;right:5px;opacity:1;z-index:60;}
.ac input{-webkit-box-shadow: inset 0px 0px 10px 0px #7D7D7D;box-shadow: inset 0px 0px 10px 0px #7D7D7D; bottom:0px;min-height:30px;padding:5px;margin-left:5px;margin-right:5px;font-size:medium;background-color:#C8DAA4;border-top-left-radius:10px; border-top-right-radius:10px;border-bottom-left-radius:10px; border-bottom-right-radius:10px}
.price{position:absolute;bottom:10px;left:15px;}
div.pagination {padding: 3px;margin: 3px;z-index:-20;}
div.pagination a {padding: 2px 5px 2px 5px;margin: 2px;border: 1px solid #A3DDFF;text-decoration: none;color: #851010;-webkit-border-radius: 5px;border-radius: 5px;}
div.pagination a:hover, div.pagination a:active {border: 1px solid #A3DDFF;color: #851010;}
div.pagination span.current {padding: 2px 5px 2px 5px;margin: 2px;border: 1px solid #851010;font-weight: bold;background-color: #C8DAA4;color: #851010;-webkit-border-radius: 5px;border-radius: 5px;}
div.pagination span.disabled {padding: 2px 5px 2px 5px;margin: 2px;border: 1px solid #851010;color: #DDD;-webkit-border-radius: 5px;border-radius: 5px;}
#eotm{-webkit-border-radius: 7px;border-radius: 7px;overflow:hidden;width:100%;}
#social{position:relative;}
#social a{float:left;margin-left:10px;opacity:1.0;}
#social a:hover{opacity:0.5;}
img, .itemdetails{border-radius: 15px;-moz-border-radius: 15px;-webkit-border-radius: 15px;}
#fproducts, #fbrands, #fline, #line{display:none;}
*{margin-left:0px;}
#msm{display:block;}
#ms{display:none;}
#staff{width:100%;}
';
echo $mobilecss;
}else {
$css = '.hideme{display:none;}
.showme{display:block;}
*{border:0px;position:relative;list-style:none;margin:0;padding:0;z-index:0;font-family:Verdana,Helvetica,sans-serif;}
html,body{width:100%;height:100%;}
#header,#body,#footer{position:relative;width:100%;clear:both;}
#header{min-height:225px;background-color:#A3DDFF;padding-top:25px;-webkit-box-shadow: 0px 5px 20px -2px #7D7D7D;box-shadow: 0px 5px 20px -2px #7D7D7D; }
#footer{background-color:#C8DAA4;margin-top:25px; padding-top:25px;-webkit-box-shadow: 0px -5px 20px -2px #7D7D7D;box-shadow: 0px -5px 20px -2px #7D7D7D;}
a:link {text-decoration:none;color:#851010;}
a:visited {color:#851010;}
a:hover {text-decoration:underline;color:#851010;}
a:active {text-decoration:underline;color:#C8DAA4;}
.wrapper{min-width:1024px;max-width:1024px;margin:0 auto; padding:12px;}
#logo{width:300px;float:left;display:block;margin-bottom:20px;}
#menu ul li a:hover {text-decoration:underline;color:#C8DAA4;}
#menu{float:right;width:700px;display:block;margin-top:135px;right:0px;}
#menu ul{list-style:none;}
#menu ul li{float:left;padding-bottom:15px;margin-left:10px;}
#menu ul li a span{-webkit-box-shadow: inset 0px 0px 10px 0px #7D7D7D;box-shadow: inset 0px 0px 10px 0px #7D7D7D; bottom:0px;min-height:48px;padding:15px;margin-left:10px;margin-right:10px;font-size:large;background-color:#C8DAA4;border-top-left-radius:10px; border-top-right-radius:10px;border-bottom-left-radius:10px; border-bottom-right-radius:10px;}
#menu ul li a span:hover{background-color:#851010;}
#sidebar{min-height:500px;position:relative;width:200px;float:left;padding-right:25px;display:block;}
#line{border-left:2px #A3DDFF solid;-webkit-box-shadow: -1px 0px 3px 0px #7D7D7D;box-shadow: -1px 0px 3px 0px #7D7D7D;width:0px;}
#content{margin-bottom:25px;min-height:500px;width:720px;padding:25px;padding-top:0px;display:block; }
#body{min-height:500px;margin-top:25px;margin-bottom:25px;}
#footer div{position:relative;display:block;}
#footercontent{min-height:225px;width:500px;margin-left:auto;margin-right:auto;text-align:left;}
#contact{width:200px;padding-right:25px;}
#contact a:link {text-decoration:none;color:#851010}
#contact a:visited {text-decoration:none;color:#851010}
#disclaimer{width:200px;margin-left:25px;}
#hometitle{width:670px;font-size:x-large;margin-bottom:25px;}
#hometext{width:670px;}
div[id*=title]{width:670px;font-size:x-large;margin-bottom:25px;}
div[id*=btext]{width:670px;}
#content.div{width:670px;}
.fleft{float:left;}
.fright{float:right;}
.item{width:200px;height:300px;margin-right:25px;float:left;margin-bottom:25px;z-index: 50;-webkit-border-radius: 7px;border-radius: 7px;overflow:hidden;}
.itemimage, .itemdetails{width:100%;height:100%;position:absolute;top:0px;left:0px;overflow:hidden;}
.itemimage img{width:100%;height:100%;z-index: 51;}
.itemdetails{background-color:#A3DDFF; z-index: 52;}
.itemdetails h4, .itemdetails p{position:relative;padding:10px;}
.ac{position:absolute;bottom:10px;right:5px;opacity:1;z-index:60;}
.ac input{-webkit-box-shadow: inset 0px 0px 10px 0px #7D7D7D;box-shadow: inset 0px 0px 10px 0px #7D7D7D; bottom:0px;min-height:30px;padding:5px;margin-left:5px;margin-right:5px;font-size:medium;background-color:#C8DAA4;border-top-left-radius:10px; border-top-right-radius:10px;border-bottom-left-radius:10px; border-bottom-right-radius:10px}
.price{position:absolute;bottom:10px;left:15px;}
.simply-scroll-container {position: relative;}
.simply-scroll-clip {position: relative;overflow: hidden;}
.simply-scroll-list {overflow: hidden;margin: 0;padding: 0;list-style: none;}	
.simply-scroll-list li {padding: 0;margin: 0;list-style: none;}	
.simply-scroll-list li img {border: none;display: block;}
.vert {width: 200px;height: 500px;}
.vert .simply-scroll-clip {width: 200px;height: 500px;}
.vert .simply-scroll-list li {width: 200px;height: 335px; padding-bottom:10px;margin-top:10px;border-bottom:thin solid #CCCCCC;}
.fpimg{-webkit-border-radius: 7px;border-radius: 7px;overflow:hidden;}
.fbrands{width:300px;padding-top:25px;padding-right:25px;display:block;float:left;}
.fbrands img{width:275px;}
div.pagination {padding: 3px;margin: 3px;z-index:-20;}
div.pagination a {padding: 2px 5px 2px 5px;margin: 2px;border: 1px solid #A3DDFF;text-decoration: none;color: #851010;-webkit-border-radius: 5px;border-radius: 5px;}
div.pagination a:hover, div.pagination a:active {border: 1px solid #A3DDFF;color: #851010;}
div.pagination span.current {padding: 2px 5px 2px 5px;margin: 2px;border: 1px solid #851010;font-weight: bold;background-color: #C8DAA4;color: #851010;-webkit-border-radius: 5px;border-radius: 5px;}
div.pagination span.disabled {padding: 2px 5px 2px 5px;margin: 2px;border: 1px solid #851010;color: #DDD;-webkit-border-radius: 5px;border-radius: 5px;}
.item .itemdetails{opacity:0;-webkit-transition: all 0.5s ease;-moz-transition: all 0.5s ease;-o-transition: all 0.5s ease;}
.item .itemdetails:hover{opacity:1;}
.ac input{-webkit-box-shadow: inset 0px 0px 10px 0px #7D7D7D;box-shadow: inset 0px 0px 10px 0px #7D7D7D; bottom:0px;min-height:30px;padding:5px;margin-left:5px;margin-right:5px;font-size:medium;background-color:#C8DAA4;border-top-left-radius:10px; border-top-right-radius:10px;border-bottom-left-radius:10px; border-bottom-right-radius:10px}
#eotm{-webkit-border-radius: 7px;border-radius: 7px;overflow:hidden;width:250px;}
#fline{border-left:2px #A3DDFF solid;-webkit-box-shadow: -1px 0px 3px 0px #7D7D7D;box-shadow: -1px 0px 3px 0px #7D7D7D;width:0px;height:100px}
#social{position:absolute;top:5px;right:50px;}
#social a{float:right;margin-right:10px;opacity:1.0;}
#social a:hover{opacity:0.5;}
img, .itemdetails{border-radius: 15px;-moz-border-radius: 15px;-webkit-border-radius: 15px;}
#msm{display:none;}
#ms{display:block;}
';
echo $css;
}
?>
</style> 
</head>
<body>
<div id="header">
<div class="wrapper">
<div class="fleft">
<a href="<?php echo $mlink; ?>"><img id="logo" src="<?php echo $mlink; ?>images/resources/logo.png" alt="" /></a>
</div>
<div id="menu" class="fright">
<ul>
<li><a href="<?php echo $mlink; ?>"><span>Home</span></a></li>
<li><a href="<?php echo $mlink; ?>?p=store"><span>Store</span></a></li>
<li><a href="<?php echo $mlink; ?>?p=about"><span>About</span></a></li>
<li><a href="<?php echo $mlink; ?>?p=news"><span>News</span></a></li>
<li><a href="<?php echo $mlink; ?>?p=events"><span>Events</span></a></li>
<li><a href="http://ww6.aitsafe.com/cf/review.cfm?userid=83284138&amp;return=<?php echo $current_link; ?>"><span>Cart</span></a></li>
</ul>
</div>
<div id="social">
<a href="https://twitter.com/rippleve"><img src="<?php echo $mlink; ?>images/resources/tw.png" alt="" /></a>
<a href="https://www.facebook.com/rippleve"><img src="<?php echo $mlink; ?>images/resources/fb.png" alt="" /></a>
</div>
</div>
</div>
<div id="body">
<div class="wrapper">
<div id="sidebar" class="fleft">
<div id="storemenu" class="s">
<div class="<?php echo $storemenu; ?>">
<ul id="ms" class="<?php echo $storemenu; ?>">
<li><h4>Category:</h4></li>
<li><a href="<?php echo $mlink; ?>?p=necklaces">Necklaces</a></li>
<li><a href="<?php echo $mlink; ?>?p=watches">Watches</a></li>
<li><a href="<?php echo $mlink; ?>?p=bracelets">Bracelets</a></li>
<li><a href="<?php echo $mlink; ?>?p=rings">Rings</a></li>
<li><a href="<?php echo $mlink; ?>?p=headbands">Headbands</a></li>
<li><a href="<?php echo $mlink; ?>?p=earrings">Earrings</a></li>
<li><a href="<?php echo $mlink; ?>?p=charms">Charms</a></li>
<li><a href="<?php echo $mlink; ?>?p=misc">Misc</a></li>
<li><h4>Sort By:</h4></li>
<li><a href="<?php echo $current_url; ?>&amp;s=date">Date</a></li>
<li><a href="<?php echo $current_url; ?>&amp;s=charity">Charity</a></li>
<li><h4>Charities:</h4></li>
<?php
$query = mysql_query("SELECT * FROM `charities`");
while ( $row = mysql_fetch_assoc($query)) {
?>
<li><a href="<?php echo $mlink; ?>?c=<?php echo $row['url']; ?>"><?php echo $row['title']; ?></a></li>
<?php
}
?>
</ul>
<form  class="<?php echo $storemenu; ?>" id="msm" action="" method="get">
<select name='c' onchange='this.form.submit()'>
<option value="">Charities:</option>
<?php
$query = mysql_query("SELECT * FROM `charities`");
while ( $row = mysql_fetch_assoc($query)) {
?>
<option value="<?php echo $row['url']; ?>"><?php echo $row['title']; ?></option>
<?php
}
?>
</select>
<select name='p' onchange='this.form.submit()'>
<option value="">Category:</option>
<option value="necklaces">Necklaces</option>
<option value="watches">Watches</option>
<option value="bracelets">Bracelets</option>
<option value="rings">Rings</option>
<option value="headbands">Headbands</option>
<option value="earrings">Earrings</option>
<option value="charms">Charms</option>
<option value="misc">Misc</option>
</select>
</form>
</div>
</div>
<div id="fproducts" class="<?php echo $promoslider; ?>">
<h4>Featured Products</h4>
<ul id="scroller">
<?php
$query = mysql_query("SELECT `id`, `date`, `gender`, `type`, `image`, `cart`, `price`, `description`, `title`, `charity`, `promo`, `note` FROM `jewelry` WHERE promo = 'yes'");
while ( $row = mysql_fetch_assoc($query)) {
?>
<li><a href="<?php echo $clink; ?><?php echo $row['cart']; ?>"><div class="fpimg"><img src="<?php echo $mlink; ?><?php echo $row['image']; ?>" width="200" height="300" alt="" /></div><br /><?php echo $row['price']; ?> -- Buy</a></li>
<?php
}
?>
</ul>
</div>
</div>
<div id="line" class="fleft">
</div>
<div id="content" class="fright">
<div id ="cslider">
</div>
<div id="hometitle" class="<?php echo $home; ?>">
<p>Welcome To Ripple Inc.</p>
</div>
<div id="hometext" class="<?php echo $home; ?>">
<p>We are a Jewelry Company for the Virtual Enterprise Marketplace. We sell jewelry from companies that donate to different philanthropic agencies. Feel Free to check out our Store</p>
<br /><div id="fbrands">
<h3>Featured Charities</h3>
<table>
<tbody>
<tr>
<td class="fbrands">
<a href="<?php echo $mlink; ?>?c=charitycharms"><img src="<?php echo $mlink; ?>images/companies/charitycharms.png" alt="Charity Charms" /></a><br /><p>Charity Charms helps many different varieties of Organizations to raise funds and awareness. Sterling Silver Clip On charms are made to enhance any Charm Bracelet or Necklace. Grouped by theme, you can create a whole bracelet of crosses, hearts, animals or a mixture of what means the most to your cause. Or create a Custom Logo Charm for your charity for a unique item that your supporters will love.</p>
</td>
<td class="fbrands">
<a href="<?php echo $mlink; ?>?c=wewood"><img src="<?php echo $mlink; ?>images/companies/wewood.jpg" alt="WeWood" /></a><br /><p>WeWOOD lets us rediscover nature in its beauty, its simplicity and inspired design. It reminds us of a tree's powerful way of life; rooted, yet reaching. Completely absent of artificial and toxic materials, the WeWOOD Timepiece is as natural as your wrist. One Timepiece plants one tree, and together we help to ensure the health and survival of the natural world. One Watch- One Tree- One Planet</p>
</td>
</tr>
<tr>
<td class="fbrands">
<a href="<?php echo $mlink; ?>?c=brilliantearth"><img src="<?php echo $mlink; ?>images/companies/brilliantearth.jpg" alt="Brilliant Earth" /></a><br /><p>Our goal at Brilliant Earth is to make jewelry as beautiful as it can be. We are passionate about cultivating a more ethical, transparent, and sustainable jewelry industry. Brilliant Earth believes that luxury goods need not come at great human or environmental cost. We donate 5% of our profits to help communities who have suffered from unethical practices in the jewelry industry. We strive to create a long-term and sustainable approach to community development.</p>
</td>
<td class="fbrands">
<a href="<?php echo $mlink; ?>?c=cangles"><img src="<?php echo $mlink; ?>images/companies/cangles.jpg" alt="Cangles" /></a><br /><p>Cangles is a Michigan family business that makes unique handmade recycled jewelry and gifts. When you make a purchase of our recycled jewelry, a portion is donated to charities that help the environment or provide services to people in need, and their pets. Save the Earth Foundation, Wounded Warrior Project, Pet FriendZ, Autism Speaks, our community food pantry, and Susan G. Komen for the Cure are included.</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div id="abouttitle" class="<?php echo $about; ?>">
<p>About Our Company</p>
</div>
<div id="aboutbtext" class="<?php echo $about; ?>">
<h3>Mission:</h3>
<p>Our mission is to offer fashionable jewelry that provides an opportunity to foster the improvement of humanity while supporting individuality and self expression.</p>
<br />
<img id="staff" src="<?php echo $mlink; ?>images/resources/staff.jpg" alt="" />
</div>
<div id="storetitle" class="<?php echo $storeinfo; ?>">
<p>Welcome to our Online Store</p>
</div>
<div id="storebtext" class="<?php echo $storeinfo; ?>">
<p></p>
<?php
$query = mysql_query("SELECT * FROM `charities` WHERE url = '$charity'");
if (isset($_GET['c'])) {
while ( $row = mysql_fetch_assoc($query)) {
?>
<h3><?php echo $row['title']; ?></h3><br /><p><?php echo $row['description']; ?></p>
<?php
}
}
?>
</div>
<div id="newstitle" class="<?php echo $news; ?>">
</div>
<div id="newsbtext" class="<?php echo $news; ?>">
<h3>Employee of the Month</h3>
<div id="eotm"><img src="<?php echo $mlink; ?>images/resources/beotm.jpg" width="250" alt="none" /></div>
<p>No one yet</p>
<h3>Top Sales Person</h3>
<h4>Company Introduction Day</h4>
<p>No one yet</p>
<h4>Grand Opening</h4>
<p>No one yet</p>
<h4>Bakersfield Trade Fair</h4>
<p>No one yet</p>
<h3>Other News</h3>
<p>None</p>
<h3>Community Reports</h3>
<p>None</p>
</div>
<div id="eventstitle" class="<?php echo $events; ?>">
<p>Public Events</p>
</div>
<div id="eventsbtext" class="<?php echo $events; ?>">
<p>Our public events is where we will announce upcoming item of the weeks as well as other events such as open house and conference presentations.</p>
</div>
<?php
$tbl_name="jewelry";
if ($detect->isMobile()) {
$adjacents = 1;
}else{
$adjacents = 3;
}
$query = "SELECT COUNT(*) as num FROM $tbl_name $display ORDER BY $sort";
$total_pages = mysql_fetch_array(mysql_query($query));
$total_pages = $total_pages[num];
$targetpage = $current_url;
$limit = 12;
$page = $_GET['page'];
if($page) 
$start = ($page - 1) * $limit;
else
$start = 0;
$sql = "SELECT * FROM $tbl_name $display ORDER BY $sort LIMIT $start, $limit";
$result = mysql_query($sql);
if ($page == 0) $page = 1;
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($total_pages/$limit);
$lpm1 = $lastpage - 1;
$pagination = "";
if($lastpage > 1)
{	
$pagination .= "<div class=\"pagination\">";
if ($page > 1) 
$pagination.= "<a href=\"$targetpage&amp;page=$prev\">previous</a>";
else
$pagination.= "<span class=\"disabled\">previous</span>";	
if ($lastpage < 7 + ($adjacents * 2))
{	
for ($counter = 1; $counter <= $lastpage; $counter++)
{
if ($counter == $page)
$pagination.= "<span class=\"current\">$counter</span>";
else
$pagination.= "<a href=\"$targetpage&amp;page=$counter\">$counter</a>";					
}
}
elseif($lastpage > 5 + ($adjacents * 2))
{
if($page < 1 + ($adjacents * 2))		
{
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($counter == $page)
$pagination.= "<span class=\"current\">$counter</span>";
else
$pagination.= "<a href=\"$targetpage&amp;page=$counter\">$counter</a>";					
}
$pagination.= "...";
$pagination.= "<a href=\"$targetpage&amp;page=$lpm1\">$lpm1</a>";
$pagination.= "<a href=\"$targetpage&amp;page=$lastpage\">$lastpage</a>";		
}
elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
{
$pagination.= "<a href=\"$targetpage&amp;page=1\">1</a>";
$pagination.= "<a href=\"$targetpage&amp;page=2\">2</a>";
$pagination.= "...";
for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
{
if ($counter == $page)
$pagination.= "<span class=\"current\">$counter</span>";
else
$pagination.= "<a href=\"$targetpage&amp;page=$counter\">$counter</a>";					
}
$pagination.= "...";
$pagination.= "<a href=\"$targetpage&amp;page=$lpm1\">$lpm1</a>";
$pagination.= "<a href=\"$targetpage&amp;page=$lastpage\">$lastpage</a>";		
}
else
{
$pagination.= "<a href=\"$targetpage&amp;page=1\">1</a>";
$pagination.= "<a href=\"$targetpage&amp;page=2\">2</a>";
$pagination.= "...";
for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
{
if ($counter == $page)
$pagination.= "<span class=\"current\">$counter</span>";
else
$pagination.= "<a href=\"$targetpage&amp;page=$counter\">$counter</a>";				
}
}
}
if ($page < $counter - 1) 
$pagination.= "<a href=\"$targetpage&amp;page=$next\">next</a>";
else
$pagination.= "<span class=\"disabled\">next</span>";
$pagination.= "</div>\n";		
}


?>
<?php
while($row = mysql_fetch_array($result)){
$cart1 = str_replace('amp;','',$row['cart']);
parse_str($cart1, $cart);
extract($cart);
$product1 = $product.Trim();
$product2 = str_replace('+',' ',$product1);
$product3 = str_replace('-','',$product2);
$product4 = str_replace('  ',' ',$product3);
?>
<div class="item">
<noscript>
<h4><?php echo $row['title']; ?></h4>
<br />
</noscript>
<div class="itemimage">
<a href="<?php echo $clink; ?><?php echo $row['cart']; ?><?php echo $hash; ?>"><img src="<?php echo $mlink; ?><?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" /></a>
</div>
<div class="itemdetails">
<h4><?php echo $row['title']; ?></h4>
<p><?php echo $row['description']; ?></p>
<h5>Company: <?php echo $row['charity']; ?></h5>
<b class="price"><?php echo $row['price']; ?></b>
</div>
<form class="ac" action="http://ww6.aitsafe.com/cf/add.cfm" method="post">
<input name="userid" type="hidden" value="83284138">
<input name="product" type="hidden" value="<?php echo $product4; ?>">
<input name="price" type="hidden" value="<?php echo $price; ?>">
<input name="return" type="hidden" value="<?php echo $current_location; ?>">
<input class="ac" type="submit" value="Buy">
</form>
</div>
<?php
}
?>
<div class="<?php echo $storemenu; ?>">
<br />
<?php echo $pagination ?>
</div>
</div>
</div>
</div>
<div id="footer">
<div class="wrapper">
<div id="footercontent">
<div id="contact" class="fleft">
<h4>Email</h4>
<a href="mailto:ripple@chs-ve.com">ripple@chs-ve.com</a>
<h4>Phone</h4>
<a href="#">661.588.8601</a>
<h4>Fax</h4>
<a href="#">661.588.4453</a>
</div>
<div id="fline" class="fleft">
</div>
<div id="disclaimer" class="fright">
<p>This Virtual Enterprise online store is for educational purposes only.  (2012-2013  Ripple Inc.)</p>
</div>
<br class="cf" />
</div>
</div>
</div>
</body>
</html>