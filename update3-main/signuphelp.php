<?php
$connection=mysqli_connect('localhost','root');
if($connection)
{
    echo"connection successfull";
}
else{
    echo "ERROR";
}
?>