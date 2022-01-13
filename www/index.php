<?php
ob_start();
$site_name = "New Website";
$site_email = "site@gmail.com";
$description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$logo_directory = "dummy.png";
$fbid = "2213158278782711";
session_start();
// die("Critical Maintenance in progress");
#Define App Path
define("D_PATH", dirname(dirname(__FILE__)));
CONST APP_PATH = D_PATH."/v1";
#load database
#load Controllers(functions)
include D_PATH."/.env/config.php";
#load routes
require APP_PATH."/models/model.php";
require APP_PATH."/controllers/controller.php";
#load routes
// require APP_PATH."/routes/router.php";






include APP_PATH."/routes/router.php";
include APP_PATH."/ajax/ajax_router/router.php";
include APP_PATH."/payment/payment_router/router.php";
include APP_PATH."/auth/auth_router/router.php";
include APP_PATH."/routes/ajax_router.php";
include APP_PATH."/routes/admin_router.php";

 ?>
