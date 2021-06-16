<?php

include 'dbconnection.php';

echo 'hi';

if(isset($_GET['token'])){
echo 'inside if';
 $token=$_GET['token'];
 $inactiveupdate = "Update registration set status='inactive' where token='$token'"; //SQL
 $inactiveupdatequery = mysqli_query($connection, $inactiveupdate);
 if($inactiveupdatequery)
 {
   echo "Unsubscribed";
 }
else{
    echo "Still subscribed";
   }
}

?>
