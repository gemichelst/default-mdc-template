<?php

##################################################################################################

# current site
if(isset($_GET["site"])) { $current_site = $_GET["site"]; }
if(!isset($current_site)) { $current_site = "shoes"; }

##################################################################################################

# current filename
//$current_fileName = basename($_SERVER['SCRIPT_NAME']);
$current_fileName = "index-drawer.php";
$current_filePath = $_SERVER["SCRIPT_FILENAME"];

##################################################################################################

# navigation links
function navlinks($site,$typ) {

	$navLinks["base"] = "index-drawer.php?site=";

	switch($site)
	{
	case ("shoes"):
	$navLink = $navLinks["base"]."shoes";
	$navIcon = "list";
	if($typ == "link") { echo $navLink; } 
	elseif($typ == "icon"){ echo $navIcon; }
	elseif($typ == "selected" && $_GET["site"]==$site) { echo "mdc-temporary-drawer--selected"; }
	break;

	case ("manager"):
	$navLink = $navLinks["base"]."manager";
	$navIcon = "assignment";
	if($typ == "link") { echo $navLink; } 
	elseif($typ == "icon"){ echo $navIcon; }
	elseif($typ == "selected" && $_GET["site"]==$site) { echo "mdc-temporary-drawer--selected"; }
	break;

	case ("photos"):
	$navLink = $navLinks["base"]."photos";
	$navIcon = "photo_library";
	if($typ == "link") { echo $navLink; } 
	elseif($typ == "icon"){ echo $navIcon; }
	elseif($typ == "selected" && $_GET["site"]==$site) { echo "mdc-temporary-drawer--selected"; }
	break;

	case ("share"):
	$navLink = $navLinks["base"]."share";
	$navIcon = "share";
	if($typ == "link") { echo $navLink; } 
	elseif($typ == "icon"){ echo $navIcon; }
	elseif($typ == "selected" && $_GET["site"]==$site) { echo "mdc-temporary-drawer--selected"; }
	break;

	
	case ("settings"):
	$navLink = $navLinks["base"]."settings";
	$navIcon = "settings";
	if($typ == "link") { echo $navLink; } 
	elseif($typ == "icon"){ echo $navIcon; }
	elseif($typ == "selected" && $_GET["site"]==$site) { echo "mdc-temporary-drawer--selected"; }
	break;

	case ("user"):
	$navLink = $navLinks["base"]."user";
	$navIcon = "account_circle";
	if($typ == "link") { echo $navLink; } 
	elseif($typ == "icon"){ echo $navIcon; }
	elseif($typ == "selected" && $_GET["site"]==$site) { echo "mdc-temporary-drawer--selected"; }
	break;

	case ("login"):
	$navLink = $navLinks["base"]."login";
	$navIcon = "lock_open";
	if($typ == "link") { echo $navLink; } else { echo $navIcon; }
	if($typ == "selected" && $_GET["site"]==$site) { echo "mdc-temporary-drawer--selected"; }
	break;

	case ("logout"):
	$navLink = $navLinks["base"]."logout";
	$navIcon = "close";
	if($typ == "link") { echo $navLink; } 
	elseif($typ == "icon"){ echo $navIcon; }
	elseif($typ == "selected" && $_GET["site"]==$site) { echo "mdc-temporary-drawer--selected"; }
	break;

	default:
	$navLink = $navLinks["base"]."shoes";
	$navIcon = "list";
	if($typ == "link") { echo $navLink; } 
	elseif($typ == "icon"){ echo $navIcon; }
	elseif($typ == "selected") { echo "mdc-temporary-drawer--selected"; }
	break;
	}
}

##################################################################################################

# content includer
function content($site) {

		if($site=="") { $do = "nothing"; }
	elseif($site=="shoes") { include('inc/sites/shoes.php'); }
	elseif($site=="manager") { include('inc/sites/manager.php'); }
	elseif($site=="photos") { include('inc/sites/photos.php'); }
	elseif($site=="share") { include('inc/sites/share.php'); }
	elseif($site=="settings") { include('inc/sites/settings.php'); }
	elseif($site=="user") { include('inc/sites/user.php'); }
	elseif($site=="login") { include('inc/sites/login.php'); }
	elseif($site=="logout") { include('inc/sites/logout.php'); }
else { $do = "nothing"; }

}

##################################################################################################

##################################################################################################

?>