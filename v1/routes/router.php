<?php
$uri = explode("/",$_SERVER['REQUEST_URI']);


if (count($uri) > 2) {


  if (!empty($_GET)) {
  $query_string = explode("?",$uri[2])[1];
}else{
  $query_string = "";
}

  switch ($uri[1]."/".$uri[2]) {


  }



}else{
  if (!empty($_GET)) {
  $query_string = explode("?",$uri[1])[1];
}else{
  $query_string = "";
}
  // $query_string = explode("?",$uri[1])[1];
  switch ($uri[1]) {
    case '':
      include APP_PATH. "/views/index.php";
      break;
    case 'index':
      include APP_PATH. "/views/index.php";
      break;
    case 'test':
      include APP_PATH."/views/test.php";
      break;
    case 'test?'.$query_string:
      include APP_PATH."/views/test.php";
      break;
    case 'brand-register':
      include APP_PATH. "/views/brand_register.php";
      break;
  }

}










 ?>
