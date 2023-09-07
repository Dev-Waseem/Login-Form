<?php 
$connection = mysqli_connect('localhost','root','','new');
if(!$connection){
//     echo "Connected";
// }
// else{
    die("Not Connected" . mysqli_connect_error());
}
?>