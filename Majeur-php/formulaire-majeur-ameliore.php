<?php
  date_default_timezone_set('UTC');
  $user_birthday = new DateTime($_POST['birthday']);
  $major_interval = new DateInterval('P18Y');

$result = $user_birthday->sub($major_interval);
if($result > $major_interval){
  echo "Vous êtes majeur !";
}
else{
  echo "Vous n'êtes pas majeur !";
}
 ?>
