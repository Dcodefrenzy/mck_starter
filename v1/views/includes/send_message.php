<?php



// if(isset($_SESSION['t_id'])){
//   $sess = $_SESSION['t_id'];
// }









$count = 1;
$status = 0;

$stmt = $conn->prepare("INSERT INTO message VALUES(NULL,:snd,:sndAl, :recAl, :rec, NOW(),NOW(),:txt,:stts,:cnt)");
$stmt->bindParam(":snd", $_POST['sender']);
$stmt->bindParam(":sndAl", $_POST['sender_alias']);
$stmt->bindParam(":recAl", $_POST['receiver_alias']);
$stmt->bindParam(":rec", $_POST['receiver']);
$stmt->bindParam(":txt", $_POST['text']);
$stmt->bindParam(":stts", $status);
$stmt->bindParam(":cnt", $count);
$stmt->execute();




if($_POST['who'] == 1){
  $bd = contactFullInfo($conn,$_POST['sender']);
  $who = $bd['time'];
  $headings = "Message from Attendout";
  $message = $_POST['text'];
  $page = "help";
  $webp = time();
  include 'adminNotification.php';
}elseif(_POST['who'] == 2){
  $bd = adminInfoFullInfo($conn,$_POST['sender']);
  $who = $bd['image_2'];
  $headings = "Message from ".$_POST['contact_name'];
  $message = $_POST['text'];
  $page = "select?id=".$sender;
  $webp = time();
  include 'adminNotification.php';
}
