<?php
$mlink="http://chs-ve.com/ripple/";
$clink="http://ww6.aitsafe.com/cf/add.cfm?userid=83284138&amp;return=chs-ve.com%2Fripple%2F%3Fp%3Dstore&amp;";


$connect = mysql_connect("localhost","chsve0_radmin","goldenhawk72") or die("Couldn't connect");
mysql_select_db("chsve0_ripple") or die("couldnt find database");

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
}elseif ($_GET['c'] == "charitycharms") {

$title = "Charity Charms | Store";

$display = "WHERE charity = 'charitycharms'";
$storemenu= "showme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$home= "hideme";
$promoslider = "hideme";
$storeinfo= "showme";
}
else {

$title = "Home";

$display = "WHERE gender = '0'";
$home = "showme";
$promoslider = "showme";
$storemenu= "hideme";
$news= "hideme";
$about= "hideme";
$events= "hideme";
$storeinfo="hideme";
}

if ($_GET['s'] == "date") {
$sort = "date";
} elseif ($_GET['s'] == "charity") {
$sort = "charity";
} else {
$sort = "id";
}

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
$current_url1 = str_replace("&s=charity", "", curPageURL());


$current_url2 = str_replace("&s=date", "", $current_url1);


$current_url = str_replace("www.", "", $current_url2);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ripple Inc. | <?php echo $title; ?></title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $mlink; ?>ss.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){	
$('#menu li span').hover(function(){$(this).css("background-color","#851010");},function(){$(this).css("background-color","#C8DAA4");});
$(".item").hover(function(){$(this).find('.itemdetails').delay("fast").slideDown("fast");},function(){$(this).find('.itemdetails').slideUp("fast");});
$("#scroller").simplyScroll({
		customClass: 'vert',
		orientation: 'vertical',
        auto: true,
        autoMode: 'loop',
		frameRate: 20,
		speed: 2
		});
});
</script>
<style type="text/css">
.hideme{display:none;}
.showme{display:block;}
*{border:0px;position:relative;list-style:none;margin:0;padding:0;z-index:0;font-family:Verdana,Helvetica,sans-serif;}
html,body{width:100%;height:100%;}
#header,#body,#footer{position:relative;width:100%;clear:both;}
#header{min-height:150px;background-color:#A3DDFF;padding-top:25px; }
#footer{background-color:#C8DAA4;margin-top:25px; padding-top:25px;}
a:link {text-decoration:none;color:#851010;}
a:visited {color:#851010;}
a:hover {text-decoration:underline;color:#851010;}
a:active {text-decoration:underline;color:#C8DAA4;}
.wrapper{width:1024px;margin:0 auto; padding:12px;}
#logo{width:200px;float:left;display:block;}
#menu ul li a:hover {text-decoration:underline;color:#C8DAA4;}
#menu{float:right;width:700px;display:block;margin-top:115px;right:0px;}
#menu ul{list-style:none;}
#menu ul li{float:left;padding-bottom:15px;border-bottom:thin solid #C8DAA4;margin-left:10px;}
#menu ul li a span{bottom:0px;min-height:48px;padding:15px;margin-left:10px;margin-right:10px;font-size:large;background-color:#C8DAA4;border-top-left-radius:10px; border-top-right-radius:10px;}
#sidebar{min-height:500px;position:relative;width:200px;float:left;padding-right:25px;display:block;}
#content{margin-bottom:25px;min-height:500px;width:720px;padding:25px;padding-top:0px;display:block;border-left:thin #A3DDFF solid;}
#body{min-height:500px;margin-top:25px;margin-bottom:25px;}
#footer div{position:relative;display:block;}
#footercontent{min-height:225px;width:500px;margin-left:auto;margin-right:auto;text-align:left;}
#contact{width:200px;padding-right:25px;border-right:thin #A3DDFF solid;}
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
.item{width:200px;height:300px;margin-right:25px;float:left;margin-bottom:25px;}
.itemimage, .itemdetails{width:100%;height:100%;position:absolute;top:0px;left:0px;}
.itemimage img{width:100%;height:100%;}
.itemdetails{display:none;background-color:#A3DDFF;}
.itemdetails h4, .itemdetails p{position:relative;padding:10px;}
.ac{position:absolute;bottom:10px;right:15px;}
.price{position:absolute;bottom:10px;left:15px;}
.simply-scroll-container {position: relative;}
.simply-scroll-clip {position: relative;overflow: hidden;}
.simply-scroll-list {overflow: hidden;margin: 0;padding: 0;list-style: none;}	
.simply-scroll-list li {padding: 0;margin: 0;list-style: none;}	
.simply-scroll-list li img {border: none;display: block;}
.vert {width: 200px;height: 500px;}
.vert .simply-scroll-clip {width: 200px;height: 500px;}
.vert .simply-scroll-list li {width: 200px;height: 335px; padding-bottom:10px;margin-top:10px;border-bottom:thin solid #CCCCCC;}
</style> 
</head>
<body>
<div id="header">
<div class="wrapper">
<div id="logo" class="fleft">
<a href="<?php echo $mlink; ?>"><img src="<?php echo $mlink; ?>images/resources/logo.png" width="200px" alt="" /></a>
</div>
<div id="menu" class="fright">
<ul>
<li><a href="<?php echo $mlink; ?>"><span>Home</span></a></li>
<li><a href="<?php echo $mlink; ?>?p=store"><span>Store</span></a></li>
<li><a href="<?php echo $mlink; ?>?p=about"><span>About</span></a></li>
<li><a href="<?php echo $mlink; ?>?p=news"><span>News</span></a></li>
<li><a href="<?php echo $mlink; ?>?p=events"><span>Events</span></a></li>
<li><a href="http://ww6.aitsafe.com/cf/review.cfm?userid=83284138&amp;return=chs-ve.com%2Fripple%2F%3Fp%3Dstore&amp;"><span>Cart</span></a></li>
</ul>
</div>
</div>
</div>
<div id="body">
<div class="wrapper">
<div id="sidebar" class="fleft">
<div id="storemenu" class="s">
<ul class="<?php echo $storemenu; ?>">
<li><h4>Category:</h4></li>
<li><a href="<?php echo $mlink; ?>?p=necklaces">Necklaces</a></li>
<li><a href="<?php echo $mlink; ?>?p=watches">Watches</a></li>
<li><a href="<?php echo $mlink; ?>?p=bracelets">Bracelets</a></li>
<li><a href="<?php echo $mlink; ?>?p=rings">Rings</a></li>
<li><a href="<?php echo $mlink; ?>?p=headbands">Headbands</a></li>
<li><a href="<?php echo $mlink; ?>?p=earrings">Earrings</a></li>
<li><h4>Sort By:</h4></li>
<li><a href="<?php echo $current_url; ?>&amp;s=date">Date</a></li>
<li><a href="<?php echo $current_url; ?>&amp;s=charity">Charity</a></li>
</ul>
</div>
<div class="<?php echo $promoslider; ?>">
<ul id="scroller">

<?php
$query = mysql_query("SELECT `id`, `date`, `gender`, `type`, `image`, `cart`, `price`, `description`, `title`, `charity`, `promo` FROM `jewelry` WHERE promo = 'yes'");

while ( $row = mysql_fetch_assoc($query)) {
	?>

<li><a href="<?php echo $clink; ?><?php echo $row['cart']; ?>"><img src="<?php echo $mlink; ?><?php echo $row['image']; ?>" width="200" height="300" alt="" /><br /><?php echo $row['price']; ?> -- add to cart</a></li>
<?php
	
}

?>
</ul>
</div>
</div>
<div id="content" class="fright">
<div id ="cslider">
</div>
<div id="hometitle" class="<?php echo $home; ?>">
<p>Welcome To Ripple Inc.</p>
</div>
<div id="hometext" class="<?php echo $home; ?>">
<p>We are a Jewelry Company for the Virtual Enterprise Marketplace. Feel Free to check out our Store</p>
<br />
<h3>Featured Brands</h3>
<table>
<tbody>
<tr>
<td>
<a href="<?php echo $mlink; ?>?c=charitycharms"><img src="<?php echo $mlink; ?>images/companies/charitycharms.png" alt="Charity Charms" /></a>
</td>
</tr>
</tbody>
</table>
</div>
<div id="abouttitle" class="<?php echo $about; ?>">
<p>About Our Company</p>
</div>
<div id="aboutbtext" class="<?php echo $about; ?>">
<h3>Mission:</h3>
<p>Our mission is to offer fashionable jewelry that provides an opportunity to foster the improvement of humanity while supporting individuality and self expression.</p>
</div>
<div id="storetitle" class="<?php echo $storeinfo; ?>">
<p>Welcome to our Online Store</p>
</div>
<div id="storebtext" class="<?php echo $storeinfo; ?>">
<p>Please feel free to choose a selection from the left menu items.</p>
</div>
<div id="newstitle" class="<?php echo $news; ?>">
</div>
<div id="newsbtext" class="<?php echo $news; ?>">
<h3>Employee of the Month</h3>
<img src="<?php echo $mlink; ?>images/resources/beotm.jpg" width="250px" alt="none" />
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
$query = mysql_query("SELECT `id`, `date`, `gender`, `type`, `image`, `cart`, `price`, `description`, `title`, `charity`, `promo` FROM `jewelry` $display ORDER BY $sort");

while ( $row = mysql_fetch_assoc($query)) {
	?>

<div class="item">
<noscript>
<h4><?php echo $row['title']; ?></h4>
<br />
</noscript>
<div class="itemimage">
<a href="<?php echo $clink; ?><?php echo $row['cart']; ?>"><img src="<?php echo $mlink; ?><?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" /></a>
</div>
<div class="itemdetails">
<h4><?php echo $row['title']; ?></h4>
<p><?php echo $row['description']; ?></p>
<h5><?php echo $row['charity']; ?></h5>
<b class="price"><?php echo $row['price']; ?></b> <a class="ac" href="<?php echo $clink; ?><?php echo $row['cart']; ?>">Add to Cart</a>
</div>
<noscript>
<br />
<b class="price"><?php echo $row['price']; ?></b> <a class="ac" href="<?php echo $clink; ?><?php echo $row['cart']; ?>">Add to Cart</a>
</noscript>
</div>
<?php
	
}

?>
</div>
</div>
</div>
<div id="footer">
<div class="wrapper">
<div id="footercontent">
<div id="contact" class="fleft">
<h4>Email</h4>
<a href="mailto:sales@chs-ve.com">sales@chs-ve.com</a>
<h4>Phone</h4>
<a href="#">661.588.8601</a>
<h4>Fax</h4>
<a href="#">661.588.4453</a>
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