<?

#############################################################################
#    This program is free software: you can redistribute it and/or modify	#
#    it under the terms of the GNU General Public License as published by	#
#    the Free Software Foundation, either version 3 of the License, or		#
#    (at your option) any later version.									#
#																			#
#    This program is distributed in the hope that it will be useful,		#
#    but WITHOUT ANY WARRANTY; without even the implied warranty of			#
#   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the			#
#    GNU General Public License for more details.							#
#																			#
#    You should have received a copy of the GNU General Public License		#
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.	#
#############################################################################

ob_start();
session_start();
if(isset($_SESSION['username'])){
	$logged_in = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Hosting Panel</title>
<style type="text/css">
body {
	font: 80% verdana, arial, helvetica, sans-serif;
	text-align: center; /* for IE */
	background-color: #CCC;
}
#container {
	margin: 0 auto;   /* align for good browsers */
	text-align: left; /* counter the body center */
	width: 377px;
	background-image:url(images/login-middle.jpg);
}
#top {
	background-image:url(images/login-top.jpg);
	height:35px;
}
#middle {
	padding-left:30px;
	padding-right:30px;
}
#bottom {
	background-image:url(images/login-bottom.jpg);
	height:35px;
}
.logo-text {
	color:#FFF;
}
.input {
	width:100%
}
input.button {
	font: bold 12px Arial, Sans-serif;
	height: 24px;
	margin: 0;
	padding: 2px 3px;
	color: #FFF;
	background: #8EB50C url(images/button-bg.jpg) repeat-x 0 0;
	border: none;
}
body, td, th {
	color: #FFF;
}
</style>
</head>
<body>
<?
if(isset($_GET['page'])){
	switch ($_GET['page']){
		case "delete_admin": include("popups/delete_admin.php");
		break;
		case "delete_domain": include("popups/delete_domain.php");
		break;
		case "delete_user": include("popups/delete_user.php");
		break;
		case "drop_database": include("popups/drop_database.php");
		break;
		case "delete_job": include("popups/delete_job.php");
		break;
		case "show_user": include("popups/show_user.php");
		break;
	}
}
?>
</body>
</html>
<?
}
?>
