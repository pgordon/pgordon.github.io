 <?php

 $user = "Username"; // please replace with your user
 $pass = "Password"; // please replace with your passwd

 $useroptions = ['cost' => 8,];
 $userhash    = password_hash($user, PASSWORD_BCRYPT, $useroptions);
 $pwoptions   = ['cost' => 8,];
 $passhash    = password_hash($pass, PASSWORD_BCRYPT, $pwoptions);

 echo $userhash;
 echo "<br />";
 echo $passhash;

 ?>
