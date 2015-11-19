<?php 
require_once("inc/functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>jQuery animated navigation</title>
<link href="style/core.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.color.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
<div id="wr">
  <div id="hd">
    <ul id="mnv">
      <li<?php echo active("home"); ?>><a href="?p=home">Home</a></li>
      <li<?php echo active("about_us"); ?>><a href="?p=about_us">About us</a></li>
      <li<?php echo active("services"); ?>><a href="?p=services">Services</a></li>
      <li<?php echo active("gallery"); ?>><a href="?p=gallery">Gallery</a></li>
      <li<?php echo active("contact_us"); ?>><a href="?p=contact_us">Contact us</a></li>
    </ul>
  </div>
</div>
</body>
</html>